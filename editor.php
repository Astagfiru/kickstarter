<?php
	$con = mysqli_connect('127.0.0.1', 'root','','kick');
	$sum = $_GET["title"];
	$update = "UPDATE start SET title='{$sum}', description='{$_GET['description']}', goal='{$_GET['goal']}', img='{$_GET['img']}', place='{$_GET['place']}', user='{$GET_['user']}' WHERE id = {$_GET["id2"]}";
	$query = mysqli_query($con, $update);
	header("Location: acc.php?acc_user=" . $_GET['user']);
?>