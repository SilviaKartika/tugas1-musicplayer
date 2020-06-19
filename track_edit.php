<?php 

$id = $_GET['id'];

$alb = new App\Track();
$row = $alb->edit($id);
$lst = $alb->listAlbum();
?>

<h2 align="center">EDIT LAGU</h2>

<form method="POST" action="track_proses.php" enctype="multipart/form-data">
	<input type="hidden" name="track_id" value="<?php echo $id; ?>">
	<table align="center">
		<tr>
			<th>JUDUL</th>
			<td><input type="text" name="track_name" value="<?php echo $row['track_name']; ?>" required=""></td>
		</tr>
		<tr>
			<th>ALBUM</th>
			<td>
				<select name="track_id_album">
					<?php foreach ($lst as $ls) { ?>
						<option value="<?php echo $ls['album_id']; ?>"<?php echo $row['track_id_album']==$ls['album_id'] ? " selected" : ""; ?>><?php echo $ls['album_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>DURASI</th>
			<td><input type="text" name="track_time" value="<?php echo $row['track_time']; ?>" required=""></td>
		</tr>
		<tr>
			<th>FILE (MP3)</th>
			<td><input type="file" name="track_file"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-update" value="UPDATE"></td>
		</tr>
	</table>
</form>