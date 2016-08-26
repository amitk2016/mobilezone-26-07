
<?php

use Intervention\Image\ImageManager;

class EditProductController extends PageController {


		private $acceptableImageTypes = ['image/jpeg','image/png','image/gif','image/bmp','image/tiff'];

		public function __construct($dbc){
			parent::__construct();

			// Save the database connection
			$this->db = $dbc;

			$this->mustBeLoggedIn();

			// // Did the admin submit the edit form?

			if( isset($_POST['admin-edit-products']) ) {
				$this->processEditProducts();
			}

			$this->getProductInfo();
		}

	public function buildHTML(){

		echo $this->plates->render('editproducts',$this->data);
	}

	private function getProductInfo(){

		// Get the POST ID from the GET array
		$productID = $this->db->real_escape_string($_GET['productid']);

		// Get the user ID
		$userID = $_SESSION['id'];


		// Prepare the query
		$sql = "SELECT title,price,list_price,brand,categories,description,image
				FROM mobiles
				WHERE id = $productID";



		// Run the query
		$result = $this->db->query($sql);
		
		
		// If the query failed
		if( !$result || $result->num_rows == 0  ) {
			
			header("Location: index.php?page=mobile&postid=$productID");

		} else {

			// WAIT!
			// What if the user has submitted the form?
			// We don't want to lose their changes

			if( isset($_POST['admin-edit-products']) ) {
				// USE THE FORM DATA!!!
				$this->data['post'] = $_POST;

				// Use the original title
				$result = $result->fetch_assoc();

				$this->data['originalTitle'] = $result['title'];

				// Make sure we use the current image, otherwise
				// it disappears
				$this->data['post']['image'] = $result['image'];


			} else {
				// Use the database data
				$result = $result->fetch_assoc();

				
				$this->data['post'] = $result;

				$this->data['originalTitle'] = $result['title'];
			}

			
		}


	}

	private function processEditProducts(){

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

		// Make sure the user has provided an image
		if( $_FILES['image']['name'] != '' ) {
			
			if( in_array( $_FILES['image']['error'], [1,3] ) ) {
				// Show error message
				// Use a switch to generate the appropriate error message
				$this->data['imageMessage'] = 'Image failed to upload';
				$totalErrors++;

			} elseif( !in_array( $_FILES['image']['type'], $this->acceptableImageTypes ) ) {
				$this->data['imageMessage'] = 'Must be an image (jpg, gif, png, tiff etc)';
				$totalErrors++;
			}
		}
		
		//If there are no errors
		if( $totalErrors == 0 ) {

			$productID = $_GET['productid'];

			

			$productID = $this->db->real_escape_string($_GET['productid']);

			// They are wasting space otherwise
			$sql = "SELECT image FROM mobiles WHERE id = $productID";

			// Run the query
			$result = $this->db->query($sql);

			// Extract the data
			$result = $result->fetch_assoc();

			// Get the image name
			$imageName = $result['image'];

			// If the user uploaded an image
			if( $_FILES['image']['name'] != '' ) {

				// Instance of Intervention Image
				$manager = new ImageManager();

				// Get the file that was just uploaded
				$image = $manager->make( $_FILES['image']['tmp_name'] );

				$fileExtension = $this->getFileExtension( $image->mime() );

				$fileName = uniqid();

				$image->save("assets/images/uploads/original/$fileName$fileExtension");

				$image->resize(140, null, function ($constraint) {
				    $constraint->aspectRatio();
				});

				$image->save("assets/images/uploads/products/$fileName$fileExtension");

				




				// unlink("assets/images/uploads/original/$imageName");
				// unlink("assets/images/uploads/products/$imageName");

				// Change the $imageName to be the new file name
				$imageName = $fileName.$fileExtension;


			}

			// Filter the data
			$title  = $this->db->real_escape_string($title);
			$desc   = $this->db->real_escape_string($desc);
			$price  = $this->db->real_escape_string($price);
			$list_price  = $this->db->real_escape_string($list_price);

			
			$userID = $_SESSION['id'];

			// Did the user upload an image?

			// Prepare the SQL
			$sql = "UPDATE mobiles
					SET title = '$title',
						description = '$desc',
						image = '$imageName',
						price = '$price',
						list_price = '$list_price',
						brand = '$brand',
						categories = '$categories'
					WHERE id = $productID ";

			

			$this->db->query($sql);

				// Validation
			if( $this->db->affected_rows == 0 ) {
				$this->data['updateMessage'] = 'Nothing changed';
			} else {
				// Redirect the user to the post page
				echo 'Success';
			}


		}	

	}

		private function getFileExtension( $mimeType ) {

		switch($mimeType) {

			case 'image/png':
				return '.png';
			break;

			case 'image/gif':
				return '.gif';
			break;

			case 'image/jpeg':
				return '.jpg';
			break;

			case 'image/bmp':
				return '.bmp';
			break;

			case 'image/tiff':
				return '.tif';
			break;

		}

	}









}