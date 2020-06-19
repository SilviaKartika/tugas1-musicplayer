<?php 
	
namespace App;

	class Played extends Controller {

		public function __construct(){
			parent::__construct();
		}

		public function input(){

			$play = $_POST['play_id'];
			$track = $_POST['play_id_track'];
			$date = $_POST['play_date'];

			$sql = "INSERT INTO tb_played(play_id, play_id_track, play_date) VALUES (
										   :play_id, :play_id_track, :play_date)";

			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":play_id", $play);
			$stmt->bindParam(":play_id_track", $track);
			$stmt->bindParam(":play_date", $date);
			$stmt->execute();

			return false;
		}
		public function tampil()
		{
			$sql = "SELECT * FROM tb_played";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();

			$data = [];

			while($row = $stmt->fetch()){
				$data[] = $row;
			}

			return $data;
		}

		public function edit($id)
		{
			$sql = "SELECT * FROM tb_played WHERE play_id=:play_id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":play_id", $id);
			$stmt->execute();

			$row = $stmt->fetch();

			return $row;
		}

		public function update()
		{

			$play = $_POST['play_id'];
			$track = $_POST['play_id_track'];
			$date = $_POST['play_date'];
			$id = $_POST['play_id'];

			$sql = "UPDATE tb_played SET play_id=:play_id, play_id_track=:play_id_track, play_date=:play_date WHERE play_id=:play_id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":play_id",$play);
			$stmt->bindParam(":play_id_track",$track);
			$stmt->bindParam(":play_date",$date);
			$stmt->bindParam(":play_id", $id);

			$stmt->execute();

			return false;
		}

		public function delete($id)
		{
			$sql = "DELETE FROM tb_played WHERE play_id=:play_id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":play_id",$id);
			$stmt->execute();

			return false;
		}
	}


 ?>