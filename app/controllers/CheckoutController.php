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
		$sql = "SELECT cart.id,subtotal,qty,first_name,last_name,email
				FROM cart
				JOIN users
				ON user_id = users.id
				WHERE user_id = '$userID'";
						
		$results = $this->db->query($sql);

		// if the query failed
		if ( !$results || $results->num_rows == 0 ) {

			header('Location: index.php?page=error');

		}else{

			$this->data['cartAllData'] = $results->fetch_all(MYSQL_ASSOC);

		}




		// Select the data from cart

		$sql = "INSERT INTO checkout(checkout.id,cart.id,subtotal,qty,first_name,last_name)
				VALUES ('$checkoutID', '$cartID', '$subtotal', 'qty','fName','lName')"; 

		// Insert the data to checkout/orders 



		// delete the data from cart table
		





		// run the query

		// insert the data into checkout table

		// run the query

		// capture the data

		// check the query result

		// sucessful , send it to the thank you page
	}


}
