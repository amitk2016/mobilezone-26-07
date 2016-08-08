<?php
  $this->layout('master',[
    'title'=> "Users",
    'description'=>"You can update your information here"
  ]);
?>

<form class="update-form" action="index.php?page=users" method="post">
  <h2>Update Your Info </h2>
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" placeholder="First" name="first-name">
    <?php if ( isset($firstNameMessage) ) : ?>
      <p><?= $firstNameMessage ?></p>
    <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" placeholder="Last" name="last-name">
    <?php if ( isset($lastNameMessage) ) : ?>
      <p><?= $lastNameMessage ?></p>
    <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="inputFile">File input</label>
    <input type="file" id="inputFile">
    <p class="help-block">Upload your image</p>
  </div>

  <button type="submit" class="btn btn-success" name="update-contact" >Update Info</button>
</form>


<form class="update-form" action="index.php?page=users" method="post" enctype="multipart/form-data">
   <h2>Create New Blog</h2>
   <div class="form-group">
     <label for="subject">Subject:</label>
     <input type="text" class="form-control" name="subject" id="subject" value="">
     <?= isset($subjectMessage) ?$subjectMessage : '' ?>
   </div>
   <div class="form-group">
     <label for="desc">Description:</label>
     <textarea name="desc" class="form-control" id="desc" rows="10" cols="30"></textarea>
     <?= isset($descMessage) ? $descMessage : '' ?>
   </div>
   <div class="form-group">
     <label for="image">Image:</label>
     <input type="file" name="image[]" id="image" multiple>
     <p class="help-block">Upload image</p>
     <?= isset($fileMessage) ?$fileMessage : '' ?>
   </div>
   <button type="submit" name="new-blog" class="btn btn-warning">Submit</button>
   <span><?= isset($postMessage) ?$postMessage : '' ?></span>

</form>
