<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
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

<div class="col-6 mx-auto">
	<form method="GET" action="insert.php">
		<div class="form-group">
			<input type="" class="form-control" id="" aria-describedby="" name="title" placeholder="Заголовок">
		</div>
		<div class="form-group">
			<textarea type="" class="form-control" id="" aria-describedby="" name="description" placeholder="Описание"></textarea>
		</div>
		<div class="form-group">
			<input type="" class="form-control" id="" aria-describedby="" name="goal" placeholder="Необходимая сумма">
		</div>
		<div class="form-group">
			<input type="" class="form-control" id="" aria-describedby="" name="img"  placeholder="Обложка">
		</div>
		<div class="form-group">
			<input type="" class="form-control" id="" aria-describedby="" name="place" placeholder="Город">
		</div>
		<div class="form-group">
			<input type="" class="form-control" id="" aria-describedby="" name="user" placeholder="user">
		</div>
		<button type="submit" class="btn btn-success btn-block">Добавить</button>
	</form>
</div>

<h1 class="text-center mt-5">My projects</h1>


<?php
	$con = mysqli_connect('127.0.0.1', 'root','','kick');
	$query = mysqli_query($con, "SELECT * FROM start WHERE user='{$_GET['acc_user']}'");
?>
<div class="col-10 mx-auto mt-5">
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

			<form method="GET" action="edit.php">
				<input type="text" value='<?php echo $stroka["id"]?>' name="id" style="display: none;">
				<button class="btn btn-success">Редактировать</button>
			</form>

			<form method="GET" action="delete.php">
				<input type="text" value='<?php echo $stroka["id"]?>' name="idddd" style="display: none;">
				<button class="btn btn-danger">Удалить</button>
			</form>

		</div>
		<?php
			}
		?>
	</div>

</div>

</body>
</html>