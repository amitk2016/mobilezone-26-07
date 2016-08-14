<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?= $description ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--  <meta http-equiv="refresh" content="3"> -->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= $title ?></title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/3ea3387309.js"></script>
  </head>
  <body>
      <!-- navbar starts  -->

      <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" style=" border-radius:0px !important; margin-bottom:0px;">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header brand-box1">

                    <a class="navbar-brand brand-link" href="index.php?page=home">
                       <img alt="Brand" src="assets/images/logo1.png" class="brand-img">
                    </a>
                  <!-- <a class="navbar-brand" href="index.php">Mobilezone</a> -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php?page=home">Home<span class="sr-only">(current)</span></a></li>


                    <li class="dropdown">
                        <a href="index.php?page=aboutus" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info<span class="caret"></span></a>
                        <ul class="dropdown-menu nav-ul">
                            <li><a href="index.php?page=aboutus">About Us</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="index.php?page=blogs">Blogs</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="index.php?page=faq">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="index.php?page=products" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products<span class="caret"></span></a>
                        <ul class="dropdown-menu nav-ul">
                            <li><a href="index.php?page=mobile">Mobiles</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="index.php?page=products">Tablets</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="index.php?page=products">Accessories</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?page=contact">Contact</a></li>
                  </ul>


                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
                        <ul class="dropdown-menu nav-ul">
                            <li><a href="index.php?page=adminproducts">Products</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="index.php?page=products">Users</a></li>
                        </ul>
                    </li>
                        <li><a href="index.php?page=users">Users</a></li>
                        <li><a href="index.php?page=login">Login</a></li>
                        <li><a href="index.php?page=register">Register</a></li>
                         <li><a href="index.php?page=logout">Logout</a></li>
                          <li><a href="index.php?page=cart"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                          <form class="navbar-form navbar-left" role="search">
                          <div class="form-group ">
                            <input type="text" class="form-control" placeholder="Search">
                          </div>
                          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </form>
                  </ul>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
        </nav>

    <!-- Ends navbar -->

    <main>

          <?php echo $this->section('content')?>

    </main>



     <hr class="divider line-after-payment">

    <footer>
      <div class="container-fluid footer-box">
        <div class="container col-md-6">
          <div class="row footer-l-row">
            <div class="col-md-6 r-l-box">
                <h4>Shop</h4>
                <span><a href="#">Apple</a></span>
                <span><a href="#">Samsung</a></span>
                <span><a href="#">Xiaomi</a></span>
                <span><a href="#">MIcrosoft</a></span>
                <span><a href="#">All Products</a></span>
            </div>
            <div class="col-md-6 r-r-box">
                <h4>About Us</h4>
                <span><a href="#">About Us</a></span>
                <span><a href="#">News</a></span>
                <span><a href="#">Sitemap</a></span>
            </div>
          </div>
        </div>

         <div class="container col-md-6">
          <div class="row footer-r-row">
            <div class="col-md-6 r-l-box">
                <h4>Contact Us</h4>
                <span><a href="#">Contact</a></span>
                <span><a href="#">Newsletter</a></span>
            </div>
            <div class="col-md-6 r-r-box">
                <ul>
                  <li><a href="#"><img src="assets/images/fb.png"></a></li>
                  <li><a href="#"><img src="assets/images/twitter.png"></a></li>
                  <li><a href="#"><img src="assets/images/gplus.png"></a></li>
                  <li><a href="#"><img src="assets/images/linkedin.png"></a></li>
                  <li><a href="#"><img src="assets/images/instagram.png"></a></li>
                </ul>
                <img src="assets/images/map.png">
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Marketing Ends here -->








    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
