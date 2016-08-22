<?php


class CheckoutController extends PageController{
	// Properties

	public function __construct($dbc) {

		parent::__construct();

		$this->db = $dbc;

		$this->addToCheckout();
		

	}

	public function buildHTML(){
		echo $this->plates->render('checkout');
	}


	private function addToCheckout(){
		// validate the form

		$userID = $_SESSION['id'];

		// select all the information from cart table
		$sql = "SELECT cart.id AS cart_item_id, user_id, product_id,subtotal,title,price,list_price,qty,image
				FROM cart
				JOIN mobiles
				ON product_id = mobiles.id
				WHERE user_id = $userID";
						
		$results = $this->db->query($sql);

		// if the query failed
		if ( !$results || $results->num_rows == 0 ) {

			header('Location: index.php?page=error');

		}else{

			$this->data['cartAllData'] = $results->fetch_all(MYSQL_ASSOC);

		}

	}


}
