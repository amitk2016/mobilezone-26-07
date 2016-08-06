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
		$this->getMobileProducts();


		echo $this->plates->render('mobiles');
	}

	private function getMobileProducts(){

		//Prepare some sql
		$sql = "SELECT * 
				FROM mobiles";

		// Run the Sql and capture the result 

		$result = $this->db->query($sql);

		// Extract the results as an array 
		$allProducts = $result->fetch_all(MYSQLI_ASSOC);

		echo'<pre>';
		print_r($allProducts);
		echo'</pre>';
		die();
		// return the results to the code that called this function



	}


}