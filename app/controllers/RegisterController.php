<?php


class RegisterController extends PageController{

	// Properties
	private $fnameMessage;
	private $lnameMessage;
	private $emailMessage;
	private $passwordMessage;
	private $confirmMessage;





	// Methods ( Functions )
	public function __construct($dbc) {

		//PageController page constructor(which is a parent construct) runs also with this line
		parent::__construct();

		// save the database conncetion
		$this->db = $dbc;

		// if the user has submitted the registration form

		if ( isset ($_POST['new-account']) ) {

		  	$this->validateRegistrationForm();

		}


	}

	public function registerAccount(){

	// validate the user's data

	// Check the database to see if email is in use

	// Check the strength of the password

	// register the account or show error message

	// if sucessful,log user in and redirect to the homepage


	}

	public function buildHTML(){


		// prepare a continer for data
		$data = [];

		// if there is an fname error
		if ($this->fnameMessage != '') {

			$data['fMessage'] = $this->fnameMessage;

		}
		//if there is an last name error

		if ($this->lnameMessage != '') {

			$data['lMessage'] = $this->lnameMessage;
		}

		if ($this->emailMessage != '') {
			$data['eMessage'] = $this->emailMessage;
		}

		if ( $this->passwordMessage != '') {

			$data['pMessage'] = $this->passwordMessage;
		}

		if ( $this->confirmMessage != '') {
			$data['cMessage'] = $this->confirmMessage;
		}

		echo $this->plates->render('register',$data);
	}




	private function validateRegistrationForm(){

		$totalError = 0;
		// Make sure first name is provided
		if ( $_POST['fname'] == '') {
			// first name is not filled
			$this->fnameMessage = 'Must Enter your First Name';
			$totalError++;
		}
		if ( $_POST['lname'] == '') {
			//last name not privided
			$this->lnameMessage = 'Must Enter your Last Name';
			$totalError++;
		}
		// Make sure the Email has been provided and its valid
		if ( $_POST['email'] == '') {
			// Email is invalid
			$this->emailMessage = 'Invalid Email';
			$totalError++;
		}
		$filteredEmail = $this->db->real_escape_string( $_POST['email'] );

		$sql = "SELECT email
				FROM users
				WHERE email = '$filteredEmail' ";

		//Run the query
		$result = $this->db->query($sql);

		// if the query failed or there is a result
		if ( !$result || $result->num_rows > 0 ) {
			$this->emailMessage = 'Email is in use';
			$totalError++;
		}

		//make sure email is not in use


		// password length should be more than 8 character
		if ( strlen($_POST['password']) < 8 ) {
			// password length too short
			$this->passwordMessage = 'Must be atleast 8 character';
			$totalError++;
		}
		if ( $_POST['confirm-password'] == '' || $_POST['confirm-password'] !== $_POST['password'] ) {

			$this->confirmMessage = 'Must be same as above password';
			$totalError++;
		}
		//if there is no errors
		if ( $totalError == 0 ) {


			// Validation Passed



			// filter user data for query
			$filteredfName = $this->db->real_escape_string( $_POST['fname'] );
			$filteredlName = $this->db->real_escape_string( $_POST['lname'] );


			// Hash the password

			$hash = password_hash( $_POST['password'] , PASSWORD_BCRYPT );

			$confirmHash = password_hash( $_POST['confirm-password'] , PASSWORD_BCRYPT );

			// Prepare the Sql
			$sql = "INSERT INTO users (first_name,last_name,email,password)
					VALUES ('$filteredfName','$filteredlName','$filteredEmail','$hash')";
			//Run the query
			$this->db->query($sql);

			$result = $this->db->query($sql);
			// Check to make sure if query worked


			// Log the user in
			$_SESSION['id'] = $this->db->insert_id;
			$_SESSION['privilege'] = 'user' ;
			$_SESSION['name'] = $filteredfName;
			// Redirect the user to homepage

			header('Location: index.php?page=home');
		}

	}



}
