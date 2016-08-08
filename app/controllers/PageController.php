<?php

abstract class PageController
{
	//Properties 
	protected $title;
	protected $description; 
	protected $db;
	protected $plates;
	protected $data = [];


	public function __construct() {

		// Instantiate (create instance of) Plates library
		$this->plates = new League\Plates\Engine('app/templates');

	}

	public function mustBeLoggedIn(){

		//if you are not logged in 
		if ( !isset($_SESSION['id']) ) {
		//Redirect the user to login page
			header('Location: index.php?page=login');

		}
	}

	abstract public function buildHTML();
}