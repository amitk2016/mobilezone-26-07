<?php


class MobileController extends PageController {
	// Properties
	public function __construct($dbc) {

		parent::__construct();

		$this->db = $dbc;

		if ( isset($_POST['product-delete']) ) {
			$this->deleteItem();
		}

		$this->getMobileProducts();


	}


	public function buildHTML(){

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

		$this->data['allProducts'] = $allProducts;


	}

	private function deleteItem(){

		$userID = $_SESSION['id'];
		
		$productID = $this->db->real_escape_string( $_GET['productid'] );

		$sql = "DELETE FROM mobiles 
				WHERE mobiles.id = $productID";

		$result = $this->db->query($sql);

	}


}
