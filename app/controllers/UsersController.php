<?php

class UsersController extends PageController
{

	public function __construct($dbc)
	{
		parent::__construct();

		// Save the database connection
		$this->db = $dbc;

		$this->mustBeLoggedIn();

		//User Submitted the form ??
		if ( isset ( $_POST['update-contact']) ) {
			$this->updateContactDetails();
		}
		//User created a new blog
		if ( isset ( $_POST['new-blog'] ) ) {
			$this->processNewBlog();
		}
	}

	public function buildHTML(){

		echo $this->plates->render('users',$this->data);
	}

	private function updateContactDetails(){

		$totalErrors = 0;

		if ( ($_POST['first-name']) == '' || strlen($_POST['first-name']) >50 ) {
			$this->data['firstNameMessage'] = 'Must provide first name and at most 50 characters only';
			$totalErrors++;
		}
		if (strlen($_POST['last-name']) == 0 || strlen($_POST['last-name']) >50 ) {
			$this->data['lastNameMessage'] = 'Must provide last name and at most 50 characters only';
			$totalErrors++;
		}
		if ( $totalErrors == 0 ) {
			$firstName = $this->db->real_escape_string( $_POST['first-name']);
			$lastName = $this->db->real_escape_string( $_POST['last-name']);

			$userID = $_SESSION['id'];

			//prepare the sql
			$sql = "UPDATE users
							SET first-name = '$firstName',
									last-name  = '$lastName'
							WHERE id = $userID";

			// Run the query
			$this->db->query($sql);

		}

	}


	private function processNewBlog(){
		$totalErrors = 0;

		$subject = trim($_POST['subject']);
		$desc = trim($_POST['desc']);
		// subject
		if ( strlen( $subject ) == 0 ) {
			$this->data['subjectMessage'] = '<p>Required</p>';
			$totalErrors++;
		}elseif (strlen( $subject ) > 100 ) {
			$this->data['subjectMessage'] = '<p>Can not be more than 100 characters</p>';
			$totalErrors;
		}

		if ( strlen( $desc ) == 0 ) {
			$this->data['descMessage'] = '<p>Required</p>';
			$totalErrors++;
		}elseif (strlen( $desc ) > 100 ) {
			$this->data['descMessage'] = '<p>Can not be more than 1000 characters</p>';
			$totalErrors;
		}
		if ($totalErrors == 0 ) {

			// filter the data
			$subject = $this->db->real_escape_string($subject);
			$desc = $this->db->real_escape_string($desc);

			// Get the id of logged in user
			$userID = $_SESSION['id'];
			//SQL
			$sql = "INSERT INTO blogs(subject,description,user_id)
							VALUES ('$subject','$desc',$userID)";

			$this->db->query($sql);
			
			print_r($sql);
			die();
			//Make sure it worked

			// Sucess message ! or error message

			//
		}


	}

}
