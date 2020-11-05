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
    $query = "DELETE FROM news WHERE id=$id";
    mysqli_query($connection, $query) or die (mysqli_error($connection));
}

if (isset($_POST['title'])) {

    //Если это запрос на обновление, то обновляем
    if (isset($_GET['red_id'])) {

        $query = "UPDATE `news` SET 
        `title` = '{$_POST['title']}',
        `full_text` = '{$_POST['full_text']}',
        `title2` = '{$_POST['title2']}',
        `intro_text` = '{$_POST['intro_text']}',
        `date_sor` = '{$_POST['date_sor']}',
        `date_sor2` = '{$_POST['date_sor2']}',
        `date_sor3` = '{$_POST['date_sor3']}',
        `date_sor4` = '{$_POST['date_sor4']}',
        `time` = '{$_POST['time']}',
        `time2` = '{$_POST['time2']}',
        `time3` = '{$_POST['time3']}',
        `time4` = '{$_POST['time4']}',
        `dis` = '{$_POST['dis']}',
        `dis2` = '{$_POST['dis2']}',
        `dis3` = '{$_POST['dis3']}',
        `dis4` = '{$_POST['dis4']}',
        `zayavka` = '{$_POST['zayavka']}',
        `zayavka2` = '{$_POST['zayavka2']}',
        `zayavka3` = '{$_POST['zayavka3']}',
        `zayavka4` = '{$_POST['zayavka4']}',
        `info` = '{$_POST['info']}',
        `info2` = '{$_POST['info2']}',
        `info3` = '{$_POST['info3']}',
        `info4` = '{$_POST['info4']}',
        `start` = '{$_POST['start']}',
        `start2` = '{$_POST['start2']}',
        `start3` = '{$_POST['start3']}',
        `start4` = '{$_POST['start4']}',
        `rezult` = '{$_POST['rezult']}',
        `rezult2` = '{$_POST['rezult2']}',
        `rezult3` = '{$_POST['rezult3']}',
        `rezult4` = '{$_POST['rezult4']}',
        `link1` = '{$_POST['link1']}',
        `link2` = '{$_POST['link2']}',
        `link3` = '{$_POST['link3']}',
        `link4` = '{$_POST['link4']}',
        `link5` = '{$_POST['link5']}',
        `link6` = '{$_POST['link6']}',
        `link7` = '{$_POST['link7']}',
        `link8` = '{$_POST['link8']}',
        `link9` = '{$_POST['link9']}',
        `link10` = '{$_POST['link10']}',
        `link11` = '{$_POST['link11']}',
        `link12` = '{$_POST['link12']}',
        `link13` = '{$_POST['link13']}',
        `link14` = '{$_POST['link14']}',
        `link15` = '{$_POST['link15']}',
        `link16` = '{$_POST['link16']}',
        `full_text2` = '{$_POST['full_text2']}' WHERE id={$_GET['red_id']}";

        if (mysqli_query($connection, $query)) {
            echo '<p>Обновили.</p>';
        } else {
            echo '<p>Что-то пошло не так.</p>';
        }
    }
}

$result = mysqli_query($connection, 'SELECT * FROM `news` ORDER BY `id` DESC ');
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {

}

