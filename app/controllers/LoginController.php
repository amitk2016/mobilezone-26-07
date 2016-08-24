<?php 


class LoginController extends PageController {
	// Properties 

	public function __construct($dbc) {

		parent::__construct();

		$this->db = $dbc;

		//if the login form has been submitted
		if ( isset( $_POST['login'] ) ) {
			
			$this->processLoginForm();

		}

	}

	// public function __construct(argument)
	// {
	// 	# code...
	// }

	public function buildHTML(){

		echo $this->plates->render('login',$this->data);
	}

	private function processLoginForm(){

		$totalErrors = 0;

		// Make sure the email address has been provided 
		if ( strlen($_POST['email']) < 6 )  {
			
			//Prepare Error Messages 
			$this->data['emailMessage'] = 'Invalid Email';
			$totalErrors++;

		}	

		// Make sure password is at least 8 characters 

		if ( strlen($_POST['password']) < 8 ) {
			
			$this->data['passwordMessage'] = 'Must be atleast 8 characters';
			$totalErrors++;
		}
		// IF THERE ARE NO ERRORS
		if ( $totalErrors == 0 ) {
			
			// Check the database for the email address 


			// Get the hash password too

			$filteredEmail = $this->db->real_escape_string( $_POST['email'] );

			//Prepare the sql 
			$sql = "SELECT id,password,privilege, first_name
					FROM users
					WHERE email = '$filteredEmail' "; 

			// run the query 
			$result = $this->db->query($sql);

			// is there a result ?

			if ( $result->num_rows == 1) {
				
				// Check the password 
				$userData = $result->fetch_assoc();

				// Check the password
				$passwordResult = password_verify( $_POST['password'],$userData['password'] );

				// if the result was good 
				if ( $passwordResult == true ) {
					
					// log the user in 
					$_SESSION['id'] = $userData['id'];
					$_SESSION['privilege'] = $userData['privilege'];
					$_SESSION['name'] = $userData['first_name'];
					

					header('Location: index.php?page=home');

				}else {

					//Prepare the error message 
					$this->data['loginMessage'] = 'Email pr password Incorrect';


				}
			}else{

				// Email doesnt match with the database 
				$this->data['loginMessage'] = 'Email or Password Incorrect'; 
			}
		}

	}


}