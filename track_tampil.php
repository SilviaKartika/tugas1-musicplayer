<div align="center"><a href="dashboard.php?page=track_input" class="btn">Tambah</a></div>	
<h2 align="center">DATA TRACK</h2>

<?php 

$trc = new App\Track();
$rows = $trc->tampil();

?>

<table align="center">
	<tr>
		<th>NO</th>
		<th>JUDUL</th>
		<th>ALBUM</th>
		<th>WAKTU</th>
		<th>PUTAR</th>
		<th>AKSI</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['track_id']; ?></td>
			<td><?php echo $row['track_name']; ?></td>
			<td><?php echo $row['ALB'] . " - " . $row['ART']; ?></td>
			<td><?php echo $row['track_time']; ?></td>
			<td>
				<?php if (!empty($row['track_file'])) { ?>
					<audio controls>
						<source src="<?php echo "./layout/assets/uploads/" . $row['track_file']; ?>" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>					
					<?php } ?>
				</td>
				<td><a href="dashboard.php?page=track_edit&id=<?php echo $row['track_id']; ?>" class="btn">Edit</a><a href="track_proses.php?delete-id=<?php echo $row['track_id']; ?>">Delete</a></td>
			</tr>
		<?php } ?>
	</table>