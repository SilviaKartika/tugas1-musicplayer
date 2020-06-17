<?php

	$art = new App\Artist();
	$rows = $art->tampil();
 ?>

<div  class="btn-data" align="center"><a href="dashboard.php?page=artist_input"> Input Data Artist</a></div>
<h2 align="center">Data Artist</h2>
 <table border="1" width="700" align="center" cellpadding="5" cellspacing="2">
 	<tr>
 		<th>Id Artist</th>
 		<th>Nama Artist</th>
 		<th>Aksi</th>
 	</tr>
 	<?php foreach ($rows as $row) { ?>
 		<tr>
	 		<td><?php echo $row['artist_id']; ?></td>
	 		<td><?php echo $row['artist_name']; ?></td>
	 		<td><a href="dashboard.php?page=artist_edit&id=<?php echo $row['artist_id']; ?>" class="btn">Edit</a> <a href="artist_proses.php?delete-id=<?php echo $row['artist_id']; ?>">Delete</a></td>
 		</tr>
 	<?php } ?> 

 </table>