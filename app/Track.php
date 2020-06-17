<?php 
	
namespace App;

	class Track extends Controller {

		public function __construct(){
			parent::__construct();
		}

		public function input(){

			$nama = $_POST['track_name'];
			$artist = $_POST['artist_id'];
			$album = $_POST['album_id'];
			$waktu = $_POST['waktu'];

			$sql = "INSERT INTO tb_track(track_name, artist_id, album_id, waktu) VALUES (
										   :track_name, :artist_id, :album_id, :waktu)";

			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":track_name",$nama);
			$stmt->bindParam(":artist_id",$artist);
			$stmt->bindParam(":album_id",$album);
			$stmt->bindParam(":waktu",$waktu);
			$stmt->execute();

			return false;
		}
		public function tampil()
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

		public function edit($id)
		{
			$sql = "SELECT * FROM tb_track WHERE track_id=:track_id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":track_id", $id);
			$stmt->execute();

			$row = $stmt->fetch();

			return $row;
		}

		public function update()
		{

			$nama = $_POST['track_name'];
			$artist = $_POST['artist_id'];
			$album = $_POST['album_id'];
			$waktu = $_POST['waktu'];
			$id = $_POST['track_id'];

			$sql = "UPDATE tb_track SET track_name=:track_name, artist_id=:artist_id, album_id=:album_id, waktu=:waktu WHERE track_id=:track_id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":track_name",$nama);
			$stmt->bindParam(":artist_id",$artist);
			$stmt->bindParam(":album_id",$album);
			$stmt->bindParam(":waktu",$waktu);
			$stmt->bindParam(":track_id", $id);

			$stmt->execute();

			return false;
		}

		public function delete($id)
		{
			$sql = "DELETE FROM tb_track WHERE track_id=:track_id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":track_id",$id);
			$stmt->execute();

			return false;
		}
	}


 ?>