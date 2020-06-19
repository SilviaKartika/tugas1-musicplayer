<div align="center"><a href="dashboard.php?page=album_input" class="btn">Input Data Album</a></div>
<h2 align="center">DATA ALBUM</h2>

<?php 

$alb = new App\Album();
$rows = $alb->tampil();

?>

<table align="center">
	<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>ARTIS</th>
		<th>EDIT</th>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row['album_name']; ?></td>
			<td><?php echo $row['ART']; ?></td>
			<td><a href="dashboard.php?page=album_edit&id=<?php echo $row['album_id']; ?>" class="btn">Edit</a><a href="album_proses.php?delete-id=<?php echo $row['artist_id']; ?>">Delete</a></td>
		</tr>
	<?php } ?>
</table>