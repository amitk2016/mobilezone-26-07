<?php

	$this->layout('master',[
		'title'=>'Search',
		'desc'=>'Search Results'
	]);

 ?>

 <h1 style="padding-top:100px;">Search Results for <b><?= $this->e($searchTerm) ?></b></h1>


 <?php if(strlen($searchTerm) > 0): ?>

 	<?php if($searchResults > 0): ?>

 		<?php foreach($searchResults as $Result): ?>

 			<h3><?= $Result['products_title'] ?></h3>
 			<p><?= $Result['products_description'] ?></p>
 			<hr>

 		<?php endforeach; ?>

 	<?php else: ?>

 		<p>There was no results for "<i><?= $this->e($searchTerm) ?></i>"</p>
 	<?php endif; ?>

 <?php else: ?>

 	<p>Please put something into the search bar</p>

 <?php endif; ?>
