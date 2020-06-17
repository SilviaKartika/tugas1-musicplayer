<?php

	$alb = new App\Album();
	$rows = $alb->tampil();
 ?>

<div  class="btn-data" align="center"><a href="dashboard.php?page=album_input"> Input Data Album</a></div>
<h2 align="center">Data Album</h2>
 <table border="1" width="700" align="center" cellpadding="5" cellspacing="2">
 	<tr>
 		<th>Id Album</th>
 		<th>Id Artist</th>
 		<th>Nama Album</th>
 		<th>Aksi</th>
 	</tr>
 	<?php foreach ($rows as $row) { ?>
 		<tr>
 			<td><?php echo $row['album_id']; ?></td>
	 		<td><?php echo $row['artist_id']; ?></td>
	 		<td><?php echo $row['album_name']; ?></td>
	 		<td><a href="dashboard.php?page=album_edit&id=<?php echo $row['album_id']; ?>" class="btn">Edit</a><a href="album_proses.php?delete-id=<?php echo $row['album_id']; ?>">Delete</a></td>
 	<?php } ?> 

 </table>