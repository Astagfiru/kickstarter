<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<?php
	$con = mysqli_connect('127.0.0.1', 'root','','kick');
	$query = mysqli_query($con, "SELECT * FROM start");
?>
<div class="col-10 mx-auto">
	<h4 class="">Explore <span class="text-success font-weight-bold"><!--Вывести количество проектов--><?php $len = $query->num_rows; echo $len; ?></span></h4>
	<p></p>
	<div class="row mt-5 col-10 mx-auto">
		<?php
			for($i=0;$i<$len;$i++){
		 		$stroka = $query->fetch_assoc();
		?>
		<div class="col-4">
			<img class="w-100" src='<?php echo $stroka["img"]?>'>
			<h3><?php echo $stroka["title"]?></h3>
			<p><?php echo $stroka["description"]?></p>
			<p>by: <?php echo $stroka["user"]?></p>
			<p>in: <?php echo $stroka["place"]?></p>
			<h4><?php echo $stroka["goal"]?>$ goal</h4>
			<h4 class="text-success"><?php echo $stroka["donated"]?>$ pledged</h4>
			<form method="GET" action="updateDonate.php">
				<input type="text" value='<?php echo $stroka["id"]?>' name="id" style="display: none;">
				<input type="text" value='<?php echo $stroka["donated"]?>' name="donated" style="display: none;">
				<button class="btn btn-success">Back this project +10$</button>
			</form>
		</div>
		<?php
			}
		?>
	</div>

</div>
</body>
</html>