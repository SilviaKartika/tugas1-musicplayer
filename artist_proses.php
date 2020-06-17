<?php 
	
	include_once "app/Controller.php";
	include_once "app/Artist.php";

	$art = new App\Artist();

	if ($_POST['tsimpan']){
	$art->input();
	header("location:dashboard.php?page=artist_tampil");
}
	if ($_POST['tedit']){
	$art->update();
	header("location:dashboard.php?page=artist_tampil");
}

	if ($_GET['delete-id']){
		$art->delete($_GET['delete-id']);
		header("location:dashboard.php?page=artist_tampil");
	}
 ?>