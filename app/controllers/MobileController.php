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

		if( isset($_GET['pagination']) ) {
      	
      		$paginationPage = $this->db->real_escape_string($_GET['pagination']);

    	} else {

    	  	$paginationPage = 1;
    	}

    	$sql = "SELECT COUNT(id) AS TotalProducts FROM mobiles";

    	$result = $this->db->query($sql);
    	$result = $result->fetch_assoc();

    	$totalProducts = $result['TotalProducts'];

    	$totalPages = $totalProducts / 8;

    	$totalPages = ceil($totalPages);

    	$this->data['totalPages'] = $totalPages;

    	$offset = $paginationPage * 8 - 8;

		//Prepare some sql
		$sql = "SELECT *
				FROM mobiles LIMIT 8 OFFSET $offset";

		// Run the Sql and capture the result

		$result = $this->db->query($sql);

		if( !$result ) {
     		 die('Some Problem with the server, we are working on it,Thanks!');
    	}

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
