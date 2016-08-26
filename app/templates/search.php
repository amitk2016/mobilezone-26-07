<?php

	$this->layout('master',[
		'title'=>'Search',
		'desc'=>'Search Results'
	]);

 ?>

 <h1 style="padding-top:100px;" class="text-center">Search Results for <i><?= $this->e($searchTerm) ?></i></h1>


 <?php if(strlen($searchTerm) > 0): ?>

 	<?php if($searchResults > 0): ?>

 		<?php foreach($searchResults as $Result): ?>

 			<div class="container">
 				<div class="row">
 					<div class="col-md-4">
 						<img src="<?= $Result['image']?>">
 					</div>
 					<div class="col-md-8">

 						<h3><?= $Result['products_title'] ?></h3>
		 				<p><?= $Result['products_description'] ?></p>
		 				
 					</div>
 					<hr>
 				</div>

 				

 			</div>

 			

 		<?php endforeach; ?>

 	<?php else: ?>

 		<p>There was no results for "<i><?= $this->e($searchTerm) ?></i>"</p>
 	<?php endif; ?>

 <?php else: ?>

 	<p>Please put something into the search bar</p>

 <?php endif; ?>
