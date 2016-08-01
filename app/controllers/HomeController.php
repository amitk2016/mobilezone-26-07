<?php

/**
* 
*/
class HomeController extends PageController{
	// Properties 
	public function __construct($dbc) {

		parent::__construct();

		$this->dbc = $dbc;

	}


	
	public function buildHTML(){

		//create instance of plates library 

		$plates = new League\Plates\Engine('app/templates');


		echo $plates->render('home');
	}



}