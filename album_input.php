<?php

	$sel = new App\Select();
	$a_rows = $sel->selectar();
 ?>

<div  class="btn-data" align="center"><a href="index.php?halaman=album_tampil"> Data Album</a></div>
<h2 align="center">Input Data Album</h2>
<form method="POST" action="album_proses.php">
	<table align="center"> 
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
			<td>Nama Album</td>
			<td>
				<input type="text" name="album_name">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="tsimpan" value="Simpan">
			</td>
		</tr>
	</table>
</form>