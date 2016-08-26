<?php
  $this->layout('master',[
    'title'=> "Admin  Edit Product Page",
    'description'=>"Admin can Edit products on this page"
  ]);
?>





                <form class="update-form" action="<?= $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">

                   <h2>Update Product</h2>
                   <div class="form-group">
                     <label for="title">Title:</label>
                     <input type="text" class="form-control" name="title" id="title" value="">
                     <span><?= isset($titleMessage) ?$titleMessage : '' ?></span>
                   </div>
                   <div class="form-group">
                     <label for="price">Price:</label>
                     <input type="text" class="form-control" name="price" id="price" value="">
                     <span><?= isset($priceMessage) ?$priceMessage : '' ?></span>
                   </div>
                   <div class="form-group">
                     <label for="list_price">List Price:</label>
                     <input type="text" class="form-control" name="list_price" id="list_price" value="">
                     <span><?= isset($listPriceMessage) ? $listPriceMessage : '' ?></span>
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
                        <option value="lg">LG</option>
                    </select>
                    <span><?= isset($brandMessage) ? $brandMessage : '' ?></span>
                   </div>
                   <div class="form-group">
                     <label for="brand">Categories:</label>
                     <select class="form-control" name="categories">
                       <option value="">Please select a category</option>
                        <option value="mobiles">mobiles</option>
                        <option value="tablets">tablets</option>
                        <option value="accessories">accessories</option>
                    </select>
                      <span><?= isset($categoriesMessage) ? $categoriesMessage : '' ?></span>
                   </div>

                   <div class="form-group">
                     <label for="desc">Description:</label>
                     <textarea name="desc" class="form-control" id="desc" rows="10" cols="30"></textarea>
                     <span><?= isset($descMessage) ? $descMessage : '' ?></span>
                   </div>
                   <div class="form-group">
                     <label for="image">Image:</label>
                     <input type="file" name="image" id="image">
                     <p class="help-block">Upload image</p>
                     <span><?= isset($imageMessage) ? $imageMessage : '' ?></span>
                   </div>
                   <button type="submit" name="admin-edit-products" class="btn btn-block btn-success">Submit</button>
                   <span><?= isset($updateMessage) ?$updateMessage : '' ?></span>

                </form>










                </form>