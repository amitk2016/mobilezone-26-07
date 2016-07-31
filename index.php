<?php 

// require all the third party app 
require 'vendor/autoload.php';


// create instance of the plate library 
$plates = new League\Plates\Engine('app/templates');

//if user has requested a page 

if ( isset($_GET['page']) ) {
  
  $page = $_GET['page'];
}else{

  $page = 'home';
}

switch ($page) {
  case 'home':
     require 'app/controllers/HomeController.php';
     $controller = new HomeController();
  break;

  case 'products':
     require 'app/controllers/ProductController.php';
     $controller = new ProductController();
  break;

  case 'register':
     require 'app/controllers/RegisterController.php';
     $controller = new RegisterController();
  break;

  case 'login':
     require 'app/controllers/LoginController.php';
     $controller = new LoginController();
  break;

  default:
     echo ('Error Page ');
  break;
}

$controller->buildHTML();


?>





