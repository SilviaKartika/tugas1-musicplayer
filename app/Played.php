<?php 
	
namespace App;

	class Played extends Controller {

		public function __construct(){
			parent::__construct();
		}

		public function input(){

			$artist = $_POST['artist_id'];
			$album = $_POST['album_id'];
			$track = $_POST['track_id'];
			$play = $_POST['played'];

			$sql = "INSERT INTO tb_played(artist_id, album_id, track_id, played) VALUES (
										   :artist_id, :album_id, :track_id, :played)";

			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":artist_id", $artist);
			$stmt->bindParam(":album_id", $album);
			$stmt->bindParam(":track_id", $track);
			$stmt->bindParam(":played", $play);
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
			$sql = "SELECT * FROM tb_played WHERE played=:played";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":played", $id);
			$stmt->execute();

			$row = $stmt->fetch();

			return $row;
		}

		public function update()
		{

			$artist = $_POST['artist_id'];
			$album = $_POST['album_id'];
			$track = $_POST['track_id'];
			$play = $_POST['played'];
			$id = $_POST['played'];

			$sql = "UPDATE tb_played SET artist_id=:artist_id, album_id=:album_id, track_id=:track_id, played=:played WHERE played=:played";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":artist_id",$artist);
			$stmt->bindParam(":album_id",$album);
			$stmt->bindParam(":track_id",$track);
			$stmt->bindParam(":played",$play);
			$stmt->bindParam(":played", $id);

			$stmt->execute();

			return false;
		}

		public function delete($id)
		{
			$sql = "DELETE FROM tb_played WHERE played=:played";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":played",$id);
			$stmt->execute();

			return false;
		}
	}


 ?>