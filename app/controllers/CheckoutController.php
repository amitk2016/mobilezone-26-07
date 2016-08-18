<?php


class CheckoutController extends PageController{
	// Properties

	public function __construct($dbc) {

		parent::__construct();

		$this->db = $dbc;

		if ( isset($_POST['checkout'] ) ) {
			$this->addToCheckout();
		}

	}

	public function buildHTML(){
		echo $this->plates->render('checkout');
	}

	private function addToCheckout(){
		// validate the form

		$userID = $_SESSION['id'];

		// select all the information from cart table
		$sql = "SELECT checkout.id AS checkout_item_id, first_name,last_name, price,subtotal,title,qty
						FROM checkout
						JOIN cart
						ON cart_id = cart.id
						WHERE user_id = $userID";
		die($sql);
		// run the query

		// insert the data into checkout table

		// run the query

		// capture the data

		// check the query result

		// sucessful , send it to the thank you page
	}


}
