<?php
include_once "app/Controller.php";
include_once "app/Album.php";

$id = $_GET['id'];

$alb = new App\Album();
$row = $alb->edit($id);

 ?>
	
<h2 align="center">Edit Data Album</h2>
<form method="POST" action="album_proses.php">
	<input type="hidden" name="album_id" value="<?php echo $id; ?>">
	<table border="2" width="800" align="center" cellpadding="5" cellspacing="2">
		<tr>
			<th>ID Album</th>
			<td><input type="text" name="album_id" value="<?php echo $row['album_id']; ?>"></td>
		</tr>	
		<tr>
			<th>ID Artist</th>
			<td><input type="text" name="artist_id" value="<?php echo $row['artist_id']; ?>"></td>
		</tr>
		<tr>
			<th>Nama Album</th>
			<td><input type="text" name="album_name" value="<?php echo $row['album_name']; ?>"></td>
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


