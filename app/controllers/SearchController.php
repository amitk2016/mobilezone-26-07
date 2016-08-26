<?php

class SearchController extends PageController{

	public function __construct($dbc){
		parent::__construct();

		// Save the database connection
		$this->db = $dbc;

		$this->getSearch();
	  	
	}

  //Methods (functions)
	public function buildHTML(){
		echo $this->plates->render('search', $this->data);
	}



  public function getSearch() { 


    if(strlen($_POST['search']) === 0){
			$searchTerm = "";
	} else {
		$result = $_POST['search'];
		$searchTerm = strtolower($result);
	}

    $this->data['searchTerm'] = $searchTerm;

    $sql = "SELECT mobiles.id, title AS products_title, description AS products_description,price,image
				FROM mobiles
				WHERE
					title LIKE '%$searchTerm%' OR
					description LIKE '%$searchTerm%'
				ORDER BY products_title ASC";

   
    $result = $this->db->query($sql);


    if( !$result || $result->num_rows == 0){
			$this->data['searchResults'] = "No Results";
		} else{
			$this->data['searchResults'] = $result->fetch_all(MYSQLI_ASSOC);

		}
	
	//  $sql = "SELECT mobiles.id AS mobile_id, title AS products_title, description AS products_description,price
	// 			FROM mobiles
	// 			WHERE
	// 				title LIKE '%$searchTerm%' OR
	// 				description LIKE '%$searchTerm%'
	// 			ORDER BY products_title ASC";

	//  $result = $this->db->query($sql);

	//  $result = $result->fetch_assoc();

	//  $resultID = $result['mobile_id'];

	// $sql = "SELECT image 
	// 		FROM mobiles
	// 		WHERE id = $resultID";

	// $result = $this->db->query($sql);

	// $this->data['searchImage'] = $result->fetch_assoc();
	
	// // var_dump($this->data['searchImage']);
	// // die();

  }


}
