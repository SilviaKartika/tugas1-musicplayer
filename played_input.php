<?php
	$sel = new App\Select();
	$a_rows = $sel->selectar();
	$al_rows = $sel->selecta();
	$t_rows = $sel->selectt();
 ?>
<div  class="btn-data" align="center"><a href="index.php?halaman=played_tampil"> Data Played</a></div>
<h2 align="center">Input Data Played</h2>
<form method="POST" action="played_proses.php">
	<table align="center">
		<tr>
			<td>Id Artist</td>
			<td><select name="artist_id">
					<option disabled selected>--Pilih Id Artist--</option>
					<?php foreach ($a_rows as $row) { ?>
					<option value="<?php echo $row['artist_id']; ?>"><?php echo $row['artist_id']; ?></option>
					<?php } ?>
				</select></td>
		</tr>
		<tr>
			<td>Id Album</td>
			<td><select name="album_id">
					<option disabled selected>--Pilih Id Album--</option>
					<?php foreach ($al_rows as $row) { ?>
					<option value="<?php echo $row['album_id']; ?>"><?php echo $row['album_id']; ?></option>
					<?php } ?>
				</select></td>
		</tr>
		<tr>
			<td>Id Track</td>
			<td><select name="track_id">
					<option disabled selected>--Pilih Id Track--</option>
					<?php foreach ($t_rows as $row) { ?>
					<option value="<?php echo $row['track_id']; ?>"><?php echo $row['track_id']; ?></option>
					<?php } ?>
				</select></td>
		</tr>
		<tr>
			<td>Played</td>
			<td><input type="date" name="played"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="tsimpan" value="Simpan"></td>
		</tr>
	</table>
</form>