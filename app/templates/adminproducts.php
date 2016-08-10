<?php
  $this->layout('master',[
    'title'=> "Admin Page",
    'description'=>"Admin can add products on this page"
  ]);
?>



<form class="update-form" action="index.php?page=adminproducts" method="post" enctype="multipart/form-data">
   <h2>Add New Products</h2>
   <div class="form-group">
     <label for="title">Title:</label>
     <input type="text" class="form-control" name="title" id="title" value="">
     <?= isset($titleMessage) ?$titleMessage : '' ?>
   </div>
   <div class="form-group">
     <label for="price">Price:</label>
     <input type="text" class="form-control" name="price" id="price" value="">
     <?= isset($priceMessage) ?$priceMessage : '' ?>
   </div>
   <div class="form-group">
     <label for="list_price">List Price:</label>
     <input type="text" class="form-control" name="list_price" id="list_price" value="">
     <?= isset($listPriceMessage) ? $listPriceMessage : '' ?>
   </div>
   <div class="form-group">
     <label for="brand">Brand:</label>
     <select class="form-control" name="brand">
     	<option value="">Please Select Option</option>
		<option value="apple">Apple</option>
		<option value="samsung">Samsung</option>
		<option value="xiaomi">Xiaomi</option>
		<option value="oneplus">Oneplus</option>
		<option value="htc">HTC</option>
	</select
    <?= isset($brandMessage) ? $brandMessage : '' ?>
   </div>
   <div class="form-group">
     <label for="brand">Categories:</label>
     <select class="form-control" name="categories">
       <option value="">Please select a category</option>
    		<option value="mobiles">mobiles</option>
    		<option value="tablets">tablets</option>
    		<option value="accessories">accessories</option>
	  </select>
      <?= isset($categoriesMessage) ? $categoriesMessage : '' ?>
   </div>

   <div class="form-group">
     <label for="desc">Description:</label>
     <textarea name="desc" class="form-control" id="desc" rows="10" cols="30"></textarea>
     <?= isset($descMessage) ? $descMessage : '' ?>
   </div>
   <div class="form-group">
     <label for="image">Image:</label>
     <input type="file" name="image" id="image">
     <p class="help-block">Upload image</p>
     <?= isset($fileMessage) ?$fileMessage : '' ?>
   </div>
   <button type="submit" name="admin-new-product" class="btn btn-block btn-success">Submit</button>
   <?= isset($postMessage) ?$postMessage : '' ?>

</form>
