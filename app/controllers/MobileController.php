<?php


class MobileController extends PageController {
	// Properties
	public function __construct($dbc) {

		parent::__construct();

		$this->db = $dbc;
	}


	// public function __construct(argument)
	// {
	// 	# code...
	// }

	public function buildHTML(){

		//Get the products from database
		$allProducts = $this->getMobileProducts();

		$this->data['allProducts'] = $allProducts;

		echo $this->plates->render('mobiles', $this->data);
	}

	private function getMobileProducts(){

		//Prepare some sql
		$sql = "SELECT *
				FROM mobiles";

		// Run the Sql and capture the result

		$result = $this->db->query($sql);

		// Extract the results as an array
		$allProducts = $result->fetch_all(MYSQLI_ASSOC);
		// die($allProducts);

		return $allProducts;



		// return the results to the code that called this function



	}


}
