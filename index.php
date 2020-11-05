
<!DOCTYPE html>
<html lang="ru">
<head>
	<script>
		if (location.href == 'http://test/index.php') {
  window.location.href = 'http://test/index.php?page=1';
}
	</script>
	<?php
	$title = 'Ориентирование на берегах Томи';
    require_once 'connection.php';
	require_once "functions/functions.php"; 
	require_once "blocks/head.php";
	$connection = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($connection));
mysqli_set_charset($connection, 'utf8');
	$news = getNews (7, $id);
	?>
</head>
<body>
	<?php require_once "blocks/header.php" ?>
	<section id="banner" class="banner">

	</section>
	<section id="test" class="test">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 d-flex">
					<nav id="filtr" >
						<ul class="filtr d-flex justify-content-center">

							<li class="filtr__item filtr__item_cat">
								<a href="/index.php?page=1#test">ВСЕ</a>
							</li>
							<?php $categories = get_categories($mysqli); ?>

							<?php foreach($categories as $category): ?>
								<li class="filtr__item filtr__item_cat">
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
				<div class="col-lg-12 big">
					<?php		
					if($_GET['page'] == 1) {   
						$per_page = 7;
					} else {
						$per_page = 6;
					}

					$page = 1;
					if (isset($_GET['page']))
					{
						$page = (int) $_GET['page'];
					}

					$total_count_q = mysqli_query($connection, "SELECT COUNT(`id`) AS `total_count` FROM `news`");
					$total_count = mysqli_fetch_assoc($total_count_q);
					$total_count = $total_count['total_count'];

			 $total_pages = ceil($total_count / $per_page); //lenght

			 if($_GET['page'] >= 2) {
				$offset = (($per_page * $page) - $per_page) + 1; //start
			 } else {
				$offset = ($per_page * $page) - $per_page; //start
			 }


			 $articles = mysqli_query($connection, "SELECT * FROM `news` ORDER BY `timeStamp` DESC LIMIT $offset, $per_page");
			 $articles_exist = true;
			 if(mysqli_num_rows($articles) <= 0)
			 {
			 	$articles_exist = false;
			 }
			 ?>
			 <?php
			 if($_GET['page'] == 1) {

			 $article = mysqli_fetch_assoc($articles);
			 $categ = $article['category_id'];
	$timepost1 = $article['date_sor'];
	$timepost2 = $article['date_sor2'];
	$timepost3 = $article['date_sor3'];
	$timepost4 = $article['date_sor4']; 
             ?>
			<img src="uploads/<?=$article['picture']?>" class="fotonews">
			 <div class="textnews">
			 	<div class="allnews">
			 		<h2><?=$article["type"]?>&nbsp;&nbsp;&nbsp;</h2><h2>/&nbsp;&nbsp;&nbsp;</h2><h2><?=date('d.m.Y', $article["timeStamp"])?></h2>
			 		<h1><?=$article["title"]?></h1>
			 		<p><?=$article["intro_text"]?></p>
			 		<div class="del" data-attr="<?=$categ;?>">
			 			<div class="del1" data-attr="<?=$timepost1;?>">
			 			<div class="info">
			 				<ul class="info d-flex" style="margin-top: 10px;">
			 					<li class="info__item">
			 						<h4><?=$article["date_sor"]?></h4>
			 					</li>
			 					<li class="info__item">
			 						<h4><?=$article["time"]?></h4>
			 					</li>
			 					<li class="info__item">
			 						<h4><?=$article["dis"]?></h4>
			 					</li>
			 				</ul>
			 			</div>
			 			<div class="info2">
			 				<ul class="info2 d-flex">
			 					<li class="info__item">
			 						<a href="<?=$article["link1"]?>" target="_blank"><?=$article["zayavka"]?></a>
			 					</li>
			 					<li class="info__item">
			 						<a href="<?=$article["link2"]?>" target="_blank"><?=$article["info"]?></a>
			 					</li>
			 					<li class="info__item">
			 						<a href="<?=$article["link3"]?>" target="_blank"><?=$article["start"]?></a>
			 					</li>
			 					<li class="info__item">
			 						<a href="<?=$article["link4"]?>" target="_blank"><?=$article["rezult"]?></a>
			 					</li>
			 				</ul>
			 			</div>
			 		</div>
			 		<div class="del2" data-attr="<?=$timepost2;?>">
			 			<div class="info ">
			 				<ul class="info d-flex">
			 					<li class="info__item">
			 						<h4><?=$article["date_sor2"]?></h4>
			 					</li>
			 					<li class="info__item">
			 						<h4><?=$article["time2"]?></h4>
			 					</li>
			 					<li class="info__item">
			 						<h4><?=$article["dis2"]?></h4>
			 					</li>
			 				</ul>
			 			</div>
			 			<div class="info2 ">
			 				<ul class="info2 d-flex">
			 					<li class="info__item">
			 						<a href="<?=$article["link5"]?>" target="_blank"><?=$article["zayavka2"]?></a>
			 					</li>
			 					<li class="info__item">
			 						<a href="<?=$article["link6"]?>" target="_blank"><?=$article["info2"]?></a>
			 					</li>
			 					<li class="info__item">
			 						<a href="<?=$article["link7"]?>" target="_blank"><?=$article["start2"]?></a>
			 					</li>
			 					<li class="info__item">
			 						<a href="<?=$article["link8"]?>" target="_blank"><?=$article["rezult2"]?></a>
			 					</li>
			 				</ul>
			 			</div>
			 		</div>
			 		<div class="del3" data-attr="<?=$timepost3;?>">
			 			<div class="info ">
			 				<ul class="info d-flex">
			 					<li class="info__item">
			 						<h4><?=$article["date_sor3"]?></h4>
			 					</li>
			 					<li class="info__item">
			 						<h4><?=$article["time3"]?></h4>
			 					</li>
			 					<li class="info__item">
			 						<h4><?=$article["dis3"]?></h4>
			 					</li>
			 				</ul>
			 			</div>
			 			<div class="info2 ">
			 				<ul class="info2 d-flex">
			 					<li class="info__item">
			 						<a href="<?=$article["link9"]?>" target="_blank"><?=$article["zayavka3"]?></a>
			 					</li>
			 					<li class="info__item">
			 						<a href="<?=$article["link10"]?>" target="_blank"><?=$article["info3"]?></a>
			 					</li>
			 					<li class="info__item">
			 						<a href="<?=$article["link11"]?>" target="_blank"><?=$article["start3"]?></a>
			 					</li>
			 					<li class="info__item">
			 						<a href="<?=$article["link12"]?>" target="_blank"><?=$article["rezult3"]?></a>
			 					</li>
			 				</ul>
			 			</div>
			 		</div>
			 		<div class="del4" data-attr="<?=$timepost4;?>">
			 			<div class="info ">
			 				<ul class="info d-flex">
			 					<li class="info__item">
			 						<h4><?=$article["date_sor4"]?></h4>
			 					</li>
			 					<li class="info__item">
			 						<h4><?=$article["time4"]?></h4>
			 					</li>
			 					<li class="info__item">
			 						<h4><?=$article["dis4"]?></h4>
			 					</li>
			 				</ul>
			 			</div>
			 			<div class="info2 ">
			 				<ul class="info2 d-flex">
			 					<li class="info__item">
			 						<a href="<?=$article["link13"]?>" target="_blank"><?=$article["zayavka4"]?></a>
			 					</li>
			 					<li class="info__item">
			 						<a href="<?=$article["link14"]?>" target="_blank"><?=$article["info4"]?></a>
			 					</li>
			 					<li class="info__item">
			 						<a href="<?=$article["link15"]?>" target="_blank"><?=$article["start4"]?></a>
			 					</li>
			 					<li class="info__item">
			 						<a href="<?=$article["link16"]?>" target="_blank"><?=$article["rezult4"]?></a>
			 					</li>
			 				</ul>
			 			</div>
			 		</div>
			 		</div>
			 		<a href="\article.php?id=<?=$article['id']?>">
			 			<button type="button" class="btn btn-link">ПОДРОБНЕЕ</button>
			 		</a>
			 	</div>
			 </div>
			</div>

			 <? } ?>
		</div>
	</div>
