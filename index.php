<?php 

session_start();

// require all the third party app 
require 'vendor/autoload.php';
require 'app/controllers/PageController.php';



// Connect to the database
$dbc = new mysqli('localhost','root', '','mobile_zone'); //FOUR THINGS IN THE BRACKET IS ('location', 'user', 'password' , 'database name' )



// Check connection
// if ($dbc->connect_error) {
//     die("Connection failed: " . $dbc->connect_error);
// } 
// echo "Connected successfully";

//if user has requested a page 

// if ( isset($_GET['page']) ) {
  
//   $page = $_GET['page'];
// }else{

//   $page = 'home';
// }

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
  case 'home':
     require 'app/controllers/HomeController.php';
     $controller = new HomeController($dbc);
  break;

  case 'products':
     require 'app/controllers/ProductController.php';
     $controller = new ProductController($dbc);
  break;

   case 'mobile':
     require 'app/controllers/MobileController.php';
     $controller = new MobileController($dbc);
  break;

  case 'register':
     require 'app/controllers/RegisterController.php';
     $controller = new RegisterController($dbc);
  break;

  case 'contact':
     require 'app/controllers/ContactController.php';
     $controller = new ContactController($dbc);
  break;

  case 'login':
     require 'app/controllers/LoginController.php';
     $controller = new LoginController($dbc);
  break;

  case 'cart':
     require 'app/controllers/CartController.php';
     $controller = new CartController($dbc);
  break;

  case 'checkout':
     require 'app/controllers/CheckoutController.php';
     $controller = new CheckoutController($dbc);
  break;

  default:
     require 'app/controllers/ErrorController.php';
     $controller = new ErrorController();
  break;
}

$controller->buildHTML();


?>





