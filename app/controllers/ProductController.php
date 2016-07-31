<?php 


class ProductController {
	// Properties 



	// public function __construct(argument)
	// {
	// 	# code...
	// }

	public function buildHTML(){

		//create instance of plates library 

		$plates = new League\Plates\Engine('app/templates');


		echo $plates->render('product');
	}



}