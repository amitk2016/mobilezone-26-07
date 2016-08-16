<?php


class CartController extends PageController{
	// Properties

	public function __construct($dbc) {

		parent::__construct();

		$this->db = $dbc;

		if( isset($_POST['addtoCart'])){
			$this->addtoCart();
		}

		$this->getCartData();
	}



	public function buildHTML(){
		echo $this->plates->render('cart');
	}

	private function addtoCart(){
		$userID = $_SESSION['id'];
		$productID = $_POST['productid'];// hidden input

		//Get the price from the product
		$sql = "SELECT price
						FROM mobiles";

		//Run a select query to get price of product
		$result = $this->db->query($sql);

		$productPrice = $result->fetch_assoc();

		// $productQuantity = $this->db->real_escape_string( $_POST['quantity'] );
		// //Calculate the subtotal
		// //Multiply the quantity by the product price
		// $subTotal = $productPrice * $productQuantity ;
		//Insert Query
		$sql1 = "INSERT INTO cart(user_id,price)
						 VALUES ($userID,$productPrice)";
						 echo '<pre>';
				 		print_r($sql1);
				 		die();
		$this->db->query($sql1);


		//Get data from post variable


	}

	private function getCartData(){

		//Fiter the ID
		$userID = $_SESSION['id'];

		//Get info about this cart
		$sql = "SELECT *
				FROM cart
				JOIN mobiles
				ON product_id = mobiles.id
				WHERE user_id = $userID";

		echo "<pre>";
		print_r($sql);
		die();

		// Run the SQL
		$result = $this->db->query($sql);

		// if the query failed
		if ( !$results || $results->num_rows == 0 ) {

			header('Location: index.php?page=error');

		}else{

			$cartData = $result->fetch_assoc();

		}

	}

}