$news = getNews(7, $id);
?>
<?php
if (isset($_POST['title']) && isset($_POST['full_text'])  && isset($_POST['type'])&& isset($_POST['title2'])&& isset($_POST['zayavka'])&& isset($_POST['zayavka2'])&& isset($_POST['zayavka3'])&& isset($_POST['intro_text'])&& isset($_POST['date_sor'])&& isset($_POST['date_sor2'])&& isset($_POST['date_sor3'])&& isset($_POST['zayavka4'])&& isset($_POST['info'])&& isset($_POST['info2'])&& isset($_POST['date_sor4'])&& isset($_POST['time'])&& isset($_POST['time2'])&& isset($_POST['time3'])&& isset($_POST['time4'])&& isset($_POST['dis'])&& isset($_POST['dis2'])&& isset($_POST['dis3'])&& isset($_POST['dis4'])&& isset($_POST['info3'])&& isset($_POST['info4'])&& isset($_POST['start'])&& isset($_POST['start2'])&& isset($_POST['start3'])&& isset($_POST['start4'])&& isset($_POST['rezult'])&& isset($_POST['rezult2'])&& isset($_POST['rezult3'])&& isset($_POST['rezult4'])&& isset($_POST['full_text2'])&& isset($_POST['link1'])&& isset($_POST['link2'])&& isset($_POST['link3'])&& isset($_POST['link4'])&& isset($_POST['link5'])&& isset($_POST['link6'])&& isset($_POST['link7'])&& isset($_POST['link8'])&& isset($_POST['link9'])&& isset($_POST['link10'])&& isset($_POST['link11'])&& isset($_POST['link12'])&& isset($_POST['link13'])&& isset($_POST['link14'])&& isset($_POST['link15'])&& isset($_POST['link16'])&& isset($_POST['category_id'])){

    $title = $_POST['title'];
    $full_text = $_POST['full_text'];
    $type = $_POST['type'];
    $title2 = $_POST['title2'];
    $intro_text = $_POST['intro_text'];
    $date_sor = $_POST['date_sor'];
    $date_sor2 = $_POST['date_sor2'];
    $date_sor3 = $_POST['date_sor3'];
    $date_sor4 = $_POST['date_sor4'];
    $time = $_POST['time'];
    $time2 = $_POST['time2'];
    $time3 = $_POST['time3'];
    $time4 = $_POST['time4'];
    $dis = $_POST['dis'];
    $dis2 = $_POST['dis2'];
    $dis3 = $_POST['dis3'];
    $dis4 = $_POST['dis4'];
    $zayavka = $_POST['zayavka'];
    $zayavka2 = $_POST['zayavka2'];
    $zayavka3 = $_POST['zayavka3'];
    $zayavka4 = $_POST['zayavka4'];
    $info = $_POST['info'];
    $info2 = $_POST['info2'];
    $info3 = $_POST['info3'];
    $info4 = $_POST['info4'];
    $start = $_POST['start'];
    $start2 = $_POST['start2'];
    $start3 = $_POST['start3'];
    $start4 = $_POST['start4'];
    $rezult = $_POST['rezult'];
    $rezult2 = $_POST['rezult2'];
    $rezult3 = $_POST['rezult3'];
    $rezult4 = $_POST['rezult4'];
    $full_text2 = $_POST['full_text2'];
    $link1 = $_POST['link1'];
    $link2 = $_POST['link2'];
    $link3 = $_POST['link3'];
    $link4 = $_POST['link4'];
    $link5 = $_POST['link5'];
    $link6 = $_POST['link6'];
    $link7 = $_POST['link7'];
    $link8 = $_POST['link8'];
    $link9 = $_POST['link9'];
    $link10 = $_POST['link10'];
    $link11 = $_POST['link11'];
    $link12 = $_POST['link12'];
    $link13 = $_POST['link13'];
    $link14 = $_POST['link14'];
    $link15 = $_POST['link15'];
    $link16 = $_POST['link16'];
    $category_id = $_POST['category_id'];
    $timeStamp = time();


    if ($connection->connect_error) {
        die('Ошибка : ('. $connection->connect_errno .') '. $connection->connect_error);
    }

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $tmpName = move_uploaded_file($_FILES['picture']['tmp_name'], '../uploads/'.$picture = time().'.'.pathinfo($_FILES['picture']['name'])['extension']);
}

    $t = $connection->query("INSERT INTO news (title, picture, full_text, type, title2, intro_text, date_sor, date_sor2, date_sor3, date_sor4, time, time2, time3, time4, dis, dis2, dis3,dis4,zayavka,zayavka2,zayavka3,zayavka4,info,info2,info3,info4,start,start2,start3,start4,rezult,rezult2,rezult3,rezult4,full_text2,link1,link2,link3,link4,link5,link6,link7,link8,link9,link10,link11,link12,link13,link14,link15,link16,category_id,timeStamp) VALUES ('$title','$picture','$full_text','$type','$title2','$intro_text','$date_sor','$date_sor2','$date_sor3','$date_sor4','$time','$time2','$time3','$time4','$dis','$dis2','$dis3','$dis4','$zayavka','$zayavka2','$zayavka3','$zayavka4','$info','$info2','$info3','$info4','$start','$start2','$start3','$start4','$rezult','$rezult2','$rezult3','$rezult4','$full_text2','$link1','$link2','$link3','$link4','$link5','$link6','$link7','$link8','$link9','$link10','$link11','$link12','$link13','$link14','$link15','$link16','$category_id','$timeStamp')");
    if ($t == true){
        echo "Информация занесена в базу данных";
    }else{
        echo "Информация не занесена в базу данных";
    }
}

if (isset($_GET['red_id'])) {
    $sql = mysqli_query($connection, "SELECT `id`, `title`, `full_text`, `type`, `title2`, `intro_text`, `date_sor`, `date_sor2`, `date_sor3`, `date_sor4`, `time`, `time2`, `time3`, `time4`, `dis`, `dis2`, `dis3`, `dis4`, `zayavka`, `zayavka2`, `zayavka3`, `zayavka4`, `info`, `info2`, `info3`, `info4`, `start`, `start2`, `start3`, `start4`, `rezult`, `rezult2`, `rezult3`, `rezult4`, `full_text2`, `link1`, `link2`, `link3`, `link4`, `link5`, `link6`, `link7`, `link8`, `link9`, `link10`, `link11`, `link12`, `link13`, `link14`, `link15`, `link16`, `category_id` FROM `news` WHERE `id`={$_GET['red_id']}");
    $product = mysqli_fetch_array($sql);
}

