<?php
	$con = mysqli_connect('127.0.0.1', 'root','','kick');
	$sum = $_GET["donated"] + 10;
	$update = "UPDATE start SET donated = '{$sum}' WHERE id = {$_GET["id"]}";
	$query = mysqli_query($con, $update);
	header("Location: index.php");
?>