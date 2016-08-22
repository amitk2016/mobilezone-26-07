 <?php
  $this->layout('master',[
    'title'=> "CheckoutPage",
    'description'=> "Checkout here"
    ]);
 ?>






<!-- Content goes here  -->
    <div class="container checkout-box">
      <div class="row">

        <div class="col-md-7 col-sm-7 col-xs-12" >

          <!-- Payment  -->

            <div class="panel panel-primary">
              <div class="panel-heading">Payment</div>
                <div class="panel-body">

                    <form action="index.php?page=orders" method="post">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label>Card Type</label>
                              <select class="form-control">
                                <option>VISA</option>
                                 <option>MASTER CARD</option>
                                 <option>PAYPAL</option>
                                 <option>AMERICAM XPRESS</option>
                              </select>
                          </div>
                        </div>
                      </div>

                       <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label>Card Number</label>
                             <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>

                       <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label>Card CVV</label>
                             <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                            <label>Month</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                            <label>Year</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <button type="submit" name="checkout" class="btn btn-success">Place Order</button>
                    </form>
                </div>
            </div>




          <!-- Payments ends here  -->



        <!-- Address Panel Starts here -->
              <!-- <div class="panel panel-primary">
                <div class="panel-heading">
                  Shipping Address
                </div>
                  <div class="panel-body">
                    <form>
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <label>Country</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                              <label>First Name</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                              <label>Last Name</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <label>Address</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <label>Postal Code</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <label>Tel</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                      </form>
                  </div>
            </div> -->

            <!-- Address panel ends here  -->


        </div>

        <div class="col-md-5 col-sm-5 col-xs-12 " >
            <div class="panel panel-success">
                <div class="panel-heading">
                <span class="pull-right"><a href="#">Edit Chart</a></span>
                  Review Order</div>
                  <div class="panel-body">

                    <?php foreach ($checkoutAllData as $checkoutEachItem) : ?>

                       <div class="row">
                          <div class="col-md-4 col-sm-4">
                              <img src="assets/images/uploads/products/<?=$checkoutEachItem['image']?>">
                          </div>
                           <div class="col-md-6 col-sm-6">
                              <span style="font-size:14px;"><b><?=$checkoutEachItem['title']?></b></span>
                              <br>
                              <span>Quantity: <?=$checkoutEachItem['qty']?></span>

                          </div>
                           <div class="col-md-2 col-sm-2">
                            <span class="pull-right" style="font-weight:bold; font-size:16px;"> $<?=$checkoutEachItem['price']?></span>

                          </div>
                       </div>
                       <hr>
                    <?php endforeach ?>

                     <!-- <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img src="assets/images/cart1.jpg">
                        </div>
                         <div class="col-md-6 col-sm-6">
                            <span style="font-size:14px;">IPhone 6</span>
                            <br>
                            <span>Quantity: 1</span>

                        </div>
                         <div class="col-md-2 col-sm-2">
                          <span class="pull-right" style="font-weight:bold; font-size:16px;  "> $999</span>

                        </div>
                     </div>
                     <hr>
                     <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img src="assets/images/cart1.jpg">
                        </div>
                         <div class="col-md-6 col-sm-6">
                            <span style="font-size:14px;">IPhone 6</span>
                            <br>
                            <span>Quantity: 1</span>

                        </div>
                         <div class="col-md-2 col-sm-2">
                          <span class="pull-right" style="font-weight:bold; font-size:16px;  "> $999</span>

                        </div>
                     </div> -->
                     <hr>

                     <div class="row">
                       <div class="col-md-6 col-sm-6">
                         <span style="font-weight:bold; font-size:16px;">Sub total</span>
                       </div>
                       <div class="col-md-6 col-sm-6">
                          <span class="pull-right" style="font-weight:bold; font-size:16px;">$2997</span>

                       </div>
                     </div>
                     <div class="row">
                       <div class="col-md-6 col-sm-6">
                         <span style="font-weight:bold; font-size:16px;">Shipping</span>
                       </div>
                       <div class="col-md-6 col-sm-6">
                          <span class="pull-right" style="font-weight:bold; font-size:16px;">$10</span>

                       </div>
                     </div>
                     <hr>

                     <div class="row">
                       <div class="col-md-6 col-sm-6">
                         <span style="font-weight:bold; font-size:16px; color:green;">Grand Total</span>
                       </div>
                       <div class="col-md-6 col-sm-6">
                          <span class="pull-right" style="font-weight:bold; font-size:16px; color:green;">$3007</span>

                       </div>
                     </div>


                  </div>
            </div>
        </div>

      </div>




    </div>
