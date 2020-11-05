<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
    require_once '../connection.php';
	require_once "../functions/functions.php"; 
	require_once "../blocks/head.php";
	$connection = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($connection));
mysqli_set_charset($connection, 'utf8');
	if (isset($_POST['title']) && isset($_POST['full_text'])){
	$title = $_POST['title'];
    $full_text = $_POST['full_text'];
    $timeStamp = time();

    if ($connection->connect_error) {
        die('Ошибка : ('. $connection->connect_errno .') '. $connection->connect_error);
    }
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $tmpName = move_uploaded_file($_FILES['picture']['tmp_name'], '../clause/'.$picture = time().'.'.pathinfo($_FILES['picture']['name'])['extension']);
}
$t = $connection->query("INSERT INTO clause (title, picture, full_text,timeStamp) VALUES ('$title','$picture','$full_text','$timeStamp')");
    if ($t == true){
        echo "Информация занесена в базу данных";
    }else{
        echo "Информация не занесена в базу данных";
    }
}
	?>
	<a href="../index.php">Вернуться на главную</a>
	<title>Добавить статью</title>
</head>
<body>
	<section>
		<div class="container">
			<form method="POST" action="" enctype="multipart/form-data">
				<div class="row">
					<div class="col-lg-12 stat">
						<h1 style="margin-top: 50px;">Картинка</h1>
						<label>
							<input type="file" name="picture">
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 stat">
						<h1 style="margin-top: 50px;">Заголовок</h1>
						<label>
							<input type="text" name="title" style="margin-top: 10px; width: 500px;">
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 stat">
						<p>Текст</p>
						<label>
							<textarea type="text" name="full_text" style="margin-top: 10px; width: 500px;height: 400px;" required ></textarea>
						</label>
					</div>
				</div>
				<input type="submit" name="upload" value="Создать" class="btn stat" style="background-color: orange">
			</form>
		</div>
	</section>
<?php mysqli_close($connection); ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/js.js"></script>
</html>