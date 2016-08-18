 <?php
  $this->layout('master',[
    'title'=> "CartPage",
    'description'=> "Enjoy your shopping"
    ]);
 ?>




<!-- Content Starts here  -->

    <div class="container cart-box">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-md-6">
                  <h4> <span class="glyphicon glyphicon-shopping-cart"></span> Cart</h4>
                  </div>
                  <div class="col-md-6">
                    <a href="index.php?page=mobile"><button class="btn btn-primary btn-sm pull-right"><span class="glyphicon glyphicon-share-alt"></span> Continue Shopping</button></a>

                  </div>


                </div>
              </div>
              <div class="panel-body">

                    <?php foreach($cartAllData as $cartEachItem): ?>
                      <div class="row">
                      <div class="col-md-2 col-xs-12">
                        <img class="img-responsive" src="assets/images/uploads/products/<?=$cartEachItem['image']?>">
                      </div>

                      <div class="col-md-4 col-md-12" >
                        <h4><strong><?=$cartEachItem['title']?></strong></h4>
                        <h4><small>Span Span Span Span Span</small></h4>
                      </div>

                      <div class="col-md-6 col-xs-12">

                          <div class="col-md-6 text-right" >
                            <h4><strong>$<?=$cartEachItem['price']?></strong>x</h4>
                          </div>

                          <div class="col-md-4 col-xs-9">
                            <input type="text" class="form-control input-sm" name="" value="<?=$cartEachItem['qty']?>">
                          </div>

                          <div class="col-md-2 col-xs-2" >
                            <button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
                          </div>
                      </div>
                       </div>
                        <hr>
                    <?php endforeach ?>



                   <!-- <div class="row">

                    <div class="col-md-2 col-xs-12">
                      <img class="img-responsive" src="assets/images/cart1.jpg">
                    </div>

                    <div class="col-md-4 col-md-12" >
                      <h4><strong>Product Name</strong></h4>
                      <h4><small>Span Span Span Span Span</small></h4>
                    </div>

                    <div class="col-md-6 col-xs-12">

                        <div class="col-md-6 text-right" >
                          <h4><strong> $ 10 </strong>x</h4>
                        </div>

                        <div class="col-md-4 col-xs-9">
                          <input type="text" class="form-control input-sm" name="">
                        </div>

                        <div class="col-md-2 col-xs-2" >
                          <button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
                        </div>

                    </div>

                  </div>
                  <hr>
                   <div class="row">

                    <div class="col-md-2 col-xs-12">
                      <img class="img-responsive" src="assets/images/cart1.jpg">
                    </div>

                    <div class="col-md-4 col-md-12" >
                      <h4><strong>Product Name</strong></h4>
                      <h4><small>Span Span Span Span Span</small></h4>
                    </div>

                    <div class="col-md-6 col-xs-12">

                        <div class="col-md-6 text-right" >
                          <h4><strong> $ 10 </strong>x</h4>
                        </div>

                        <div class="col-md-4 col-xs-9">
                          <input type="text" class="form-control input-sm" name="">
                        </div>

                        <div class="col-md-2 col-xs-2" >
                          <button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
                        </div>

                    </div>

                  </div>
                  <hr> -->

                  <div class="row">
                    <div class="col-md-9 col-xs-12 text-right" >
                      <h5>Added Items</h5>
                    </div>
                    <div class="col-md-3" col-xs-12>
                      <button class="btn btn-default btn-sm btn-block">Update Cart</button>

                    </div>
                  </div>
              </div>
              <div class="panel-footer">
                <div class="row">
                    <div class="col-md-9 col-xs-12 text-right" >
                      <h4><strong>Total $ 1099</strong></h4>
                    </div>
                    <div class="col-md-3" col-xs-12>
                      <a href="index.php?page=checkout"><button class="btn btn-success btn-lg btn-block">Checkout</button></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Content Ends here  -->
