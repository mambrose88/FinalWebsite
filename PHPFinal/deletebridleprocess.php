<?php 
	include("function-lib.php");
	$delete_ID=$_POST['delete_id'];
	$result = runMyQuery("DELETE FROM bridles WHERE id=$delete_ID");

	header('Location:details-bridles.php');
?>