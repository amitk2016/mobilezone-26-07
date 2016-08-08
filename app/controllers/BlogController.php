<?php

class BlogController extends PageController
{

	public function __construct($dbc)
	{
		parent::__construct();

		// Save the database connection
		$this->db = $dbc;

		$this->mustBeLoggedIn();

	
	}

	public function buildHTML(){

		echo $this->plates->render('blogs',$this->data);
	}

}