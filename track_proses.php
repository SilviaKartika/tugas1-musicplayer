<?php 
	include_once "app/Controller.php";
	include_once "app/Track.php";

	$tra = new App\Track();

	if ($_POST['tsimpan']){
	$tra->input();
	header("location:dashboard.php?page=track_tampil");
}
	if ($_POST['tedit']){
	$tra->update();
	header("location:dashboard.php?page=track_tampil");
}

	if ($_GET['delete-id']){
		$tra->delete($_GET['delete-id']);
		header("location:dashboard.php?page=track_tampil");
	}
 ?>