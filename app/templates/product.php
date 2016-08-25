<?php

  $this->layout('master',[
    'title'=> "Products",
    'description'=>"See the different amazing products"
  ]);

?>




<!-- page content goes here  -->

    <div class="container product-box">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <p class="lead">Category</p>
            <div class="list-group">
                <a href="#" class="list-group-item active">Brands</a>
                <a href="#" class="list-group-item">Apple</a>
                <a href="#" class="list-group-item">Samsung</a>
                <a href="#" class="list-group-item">Xaomi</a>
                <a href="#" class="list-group-item">Nokia</a>
                <a href="#" class="list-group-item">Motorola</a>
            </div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12">
          <div class="thumbnail">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                  <div class="center-block">
                    <img src="assets/images/uploads/eachproduct/<?=($product['image'])?>" alt="Iphone" class="details img-responsive">
                  </div>

                </div>
                <div class="col-sm-12">
                  <h4>Details</h4>
                  <p><?=$product['description']?></p>
                  <hr>
                  <div class="col-sm-6">
                    <h4 class="text-left">
                      Brand : Apple
                    </h4>
                  </div>
                  <div class="col-sm-6">
                      <h4 class="text-right">Price :$<?=$product['price']?></h4>
                  </div>

                  <form action="index.php?page=cart&productID=<?= $_GET['productid']?>" method="post">
                    <div class="form-group">
                      <div class="col-md-3">
                        <label for="quantity">Quantity:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="" max="" min="0">
                        <br>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-6">
                        <label for="color">Color:</label>
                        <select name="color" id="color" class="form-control">
                          <option value="white">White</option>
                          <option value="black">Black</option>
                          <option value="grey">Grey</option>
                          <option value="gold">Gold</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-10">
                      <p>Avaliable:3</p>
                    </div>
                    <div class="col-sm-2">
                      <a href="index.php?page=cart&userid=<?=$_SESSION['id']?>"><button class="btn btn-warning" name ="addtoCart" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button></a>
                    </div>
                  </form>
                  <br>
                </div>

                </div>

            </div>








              <!-- <img src="assets/images/iphone6plus.jpg" alt="Iphone" width="500">
              <div class="caption">
              <h3 class="pull-right">$999</h3>
                <h3></h3>
                <p>3D Touch. 12-megapixel photos. 4K video.One powerful phone.</p>
                <form action="index.php?page=cart" method="post">
  								<div class="form-group">
  									<div class="col-md-3">
  										<label for="quantity">Quantity:</label>
  										<input type="text" class="form-control" id="quantity" name="quantity">
  										<br>
  										<p>Avaliable:3</p>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="col-md-6">
  										<label for="color">Color:</label>
  										<select name="color" id="color" class="form-control">
  											<option value="1">White</option>
  											<option value="2">Black</option>
  											<option value="3">Grey</option>
  											<option value="4">Gold</option>
  										</select>
  									</div>
  								</div>
  							</form>

                <div>
                  <p class="pull-right"> 3 Reviews</p>
                  <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    5 stars

                  </p>

                </div>
              </div> -->
          </div>

          <div class="well">
              <p class="text-right"><a href="#" class="btn btn-success">Leave a Review</a></p>
              <hr>
              <div class="row">
                <div class="col-md-12">

                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star-empty"></span>
                  <span class="glyphicon glyphicon-star-empty"></span>
                  Anonymous
                  <span class="pull-right">3 days ago</span>
                  <p>As great a phone as it is, the iPhone 6 Plus isn't for everybody. Its defining characteristic is its size, which occupies a nice middle ground between the 4-inch iPhone 5S and the 7.9-inch iPad Mini . While the 4.7-inch iPhone 6 is considerably more portable, the 6 Plus will hit the sweet spot for those who want a bigger display on their smartphone </p>
                </div>

              </div>
               <hr>
              <div class="row">
                <div class="col-md-12">

                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star-empty"></span>
                  <span class="glyphicon glyphicon-star-empty"></span>
                  Anonymous
                  <span class="pull-right">3 days ago</span>
                  <p>As great a phone as it is, the iPhone 6 Plus isn't for everybody. Its defining characteristic is its size, which occupies a nice middle ground between the 4-inch iPhone 5S and the 7.9-inch iPad Mini . While the 4.7-inch iPhone 6 is considerably more portable, the 6 Plus will hit the sweet spot for those who want a bigger display on their smartphone </p>
                </div>

              </div>
               <hr>
              <div class="row">
                <div class="col-md-12">

                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star-empty"></span>
                  <span class="glyphicon glyphicon-star-empty"></span>
                  Anonymous
                  <span class="pull-right">3 days ago</span>
                  <p>As great a phone as it is, the iPhone 6 Plus isn't for everybody. Its defining characteristic is its size, which occupies a nice middle ground between the 4-inch iPhone 5S and the 7.9-inch iPad Mini . While the 4.7-inch iPhone 6 is considerably more portable, the 6 Plus will hit the sweet spot for those who want a bigger display on their smartphone </p>
                </div>

              </div>
          </div>
        </div>
      </div>
    </div>
