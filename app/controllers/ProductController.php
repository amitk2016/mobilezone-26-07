<?php


class ProductController extends PageController{
	// Properties

	public function __construct($dbc) {

		parent::__construct();

		$this->db = $dbc;

		$this->getEachProduct();
	}

	

	public function buildHTML(){
		echo $this->plates->render('product',$this->data);
	}

	private function getEachProduct(){

		$productID = $this->db->real_escape_string( $_GET['productid']);

		$sql = "SELECT id,title, price, description,image
						FROM mobiles
						WHERE id = $productID";

		$result = $this->db->query($sql);

		if (!$result || $result->num_rows == 0 ) {
			header('Location: index.php?page=error');
		}else{

			$this->data['product']= $result->fetch_assoc();

		}


	}




}
