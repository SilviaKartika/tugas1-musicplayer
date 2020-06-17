<?php 
	
namespace App;

	class Select extends Controller {

		public function __construct(){
			parent::__construct();
		}

		public function selecta()
		{
			$sql = "SELECT * FROM tb_album";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();

			$data = [];

			while($row = $stmt->fetch()){
				$data[] = $row;
			}

			return $data;
		}

			public function selectt()
		{
			$sql = "SELECT * FROM tb_track";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();

			$data = [];

			while($row = $stmt->fetch()){
				$data[] = $row;
			}

			return $data;
		}

			public function selectar()
		{
			$sql = "SELECT * FROM tb_artist";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();

			$data = [];

			while($row = $stmt->fetch()){
				$data[] = $row;
			}

			return $data;
		}
	}
?>
