<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
    require_once 'connection.php';
	require_once "functions/functions.php";
	$connection = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($connection));
mysqli_set_charset($connection, 'utf8');
	$articles = mysqli_query($connection, 'SELECT * FROM `news` ORDER BY `timeStamp` DESC');
	$news = getNews(7, $_GET["id"]); 
	$title = get_category_title($_GET['id']);
	require_once "blocks/head.php"; 
	$post_id = $_GET['id'];
	if (!is_numeric($post_id)) exit();
	$category_id = $_GET['id'];
	$posts = get_posts_by_category($category_id);
	$article = mysqli_fetch_assoc($articles);
	$show_img = base64_encode($article['img_upload']);

	?>
</head>
<body>
	<?php require_once "blocks/header.php"?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 d-flex">
					<nav id="filtr" style="margin-top: 100px;">
						<ul class="filtr d-flex justify-content-center">
							<li class="filtr__item">
								<a href="/index.php?page=1#test">ВСЕ</a>
							</li>
							<?php $categories = get_categories(mysqli); ?>
							
							<?php foreach($categories as $category): ?>
								<li class="filtr__item">
									<a href="/category.php?id=<?=$category["id"]?>"><?=$category["category"]?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="separator">
					</div>
				</div>
			</div>
			<div class="row">
				<?php foreach($posts as $post):
					?>
					<div class="col-lg-6 newsob">
						<img src="uploads/<?=$post['picture']?>" class="news">
						<h2><?=$post["type"]?>  /   <?=date('d.m.Y', $post["timeStamp"])?></h2>
						<h1><?=$post["title"]?></h1>
						<a href="\article.php?id=<?=$post['id']?>">
							<button type="button" class="btn btn-link">ПОДРОБНЕЕ</button>
						</a>
					</div>
				<?php endforeach; ?>
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