<?php


class ProcessOrdersController extends PageController{
	// Properties

	public function __construct($dbc) {

		parent::__construct();

		$this->db = $dbc;

		if ( isset( $_POST['checkout'] ) ) {
			$this->addToOrders();
		}
		
	}

	public function buildHTML(){
		echo $this->plates->render('thankyou',$this->data);
	}

	private function addToOrders(){

		$userID = $_SESSION['id'];

		// select all the information from cart table
		$sql = "SELECT cart.id AS cart_item_id, user_id, product_id,subtotal,title,price,qty
				FROM cart
				JOIN mobiles
				ON product_id = mobiles.id
				WHERE user_id = $userID";

		$results = $this->db->query($sql);

		$processOrderData = $results->fetch_all(MYSQL_ASSOC);

		// echo '<pre>';	
		// print_r($processOrderData);
		// echo '</pre>';
		// die ();
		foreach($processOrderData as $orderEachItem){


			$orderID = rand();
			$cartID = $orderEachItem['cart_item_id'];
			$userID = $orderEachItem['user_id'];
			$productID = $orderEachItem['product_id'];
			$title = $orderEachItem['title'];
			$price = $orderEachItem['price'];
			$subtotal = $orderEachItem['subtotal'];
			$qty = $orderEachItem['qty'];


			// $sql = "INSERT INTO checkout(checkout.id,user_id,product_id)
			// 		VALUES ($orderID,$userID,$productID)";
			// 	die($sql);

			$sql = "INSERT INTO checkout (checkout.id,user_id,product_id,title,subtotal,qty,price)
					VALUES ($orderID,$userID,$productID,'$title',$subtotal,$qty,$price)";

			

			$this->db->query($sql);


			$sql = "DELETE FROM cart
					WHERE cart.id = $cartID";

			$this->db->query($sql);

		}


	}

}




