<?php 
		// Config
require_once "inc/config.php";

	$alb = new App\Album();

	if ($_POST['tsimpan']){
	$alb->input();
	header("location:dashboard.php?page=album_tampil");
}
	if ($_POST['tedit']){
	$alb->update();
	header("location:dashboard.php?page=album_tampil");
}

	if ($_GET['delete-id']){
		$alb->delete($_GET['delete-id']);
		header("location:dashboard.php?page=album_tampil");
	}
 ?>