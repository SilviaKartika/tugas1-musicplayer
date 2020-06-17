<?php 
	include_once "app/Controller.php";
	include_once "app/Played.php";

	$pla = new App\Played();

	if ($_POST['tsimpan']){
	$pla->input();
	header("location:dashboard.php?page=played_tampil");
}
	if ($_POST['tedit']){
	$pla->update();
	header("location:dashboard.php?page=played_tampil");
}

	if ($_GET['delete-id']){
		$pla->delete($_GET['delete-id']);
		header("location:dashboard.php?page=played_tampil");
	}
 ?>