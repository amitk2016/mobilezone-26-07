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

		parent::__construct();

		$this->dbc = $dbc;

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

		//create instance of plates library 

		$plates = new League\Plates\Engine('app/templates');

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

		echo $plates->render('register',$data);
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
		}
		// password length should be more than 8 character 
		if ( strlen($_POST['password']) < 8 ) {
			// password length too short 
			$this->passwordMessage = 'Must be atleast 8 character';
		}
		if ( $_POST['confirm-password'] == '' || $_POST['confirm-password'] !== $_POST['password'] ) {
			
			$this->confirmMessage = 'Must be same as above password';
		}


	}



}




