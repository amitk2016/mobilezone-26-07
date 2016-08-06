<?php

class HomeController extends PageController{
	// Properties 






	//Methods 
	public function __construct($dbc) {

		parent::__construct();

		$this->db = $dbc;

	}


	
	public function buildHTML(){

		
		echo $this->plates->render('home');
	}



}