<?php

use Intervention\Image\ImageManager;

class AdminController extends PageController
{
		public function __construct($dbc){
			parent::__construct();

			// Save the database connection
			$this->db = $dbc;

			$this->mustBeLoggedIn();

			// //User Submitted the form ??
			// if ( isset ( $_POST['update-contact']) ) {
			// 	$this->updateContactDetails();
			// }
			//Admin added a new product
			if ( isset ( $_POST['admin-new-product'] ) ) {
				$this->processNewProducts();
			}
		}

	public function buildHTML(){

		echo $this->plates->render('adminproducts',$this->data);
	}

	private function processNewProducts(){
		$totalErrors = 0;




		$title = trim($_POST['title']);
		$desc = trim($_POST['desc']);
		$price = trim($_POST['price']);
		$list_price = trim($_POST['list_price']);
		$brand = $_POST['brand'];
		$categories = $_POST['categories'];

		// subject
		if ( strlen( $title ) == 0 ) {
			$this->data['titleMessage'] = '<p>Required</p>';
			$totalErrors++;
		}elseif (strlen( $title ) > 100 ) {
			$this->data['titleMessage'] = '<p>Can not be more than 100 characters</p>';
			$totalErrors;
		}
		if ( strlen( $price ) == 0 ) {
			$this->data['priceMessage'] = '<p>Required</p>';
			$totalErrors++;
		}
		if ( strlen( $list_price ) == 0 ) {
			$this->data['listPriceMessage'] = '<p>Required</p>';
			$totalErrors++;
		}
		// if ( is_numeric($price) ) {
		// 	$this->data['priceMessage'] = '<p>Must be a Number</p>';
		// 	$totalErrors++;
		// }
		if ($brand == "") {
			$this->data['brandMessage'] = '<p>Please Select an Option</p>';
		}

		if ($categories == "") {
			$this->data['categoriesMessage'] = '<p>Please Select an Option</p>';
		}


		if ( strlen( $desc ) == 0 ) {
			$this->data['descMessage'] = '<p>Required</p>';
			$totalErrors++;
		}elseif (strlen( $desc ) > 1000 ) {
			$this->data['descMessage'] = '<p>Can not be more than 1000 characters</p>';
			$totalErrors;
		}

		if ($totalErrors == 0 ) {
			// Instance of intervention image library
			$manager = new ImageManager();

			//get the file which has been just uploaded
			$image = $manager->make($_FILES['image']['tmp_name']);

			$image->save('assets/images/uploads/original/test.jpg');

			echo "<pre>";
			print_r($_FILES);
			die();
			// filter the data
			$title = $this->db->real_escape_string($title);
			$desc = $this->db->real_escape_string($desc);

			// Get the id of logged in user
			$userID = $_SESSION['id'];
			//SQL
			$sql = "INSERT INTO mobiles(title,price,list_price,brand,categories,description)
							VALUES ('$title',$price,$list_price,'$brand','$categories','$desc')";

			$this->db->query($sql);


			//Make sure it worked
			if ($this->db->affected_rows) {
				$this->data['postMessage'] = 'Product Has been Successfully Added!' ;
			}else
				$this->data['postMessage'] = 'Something Went Wrong';
			// Sucess message ! or error message

			//
		}


	}
















}
