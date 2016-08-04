<?php

class HomeController extends PageController{
	// Properties 






	//Methods 
	public function __construct($dbc) {

		parent::__construct();

		$this->db = $dbc;

	}


	
	public function buildHTML(){

		//create instance of plates library 

		$plates = new League\Plates\Engine('app/templates');


		echo $plates->render('home');
	}



}