<!DOCTYPE html>
<html lang="ru">
<head>
 <?php
    $title = 'Админ-панель';
    require_once '../connection.php';
    require_once "../functions/functions.php";
    require_once "../blocks/head.php";
     $connection = mysqli_connect($host, $user, $password, $database)
     or die("Ошибка " . mysqli_error($connection));
mysqli_set_charset($connection, 'utf8');
    ?>
</head>
<body>
	<?php
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $query = "DELETE FROM clause WHERE id=$id";
    mysqli_query($connection, $query) or die (mysqli_error($connection));
}

if (isset($_POST['title'])) {

    //Если это запрос на обновление, то обновляем
    if (isset($_GET['red_id'])) {

        $query = "UPDATE `clause` SET 
        `title` = '{$_POST['title']}',
        `full_text` = '{$_POST['full_text']}'
        WHERE id={$_GET['red_id']}";

        if (mysqli_query($connection, $query)) {
            echo '<p>Обновили.</p>';
        } else {
            echo '<p>Что-то пошло не так.</p>';
        }
    }
}

 $result = mysqli_query($connection, 'SELECT * FROM `clause` ORDER BY `id` DESC ');
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
	}
?>
<?php


if (isset($_GET['red_id'])) {
    $sql = mysqli_query($connection, "SELECT `id`, `title`, `full_text` FROM `clause` WHERE `id`={$_GET['red_id']}");
    $product = mysqli_fetch_array($sql);
}

?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
                <a href="add_clause.php">Добавить статью</a>
                <a href="../index.php">Вернуться на главную</a>
<table>
    <?php foreach ($data as $query) { ?>
        <tr>
            <td><?= $query['id'] ?></td>
            <td><?= $query['title'] ?></td>
            <td><a href="?red_id=<?= $query['id'] ?>">Редактировать</a></td>
            <td><a href="?del=<?= $query['id'] ?>">Удалить</a></td>
        </tr>
    <?php } ?>
</table>
</div>
<div class="col-lg-8">
	<form method="POST" action="" enctype="multipart/form-data">
		<div class="row">
					<div class="col-lg-12 stat">
						<h1 style="margin-top: 50px;">Заголовок</h1>
						<label>
							<input type="text" name="title" value="<?= isset($_GET['red_id']) ? $product['title'] : ''; ?>" style="margin-top: 10px; width: 500px;">
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 stat">
						<p>Текст</p>
						<label>
							<textarea type="text" name="full_text" style="margin-top: 10px; width: 500px;height: 400px;" required ><?= isset($_GET['red_id']) ? $product['full_text'] : ''; ?></textarea>
						</label>
					</div>
				</div>
				<input type="submit" value="Редактировать" class="btn stat" style="background-color: orange">
	</form>
</div>
		</div>
	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/js.js"></script>
</body>
</html>