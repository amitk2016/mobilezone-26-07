<?php

abstract class PageController
{
	//Properties 
	protected $title;
	protected $description; 
	protected $dbc;
	protected $plates;
	protected $data = [];


	public function __construct() {

		// Instantiate (create instance of) Plates library
		$this->plates = new League\Plates\Engine('app/templates');

	}


	abstract public function buildHTML();
}