?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="add_news.php">Добавить новость</a>
                <a href="../index.php">Вернуться на главную</a>
                <a href="clause.php">Статьи</a>
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
                    <h4 style="margin-top: 10px;">Короткий текст</h4>
                    <label>
                        <textarea type="text" name="intro_text" style="margin-top: 10px; width: 500px;"><?= isset($_GET['red_id']) ? $product['intro_text'] : ''; ?></textarea>
                    </label>
                </div>
            </div>
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
                    <p>Полный текст</p>
                    <label>
                        <textarea type="text" name="full_text" style="margin-top: 10px; width: 500px;" required><?= isset($_GET['red_id']) ? $product['full_text'] : ''; ?></textarea>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="info2 stat admin__panel d-flex">
                        <ul class="info d-flex">
                            <li class="info__item">
                                <h4 style="">Дата 1</h4>
                                <label>
                                    <input type="text" name="date_sor" value="<?= isset($_GET['red_id']) ? $product['date_sor'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4 style="">Время 1</h4>
                                <label>
                                    <input type="text" name="time" value="<?= isset($_GET['red_id']) ? $product['time'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4 style="">Дисциплина 1</h4>
                                <label>
                                    <input type="text" name="dis" value="<?= isset($_GET['red_id']) ? $product['dis'] : ''; ?>" style="">
                                </label>
                            </li>
                        </ul>
                        <ul class="info d-flex">
                            <li class="info__item">
                                <h4>Заявка 1</h4>
                                <label>

                                    <input type="text" name="zayavka" value="<?= isset($_GET['red_id']) ? $product['zayavka'] : ''; ?>" style="">
                                    <input type="text" name="link1" value="<?= isset($_GET['red_id']) ? $product['link1'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4>Информация 1</h4>
                                <label>
                                    <input type="text" name="info" value="<?= isset($_GET['red_id']) ? $product['info'] : ''; ?>" style="">
                                    <input type="text" name="link2" value="<?= isset($_GET['red_id']) ? $product['link2'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4>Старт 1</h4>
                                <label>
                                    <input type="text" name="start" value="<?= isset($_GET['red_id']) ? $product['start'] : ''; ?>" style="">
                                    <input type="text" name="link3" value="<?= isset($_GET['red_id']) ? $product['link3'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4>Результат 1</h4>
                                <label>
                                    <input type="text" name="rezult" value="<?= isset($_GET['red_id']) ? $product['rezult'] : ''; ?>" style="">
                                    <input type="text" name="link4" value="<?= isset($_GET['red_id']) ? $product['link4'] : ''; ?>" style="">
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="info2 admin__panel stat d-flex">
                        <ul class="info d-flex">
                            <li class="info__item">
                                <h4 style="">Дата 2</h4>
                                <label>
                                    <input type="text" name="date_sor2" value="<?= isset($_GET['red_id']) ? $product['date_sor2'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4 style="">Время 2</h4>
                                <label>
                                    <input type="text" name="time2" value="<?= isset($_GET['red_id']) ? $product['time2'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4 style="">Дисциплина 2</h4>
                                <label>
                                    <input type="text" name="dis2" value="<?= isset($_GET['red_id']) ? $product['dis2'] : ''; ?>" style="">
                                </label>
                            </li>
                        </ul>
                        <ul class="info d-flex">
                            <li class="info__item">
                                <h4>Заявка 2</h4>
                                <label>

                                    <input type="text" name="zayavka2" value="<?= isset($_GET['red_id']) ? $product['zayavka2'] : ''; ?>" style="">
                                    <input type="text" name="link5" value="<?= isset($_GET['red_id']) ? $product['link5'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4>Информация 2</h4>
                                <label>
                                    <input type="text" name="info2" value="<?= isset($_GET['red_id']) ? $product['info2'] : ''; ?>" style="">
                                    <input type="text" name="link6" value="<?= isset($_GET['red_id']) ? $product['link6'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4>Старт 2</h4>
                                <label>
                                    <input type="text" name="start2" value="<?= isset($_GET['red_id']) ? $product['start2'] : ''; ?>" style="">
                                    <input type="text" name="link7" value="<?= isset($_GET['red_id']) ? $product['link7'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4>Результат 2</h4>
                                <label>
                                    <input type="text" name="rezult2" value="<?= isset($_GET['red_id']) ? $product['rezult2'] : ''; ?>" style="">
                                    <input type="text" name="link8" value="<?= isset($_GET['red_id']) ? $product['link8'] : ''; ?>" style="">
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="info2 admin__panel stat d-flex">
                        <ul class="info d-flex">
                            <li class="info__item">
                                <h4 style="">Дата 3</h4>
                                <label>
                                    <input type="text" name="date_sor3" value="<?= isset($_GET['red_id']) ? $product['date_sor3'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4 style="">Время 3</h4>
                                <label>
                                    <input type="text" name="time3" value="<?= isset($_GET['red_id']) ? $product['time3'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4 style="">Дисциплина 3</h4>
                                <label>
                                    <input type="text" name="dis3" value="<?= isset($_GET['red_id']) ? $product['dis3'] : ''; ?>" style="">
                                </label>
                            </li>
                        </ul>
                        <ul class="info d-flex">
                            <li class="info__item">
                                <h4>Заявка 3</h4>
                                <label>

                                    <input type="text" name="zayavka3" value="<?= isset($_GET['red_id']) ? $product['zayavka3'] : ''; ?>" style="">
                                    <input type="text" name="link9" value="<?= isset($_GET['red_id']) ? $product['link9'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4>Информация 3</h4>
                                <label>
                                    <input type="text" name="info3" value="<?= isset($_GET['red_id']) ? $product['info3'] : ''; ?>" style="">
                                    <input type="text" name="link1011" value="<?= isset($_GET['red_id']) ? $product['link1011'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4>Старт 3</h4>
                                <label>
                                    <input type="text" name="start3" value="<?= isset($_GET['red_id']) ? $product['start3'] : ''; ?>" style="">
                                    <input type="text" name="link11" value="<?= isset($_GET['red_id']) ? $product['link11'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4>Результат 3</h4>
                                <label>
                                    <input type="text" name="rezult3" value="<?= isset($_GET['red_id']) ? $product['rezult3'] : ''; ?>" style="">
                                    <input type="text" name="link12" value="<?= isset($_GET['red_id']) ? $product['link12'] : ''; ?>" style="">
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="info2 admin__panel stat d-flex">
                        <ul class="info d-flex">
                            <li class="info__item">
                                <h4 style="">Дата 4</h4>
                                <label>
                                    <input type="text" name="date_sor4" value="<?= isset($_GET['red_id']) ? $product['date_sor4'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4 style="">Время 4</h4>
                                <label>
                                    <input type="text" name="time4" value="<?= isset($_GET['red_id']) ? $product['time4'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4 style="">Дисциплина 4</h4>
                                <label>
                                    <input type="text" name="dis4" value="<?= isset($_GET['red_id']) ? $product['dis4'] : ''; ?>" style="">
                                </label>
                            </li>
                        </ul>
                        <ul class="info d-flex">
                            <li class="info__item">
                                <h4>Заявка 4</h4>
                                <label>
                                    <input type="text" name="zayavka4" value="<?= isset($_GET['red_id']) ? $product['zayavka4'] : ''; ?>" style="">
                                    <input type="text" name="link13" value="<?= isset($_GET['red_id']) ? $product['link13'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4>Информация 4</h4>
                                <label>
                                    <input type="text" name="info4" value="<?= isset($_GET['red_id']) ? $product['info4'] : ''; ?>" style="">
                                    <input type="text" name="link14" value="<?= isset($_GET['red_id']) ? $product['link14'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4>Старт 4</h4>
                                <label>
                                    <input type="text" name="start4" value="<?= isset($_GET['red_id']) ? $product['start4'] : ''; ?>" style="">
                                    <input type="text" name="link15" value="<?= isset($_GET['red_id']) ? $product['link15'] : ''; ?>" style="">
                                </label>
                            </li>
                            <li class="info__item">
                                <h4>Результат 4</h4>
                                <label>
                                    <input type="text" name="rezult4" value="<?= isset($_GET['red_id']) ? $product['rezult4'] : ''; ?>" style="">
                                    <input type="text" name="link16" value="<?= isset($_GET['red_id']) ? $product['link16'] : ''; ?>" style="">
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 stat">
                    <h4>Второй заголовок</h4>
                    <label>
                        <input type="text" name="title2" value="<?= isset($_GET['red_id']) ? $product['title2'] : ''; ?>" style="margin-top: 10px; width: 500px;">
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 stat">
                    <h4>Второй полный текст</h4>
                    <label>
                        <textarea type="text" name="full_text2" style="margin-top: 10px; width: 500px;"><?= isset($_GET['red_id']) ? $product['full_text2'] : ''; ?></textarea>
                    </label>
                </div>
            </div>
            <input type="submit" value="Редактировать" class="btn stat" style="background-color: orange">
        </form>
</div>
</div>
        
    </div>
</section>
<?php mysqli_close($connection); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/js.js"></script>
</body>
</html>