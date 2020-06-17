<?php

	$tra = new App\Track();
	$rows = $tra->tampil();
 ?>

<div  class="btn-data" align="center"><a href="dashboard.php?page=track_input"> Input Data Track</a></div>
<h2 align="center">Data Track</h2>
 <table border="1" width="800" align="center" cellpadding="5" cellspacing="2">
 	<tr>
 		<th>Id Track</th>
 		<th>Nama Track</th>
 		<th>Id Artis</th>
 		<th>Id Album</th>
 		<th>Time</th>
 		<th>Aksi</th>
 	</tr>
 	<?php foreach ($rows as $row) { ?>
 		<tr>
	 		<td><?php echo $row['track_id']; ?></td>
	 		<td><?php echo $row['track_name']; ?></td>
	 		<td><?php echo $row['artist_id']; ?></td>
	 		<td><?php echo $row['album_id']; ?></td>
	 		<td><?php echo $row['waktu']; ?></td>
	 		<td><a href="dashboard.php?page=track_edit&id=<?php echo $row['track_id']; ?>" class="btn">Edit</a>
	 		<a href="track_proses.php?delete-id=<?php echo $row['track_id']; ?>" class="btn" >Delete</a></td>
 		</tr>
 	<?php } ?> 

 </table>