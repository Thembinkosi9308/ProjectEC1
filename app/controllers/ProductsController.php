<?php
  
  namespace App\Controllers;
  use Core\Controller;

class ProductsController extends Controller{

	public function __construct($controller,$action){
	
		parent::__construct($controller,$action);
	}


	public function detailsAction(){
	
		echo "hello world";
	}

}

