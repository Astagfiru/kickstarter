<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','kick');
	$query = mysqli_query($con, "SELECT * FROM start WHERE id = '{$_GET['id']}'");
	$len = $query->num_rows;
	for ($i=0; $i < $len; $i++) { 
		$stroka = $query->fetch_assoc();
	};
?>
<div class="col-6 mx-auto">
	<form method="GET" action="editor.php">
		<div class="form-group">
			<input value="<?php echo $stroka['title'] ?>" type="" class="form-control" id="" aria-describedby="" name="title" placeholder="Заголовок">
		</div>
		<div class="form-group">
			<input value="<?php echo $stroka['description'] ?>" type="" class="form-control" id="" aria-describedby="" name="description" placeholder="Описание">
		</div>
		<div class="form-group">
			<input value="<?php echo $stroka['goal'] ?>" type="" class="form-control" id="" aria-describedby="" name="goal" placeholder="Необходимая сумма">
		</div>
		<div class="form-group">
			<input value="<?php echo $stroka['img'] ?>" type="" class="form-control" id="" aria-describedby="" name="img"  placeholder="Обложка">
		</div>
		<div class="form-group">
			<input value="<?php echo $stroka['place'] ?>" type="" class="form-control" id="" aria-describedby="" name="place" placeholder="Город">
		</div>
		<div class="form-group">
			<input value="<?php echo $stroka['user'] ?>" type="" class="form-control" id="" aria-describedby="" name="user" placeholder="user">
			<input type="text" value='<?php echo $_GET["id" ]?>' name="id2" style="display: none;">
		</div>
		<button class="btn btn-success btn-block">Изменить</button>
	</form>
</div>
</body>
</html>