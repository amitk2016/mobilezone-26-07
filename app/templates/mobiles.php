 <?php
  $this->layout('master',[
    'title'=> "Mobile Phones",
    'description'=> "Latest Mobile Phones"
    ]);
 ?>





<div class="container mobile-box">
	<!-- Left sidebar -->
	<!-- <div class="col-md-2">
    <p class="lead">Category</p>
      <div class="list-group">
          <a href="#" class="list-group-item active">Brands</a>
          <a href="#" class="list-group-item">Apple</a>
          <a href="#" class="list-group-item">Samsung</a>
          <a href="#" class="list-group-item">Xaomi</a>
          <a href="#" class="list-group-item">Nokia</a>
          <a href="#" class="list-group-item">Motorola</a>
      </div>
	</div> -->
	<!-- Main content  -->
	<div>
		
		<div class="row">
			<h2 class="text-center">Mobile Products</h2>
	        <?php foreach($allProducts as $product): ?>
				<div class="col-md-3">
					<h4><?=htmlentities($product['title'])?></h4>
					<img src="assets/images/uploads/products/<?=($product['image'])?>" alt="iphone5" />
	         
					<p class="list-price text-danger">List Prices <s>$<?=htmlentities($product['list_price'])?></s></p>
					<p class="price">Our Price : $<?=htmlentities($product['price'])?></p>
	          		<a href="index.php?page=products&productid=<?=$product['id']?>" class="btn btn-primary btn-sm active" role="button">Details</a>
	          		<form action="index.php?page=mobile&productid=<?=$product['id']?>" class="product-del" method="post">
	          			<button class="btn btn-danger btn-sm active" name="product-delete">Delete</button>
	          		 </form>
				</div>
	    	<?php endforeach ?>	    	
		</div>
		
	</div>

	<!-- <div class="col-md-1">
		Right side bar
	</div> -->
</div>
<!-- Details Modal -->
<div class="modal fade details-1" id="details-1" tabindex ="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content ">
			<div class="modal-header">
			<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aira-hidden="true">&times;</span></button>
			<h4 class="modal-title text-center">IPhones</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<div class="center-block">
								<img src="assets/images/iphone6plus.jpg" alt="Iphone" class="details img-responsive">
							</div>

						</div>
						<div class="col-sm-6">
							<h4>Details</h4>
							<p>he moment you use iPhone 6s, you know you’ve never felt anything like it. With a single press, 3D Touch lets you do more than ever before</p>
							<hr>
							<p>
								Price : $999
							</p>
							<p>Brand: Apple</p>
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

						</div>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal">Close</button>
				<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
			</div>
		</div>
	</div>

</div>
