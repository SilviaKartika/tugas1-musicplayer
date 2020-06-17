<?php 

namespace App;
use PDO;

class Controller{

	protected object $db;

	public function __construct(){

		try{

			$this->db = new PDO("mysql:host=localhost;dbname=dbuts", "root","");
		}catch (Exception $e){
				die ("error! ". $e->getMassage());
		}
	}
}

 ?>
