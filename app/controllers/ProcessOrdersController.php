<?php


class ProcessOrdersController extends PageController{
	// Properties

	public function __construct($dbc) {

		parent::__construct();

		$this->db = $dbc;

		if ( isset($_POST['checkout'] ) ) {
			$this->addToOrders();
		}
		
	}

	private function addToOrders(){

		// select all the information from cart table
		$sql = "SELECT cart.id, user_id, product_id,subtotal,title,price,qty
				FROM cart
				JOIN mobiles
				ON product_id = mobiles.id
				WHERE user_id = $userID";

		$results = $this->db->query($sql);

		$processOrderData = $results->fetch_all(MYSQL_ASSOC);

		foreach($processOrderData as $orderEachItem){


			$orderID = uniqid();

			$cartID = $orderEachItem['cart.id'];
			$userID = $orderEachItem['user_id'];
			$productID = $orderEachItem['product_id'];
			$title = $orderEachItem['title'];
			$price = $orderEachItem['price'];
			$subtotal = $orderEachItem['subtotal'];
			$qty = $orderEachItem['qty'];


			$sql = "INSERT INTO checkout (checkout.id,user_id,product_id,title,subtotal,qty,price,)
					VALUES ('$orderID','$userID','$productID','$title','$subtotal','$qty','price')";

			$this->db->query($sql);


			$sql = "DELETE FROM cart
					WHERE cart.id = $cartID,";

		}


	}

}




