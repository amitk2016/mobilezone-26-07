<?php

class HomeController extends PageController{
	// Properties


	//Methods
	public function __construct($dbc) {

		parent::__construct();

		$this->db = $dbc;

		

		$this->getLatestProducts();
		
		if( isset ($_POST['latestProductCart'] ) ){
			die('hello');
			$this->addtoCart();
		}
	}



	public function buildHTML(){
		echo $this->plates->render('home',$this->data);
	}

	private function getLatestProducts() {

		$sql = "SELECT id,title, price, description,date_added,image,list_price
            FROM mobiles
            ORDER BY date_added DESC
            LIMIT 4";

		$result = $this->db->query( $sql );


		 if( !$result ) {
			 die("Some Error with our database, We are trying to fix it...");
	 }
	  elseif( $result->num_rows == 0 ) {
			$this->data['latestProducts'] = [];
		}

		elseif( $result->num_rows > 0 ) {
			$this->data['latestProducts'] = $result->fetch_all( MYSQLI_ASSOC );
			
		}


	}

	private function addtoCart(){

		die('hello');
	}

}
