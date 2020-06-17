<?php

	$sel = new App\Select();
	$a_rows = $sel->selectar();
	$al_rows = $sel->selecta();

 ?>
<div  class="btn-data" align="center"><a href="index.php?halaman=track_tampil"> Data Track</a></div>
<h2 align="center">Input Data Track</h2>
<form method="POST" action="track_proses.php">
	<table align="center">
		<tr>
			<td>Nama Track</td>
			<td><input type="text" name="track_name"></td>
		</tr> 
		<tr>
			<td>Id Artist</td>
			<td>
				<select name="artist_id">
					<option disabled selected>--Pilih Id Artist--</option>
					<?php foreach ($a_rows as $row) { ?>
					<option value="<?php echo $row['artist_id']; ?>"><?php echo $row['artist_id']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Id Album</td>
			<td>
				<select name="album_id">
					<option disabled selected>--Pilih Id Album--</option>
					<?php foreach ($al_rows as $row) { ?>
					<option value="<?php echo $row['album_id']; ?>"><?php echo $row['album_id']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Time</td>
			<td><input type="text" name="waktu"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="tsimpan" value="Simpan"></td>
		</tr>
	</table>
</form>