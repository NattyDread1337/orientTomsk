<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
    require_once 'connection.php';
	require_once "functions/functions.php";
	$connection = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($connection));
mysqli_set_charset($connection, 'utf8');
	$articles = mysqli_query($connection, 'SELECT * FROM `news` ORDER BY `timeStamp` DESC ');
	$news = getNews(7, $_GET["id"]); 
	$title = $news["title"];
	require_once "blocks/head.php"; 
	$post_id = $_GET['id'];
	if (!is_numeric($post_id)) exit();
	$post = get_post_by_id($post_id);
	
	$categ = $post['category_id'];
	$timepost1 = $post['date_sor'];
	$timepost2 = $post['date_sor2'];
	$timepost3 = $post['date_sor3'];
	$timepost4 = $post['date_sor4'];
	?>
	
</head>

<body>
	<?php require_once "blocks/header.php"?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 stat title1">
					<h1><?=$post["title"]?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<img src="uploads/<?=$post['picture']?>" class="fotonews1 stat">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 stat">
					<p><?=$post["full_text"]?></p>
				</div>
			</div>
			<div class="row del" data-attr="<?=$categ;?>">
				<div class="col-lg-12 sorev">
					<div class="info2 stat d-flex del1" data-attr="<?=$timepost1;?>">
						<div class="info_article">
								<ul class="info d-flex">
									<li class="info__item info__item_article">
										<h4><?=$post["date_sor"]?></h4>
									</li>
									<li class="info__item info__item_article">
										<h4><?=$post["time"]?></h4>
									</li>
									<li class="info__item info__item_article">
										<h4><?=$post["dis"]?></h4>
									</li>
								</ul>
							</div>
							<div class="info2_article">
								<ul class="info d-flex">
									<li class="info__item info__item_article">
										<a href="<?=$post["link1"]?>" target="_blank"><?=$post["zayavka"]?></a>
									</li>
									<li class="info__item info__item_article">
										<a href="<?=$post["link2"]?>" target="_blank"><?=$post["info"]?></a>
									</li>
									<li class="info__item info__item_article">
										<a href="<?=$post["link3"]?>" target="_blank"><?=$post["start"]?></a>
									</li>
									<li class="info__item info__item_article">
										<a href="<?=$post["link4"]?>" target="_blank"><?=$post["rezult"]?></a>
									</li>
								</ul>
							</div>
							</div>
							<div class="info2 d-flex stat del2" data-attr="<?=$timepost2;?>">
								<div class="info_article">
								<ul class="info d-flex">
									<li class="info__item info__item_article">
										<h4><?=$post["date_sor2"]?></h4>
									</li>
									<li class="info__item info__item_article">
										<h4><?=$post["time2"]?></h4>
									</li>
									<li class="info__item info__item_article">
										<h4><?=$post["dis2"]?></h4>
									</li>
								</ul>
							</div>
							<div class="info2_article">
								<ul class="info d-flex">
									<li class="info__item info__item_article">
										<a href="<?=$post["link5"]?>" target="_blank"><?=$post["zayavka2"]?></a>
									</li>
									<li class="info__item info__item_article">
										<a href="<?=$post["link6"]?>" target="_blank"><?=$post["info2"]?></a>
									</li>
									<li class="info__item info__item_article">
										<a href="<?=$post["link7"]?>" target="_blank"><?=$post["start2"]?></a>
									</li>
									<li class="info__item info__item_article">
										<a href="<?=$post["link8"]?>" target="_blank"><?=$post["rezult2"]?></a>
									</li>
								</ul>
							</div>
							</div>
							<div class="info2 d-flex stat del3" data-attr="<?=$timepost3;?>">
								<div class="info_article">
								<ul class="info d-flex">
									<li class="info__item info__item_article">
										<h4><?=$post["date_sor3"]?></h4>
									</li>
									<li class="info__item info__item_article">
										<h4><?=$post["time3"]?></h4>
									</li>
									<li class="info__item info__item_article">
										<h4><?=$post["dis3"]?></h4>
									</li>
								</ul>
								</div>
								<div class="info2_article">
								<ul class="info3 d-flex info__item_article">
									<li class="info__item">
										<a href="<?=$post["link9"]?>" target="_blank"><?=$post["zayavka3"]?></a>
									</li>
									<li class="info__item info__item_article">
										<a href="<?=$post["link10"]?>" target="_blank"><?=$post["info3"]?></a>
									</li>
									<li class="info__item info__item_article">
										<a href="<?=$post["link11"]?>" target="_blank"><?=$post["start3"]?></a>
									</li>
									<li class="info__item info__item_article">
										<a href="<?=$post["link12"]?>" target="_blank"><?=$post["rezult3"]?></a>
									</li>
								</ul>
							</div>
							</div>
							<div class="info2 d-flex stat del4" data-attr="<?=$timepost4;?>">
								<div class="info_article">
								<ul class="info d-flex">
									<li class="info__item info__item_article">
										<h4><?=$post["date_sor4"]?></h4>
									</li>
									<li class="info__item info__item_article">
										<h4><?=$post["time4"]?></h4>
									</li>
									<li class="info__item info__item_article">
										<h4><?=$post["dis4"]?></h4>
									</li>
								</ul>
							</div>
							<div class="info2_article">
								<ul class="info3 d-flex">
									<li class="info__item info__item_article">
										<a href="<?=$post["link13"]?>" target="_blank"><?=$post["zayavka4"]?></a>
									</li>
									<li class="info__item info__item_article">
										<a href="<?=$post["link14"]?>" target="_blank"><?=$post["info4"]?></a>
									</li>
									<li class="info__item info__item_article">
										<a href="<?=$post["link15"]?>" target="_blank"><?=$post["start4"]?></a>
									</li>
									<li class="info__item info__item_article">
										<a href="<?=$post["link16"]?>" target="_blank"><?=$post["rezult4"]?></a>
									</li>
								</ul>
							</div>
							</div>
						</div>
			</div>
			<div class="row">
				<div class="col-lg-4 stat title2">
					<h1><?=$post["title2"]?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 stat">
					<p><?=$post["full_text2"]?></p>
				</div>
			</div>
		</div>
	</section>
	<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="separator1 separator1_article">
				</div>
			</div>
		</div>
		
	</div>
</section>
    <?php mysqli_close($connection); ?>
	<?php require_once "blocks/footer.php" ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>	

</body>
</html>