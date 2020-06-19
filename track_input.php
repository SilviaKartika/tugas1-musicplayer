<?php 

$alb = new App\Track();
$lst = $alb->listAlbum();
?>

<h2 align="center">Input Data Track</h2>

<form method="POST" action="track_proses.php" enctype="multipart/form-data">
	<table align="center">
		<tr>
			<th>JUDUL</th>
			<td><input type="text" name="track_name" required=""></td>
		</tr>
		<tr>
			<th>ALBUM</th>
			<td>
				<select name="track_id_album">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['album_id']; ?>"><?php echo $ls['album_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>DURASI</th>
			<td><input type="text" name="track_time" required=""></td>
		</tr>
		<tr>
			<th>FILE (MP3)</th>
			<td><input type="file" name="track_file"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="SIMPAN"></td>
		</tr>
	</table>
</form>