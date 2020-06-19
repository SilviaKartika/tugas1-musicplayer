<?php
	$sel = new App\Select();
	$t_rows = $sel->selectt();
 ?>
<div  class="btn-data" align="center"><a href="index.php?halaman=played_tampil"> Data Played</a></div>
<h2 align="center">Input Data Played</h2>
<form method="POST" action="played_proses.php">
	<table align="center">
			<td>Id Track</td>
			<td><select name="play_id_track">
					<option disabled selected>--Pilih Id Track--</option>
					<?php foreach ($t_rows as $row) { ?>
					<option value="<?php echo $row['track_id']; ?>"><?php echo $row['track_id']; ?></option>
					<?php } ?>
				</select></td>
		</tr>
		<tr>
			<td>Date</td>
			<td><input type="date" name="play_date"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="tsimpan" value="Simpan"></td>
		</tr>
	</table>
</form>