 <?php
  $this->layout('master',[
    'title'=> "Welcome to MobileZone",
    'description'=> "Explore the latest mobiles and tablets"
    ]);
 ?>



 <!-- Slides Show Starts Here  -->

              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <div class="slider-box1">

                        </div>
                        <img src="assets/images/sl8.jpg" alt="image-1">
                        <div class="carousel-caption">

                        </div>
                      </div>
                       <div class="item ">
                       <div class="slider-box2">

                        </div>
                        <img src="assets/images/sl2.jpg" alt="image-1">
                        <div class="carousel-caption">

                        </div>
                      </div>
                       <div class="item ">
                       <div class="slider-box3">

                        </div>
                        <img src="assets/images/sl3.jpg" alt="image-1">
                        <div class="carousel-caption">

                        </div>
                      </div>
                       <div class="item ">
                        <img src="assets/images/sl7.jpg" alt="image-1">
                        <div class="carousel-caption">

                        </div>
                      </div>
                      <div class="item">
                        <img src="assets/images/sl5.jpg" alt="image-2">
                        <div class="carousel-caption">

                        </div>
                      </div>
                      ...
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
              </div>



    <!-- Slides show ends here  -->
    <div class="container-fluid main-text">
      <div class="row">
        <div class="col-md-12 home-heading">
          <h1>Welcome to MobileZone</h1>
          <h5>the power you need</h5>
          <!-- <img src="assets/images/MobileZone.png" alt="company name"> -->
        </div>
      </div>
    </div>
    <hr class="hr-style">






    <div class="clearfix" style="margin-bottom:20px;"></div>

      <div class="container-fluid hot-box">
        <h1 class="hot-heading">Products</h1>
        <div class="row hot-row">

          <div class="col-md-4 col-sm-4 col-xs-12 hot-products">
            <img src="assets/images/phones.jpg" alt="cat image" class="img-responsive hot-img">
            <h2 class="p-heading">Phones</h2>
            <a href="index.php?page=mobile" class="btn btn-primary btn-lg">Shop Now</a>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 hot-products tablets">
            <img src="assets/images/tablets1.jpg" alt="phone products image" class="img-responsive hot-img">
            <h2 class="p-heading tablet-h">Tablets</h2>
            <a href="index.php?page=products" class="btn btn-primary btn-lg">Shop Now</a>
          </div>
           <div class="col-md-4 col-sm-4 col-xs-12 hot-products tablets">
            <img src="assets/images/accessories2.jpg" alt="phone products image" class="img-responsive hot-img">
            <h2 class="p-heading accessories-h">Accessories</h2>
            <a href="index.php?page=products" class="btn btn-primary btn-lg">Shop Now</a>
          </div>
        </div>
      </div>

      <!-- Clearance Sale box -->
      <div class="container-fluid clearance">
        <div class="row">
            <h3>Clearance Sale</h3>
            <h1>Save an Extra 10% </h1>
            <ul>
              <li><span>On Already reduced prices</span></li>
              <li><span>Limited time only</span></li>
              <li><span>Prices as marked</span></li>
            </ul>
             <button class="btn btn-warning btn-lg">
               Buy Now
             </button>
        </div>
      </div>

      <!-- Clearance box ends -->
    <!-- Marketing Starts here -->
    <hr class="divider latest-d">
    <!-- Products thumbnails -->
      <h1 class="latest">Latest Products</h1>
      <div class="container-fluid">
        <div class="row">

          <?php foreach($latestProducts as $Product): ?>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                    <img src="assets/images/uploads/original/<?=$Product['image']?>" alt="iphone1">
                    <div class="caption">
                        <h4><?=$Product['title']?></h4>
                        <span><b style="margin-right:40px;">Price: $ <?=$Product['price']?></b></span>
                        <span style="color:red;"><s>$ <?=$Product['list_price']?></s></span>
                        <div style="margin-top:20px;">
                          <p style="display:inline;">
                          <a href="index.php?page=products&productid=<?=$Product['id']?>"  class="btn btn-success" role="button">Details</a>
                        </p>

                          <form action="index.php?page=cart&productid=<?=$Product['id']?>" method="post" style ="display:inline;">
                            <button class="btn btn-primary" name="latestProductCart" >Add to Cart</button>
                            
                          </form>
                        </div>
                        
                    </div>
              </div>
            </div>
          <?php endforeach; ?>
            <!-- <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="assets/images/product-1.jpg" alt="iphone1">
                  <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>As an iphone 6 owner, you may feel that you are not getting utilizing your phone to</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                  </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="assets/images/product-1.jpg" alt="iphone1">
                  <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>As an iphone 6 owner, you may feel that you are not getting utilizing your phone to</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                  </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="assets/images/product-1.jpg" alt="iphone1">
                  <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>As an iphone 6 owner, you may feel that you are not getting utilizing your phone to</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                  </div>
                </div>
            </div> -->
        </div>
      </div>

      <div class="container-fluid news-box">
        <div class="row news-row">
          <h3>Get Exclusive News and Offer</h3>
          <div>
            <input class="form-control news-email" type="email" name="n-email" value="Enter your email address">
          </div>
          <button class="btn btn-default signup btn-block">Sign Up</button>
        </div>
        <div class="container-fluid n-trans">
        </div>
      </div>

      <div class="container-fluid payment">
          <span>Secure Payment:</span><img src="assets/images/payment.png">
      </div>

    <!-- end product thumbnails -->
