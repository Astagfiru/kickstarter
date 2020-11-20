<?php
	$con = mysqli_connect('127.0.0.1', 'root','','kick');
	
	$text_zaprosa_vstavit = "INSERT INTO start (title, description, goal, img, place, user) 
							VALUES ('{$_GET["title"]}', '{$_GET["description"]}', '{$_GET["goal"]}', '{$_GET["img"]}', '{$_GET["place"]}', '{$_GET["user"]}')";

	$query = mysqli_query($con, $text_zaprosa_vstavit);

	$len = $query->num_rows;		
	for($i=0;$i<$len;$i++){
		$stroka = $query->fetch_assoc();
	}
	header("Location: acc.php?acc_user=" . $_GET["user"] );

	
?>
