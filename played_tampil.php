<?php

	$pla = new App\Played();
	$rows = $pla->tampil();
 ?>

<div  class="btn-data" align="center"><a href="dashboard.php?page=played_input"> Input Data Played</a></div>
<h2 align="center">Data Played</h2>
 <table border="1" width="800" align="center" cellpadding="5" cellspacing="2">
 	<tr>
 		<th>Id Artist</th>
 		<th>Id Album</th>
 		<th>Id Track</th>
 		<th>Played</th>
 	</tr>
 	<?php foreach ($rows as $row) { ?>
 		<tr>
 			<td><?php echo $row['artist_id']; ?></td>
 			<td><?php echo $row['album_id']; ?></td>
	 		<td><?php echo $row['track_id']; ?></td>
	 		<td><?php echo $row['played']; ?></td>
 		</tr>
 	<?php } ?> 

 </table>