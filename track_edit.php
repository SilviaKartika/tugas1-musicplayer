<?php
include_once "app/Controller.php";
include_once "app/Track.php";

$id = $_GET['id'];

$tra = new App\Track();
$row = $tra->edit($id);

 ?>

	
<h2 align="center">Edit Data Track</h2>
<form method="POST" action="track_proses.php">
	<input type="hidden" name="track_id" value="<?php echo $id; ?>">
	<table border="2" width="800" align="center" cellpadding="5" cellspacing="1">
		<tr>
			<th>Nama Track</th>
			<td><input type="text" name="track_name" value="<?php echo $row['track_name']; ?>"></td>
		</tr>	
		<tr>
			<th>ID Artist</th>
			<td><input type="text" name="artist_id" value="<?php echo $row['artist_id']; ?>"></td>
		</tr>	
		<tr>
			<th>ID Album</th>
			<td><input type="text" name="album_id" value="<?php echo $row['album_id']; ?>"></td>
		</tr>
		<tr>
			<th>Waktu</th>
			<td><input type="text" name="waktu" value="<?php echo $row['waktu']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="tedit" value="UPDATE"></td>
		</tr>
	</table>
</form>

	<div class="footer" align="center">
		Silvia Kartika
	</div>
</div>
</body>
</html>