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
		die($sql1);
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

			header('Location: index.php?page=error');

		}else{

			$this->data['cartAllData'] = $results->fetch_all(MYSQL_ASSOC);

		}

	}

}
