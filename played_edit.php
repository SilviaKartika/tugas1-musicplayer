<?php
include_once "app/Controller.php";
include_once "app/Played.php";

$id = $_GET['id'];

$pla = new Played();
$row = $pla->edit($id);

 ?>
	
<h2 align="center">Edit Data Played</h2>
<form method="POST" action="played_proses.php">
	<input type="hidden" name="played_id" value="<?php echo $id; ?>">
	<table border="1" width="800" align="center" cellpadding="5" cellspacing="2">
		<tr>
			<td>ID Artist</td>
			<td><input type="text" name="artist_id" value="<?php echo $row['artist_id']; ?>"></td>
		</tr>	
		<tr>
			<td>ID Album</td>
			<td><input type="text" name="album_id" value="<?php echo $row['album_id']; ?>"></td>
		</tr>
		<tr>
			<td>ID Track</td>
			<td><input type="text" name="track_id" value="<?php echo $row['track_id']; ?>"></td>
		</tr>
		<tr>
			<td>Played</td>
			<td><input type="date" name="played" value="<?php echo $row['played']; ?>"></td>
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