</section>
<section>
	<div class="container">

		<div class="row">
			<?
			while( ($article = mysqli_fetch_assoc($articles))) {;?>
				<div class="col-lg-6 newsob">
					<img src="uploads/<?=$article['picture']?>" class="news">
					<h2><?=$article["type"]?>  /   <?=date('d.m.Y', $article["timeStamp"])?></h2>
					<h1><?=$article["title"]?></h1>
					<a href="\article.php?id=<?=$article['id']?>">
						<button type="button" class="btn btn-link">ПОДРОБНЕЕ</button>
					</a>
				</div>
			<? } ?>
		</div>

		<div class="row">
			<div class="col-lg-8"></div>
			<div class="col-lg-4">
				<?php
				if ($articles_exist == true)
				{	
					if(isset($_GET['page'])) {}
else {
$_GET['page'] = 1;
}
					echo '<div class="pag d-flex">';
					if($page > 1)
					{
						echo '<a href="/index.php?page='.($page - 1).'#test">
						<div class="arrow-1">
						<div class="arrow-1-top"></div>
						<div class="arrow-1-bottom"></div>
						</div>
						</a>';
					}
					Pagination($total_pages, $page);
					if ($page < $total_pages)
					{
						echo '<a href="/index.php?page='.($page + 1).'#test">
						<div class="arrow-2">
						<div class="arrow-2-top"></div>
						<div class="arrow-2-bottom"></div>
						</div><a>';
					}
					echo '</div>';
				}


                
				?>
			</div>
		</div>

	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="separator1">
				</div>
			</div>
		</div>
		
	</div>
</section>
<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
<?php require_once "blocks/footer.php" ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>	
</body>
</html>