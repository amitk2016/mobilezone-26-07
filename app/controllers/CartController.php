<?php


class CartController extends PageController{
	// Properties

	public function __construct($dbc) {

		parent::__construct();

		$this->db = $dbc;

		if( isset($_POST['addtoCart']) ){
			$this->addtoCart();
		}
		
		if( isset($_POST['latestProductCart']) ){
			$this->latestProductCart();
		}
	
		if ( isset($_POST['cart-delete']) ) {
			$this->deleteItem();
		}

		$this->getCartData();
	}



	public function buildHTML(){
		echo $this->plates->render('cart',$this->data);
	}

	private function addtoCart(){

		$userID = $_SESSION['id'];
		$productID = $_GET['productID'];
		$quantity = $_POST['quantity'];
		$this->data['qty'] = $quantity;
		//Get the price from the product
		$sql = "SELECT price
				FROM mobiles
				WHERE id = '$productID' ";

		//Run a select query to get price of product
		$result = $this->db->query($sql);

		$productPrice = $result->fetch_assoc();
		$price = $productPrice['price'];

		// //Calculate the subtotal
		// //Multiply the quantity by the product price
		$subtotal = $price * $quantity;

		//Insert Query
		$sql1 = "INSERT INTO cart(user_id,product_id,qty,subtotal)
				 VALUES ('$userID', '$productID', '$quantity', '$subtotal')";
		
		$this->db->query($sql1);
	}

	private function latestProductCart(){

		$userID = $_SESSION['id'];

		$productID = $_GET['productid'];
		

		$sql = "SELECT price
				FROM mobiles
				WHERE id ='$productID' ";

		$result = $this->db->query($sql);

		$productPrice = $result->fetch_assoc();
		$price = $productPrice['price'];

		$sql1 = "INSERT INTO cart(user_id,product_id,subtotal)
				 VALUES ('$userID','$productID','$price')";

		$this->db->query($sql1);

	}

	private function getCartData(){

		//Fiter the ID
		$userID = $_SESSION['id'];

		//Get info about this cart
		$sql = "SELECT cart.id AS cart_item_id, user_id, product_id,subtotal,title,price,list_price,qty,image
				FROM cart
				JOIN mobiles
				ON product_id = mobiles.id
				WHERE user_id = $userID";
		// Run the SQL
		$results = $this->db->query($sql);

		

		// if the query failed
		if ( !$results || $results->num_rows == 0 ) {

			header('Location: index.php?page=home');

		}else{

			$this->data['cartAllData'] = $results->fetch_all(MYSQL_ASSOC);
			// echo '<pre>';
			// print_r($this->data['cartAllData'] );
			// echo '</pre>';
			// die();
		}

	}

	private function deleteItem(){

		$userID = $_SESSION['id'];
		
		$cartID = $_GET['cartID'];
		$sql = "DELETE FROM cart 
				WHERE cart.id = $cartID
				AND user_id = $userID";

		$results = $this->db->query($sql);


	}




}
