<?php 


class RegisterController extends PageController{

	// Properties 
	private $fnameMessage;





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


		echo $plates->render('register');
	}

	private function validateRegistrationForm(){

		// Make sure the Email has been provided and its valid
		if ( $_POST['fname'] == '') {
			
			// first name is not filled 
			$this->fnameMessage = 'Must Enter the First Name';


		}
	}



}




