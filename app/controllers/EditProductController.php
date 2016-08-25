
<?php

use Intervention\Image\ImageManager;

class EditProductController extends PageController
{
		private $acceptableImageTypes = ['image/jpeg','image/png','image/gif','image/bmp','image/tiff'];

		public function __construct($dbc){
			parent::__construct();

			// Save the database connection
			$this->db = $dbc;

			$this->mustBeLoggedIn();

			//User Submitted the form ??
			if ( isset ( $_POST['update-contact']) ) {
				die('hello');
				$this->updateContactDetails();
			}


			// // Did the user submit the edit form?
			// if( isset($_POST['admin-edit-products']) ) {
			// $this->processEditProducts();
			// }

			// $this->getProductInfo();
		}

	public function buildHTML(){

		echo $this->plates->render('editproducts',$this->data);
	}
}