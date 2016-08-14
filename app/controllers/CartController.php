<?php


class CartController extends PageController{
	// Properties

	public function __construct($dbc) {

		parent::__construct();

		$this->db = $dbc;

	}



	public function buildHTML(){
		echo $this->plates->render('cart');
	}



}
