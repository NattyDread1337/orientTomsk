<!DOCTYPE html>
<html lang="ru">
<head>
	<script>
		if (location.href == 'http://test/clause.php') {
  window.location.href = 'http://test/clause.php?page=1';
}
	</script>
	<?php
	$title = 'Статьи';
    require_once 'connection.php';
	require_once "functions/functions.php"; 
	require_once "blocks/head.php";
	$connection = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($connection));
mysqli_set_charset($connection, 'utf8');			
	?>
</head>
<body>
	<?php require_once "blocks/header.php" ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-4" id="stat">
					<h1>Статьи:</h1>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<?
					$per_page = 10;
					$page = 1;
					if (isset($_GET['page']))
					{
						$page = (int) $_GET['page'];
					}

					$total_count_q = mysqli_query($connection, "SELECT COUNT(`id`) AS `total_count` FROM `clause`");
					$total_count = mysqli_fetch_assoc($total_count_q);
					$total_count = $total_count['total_count'];

			 		$total_pages = ceil($total_count / $per_page); //lenght
			 		if($page <= 1 || $page > $total_pages) {
			 			$page = 1;
			 		}
					$offset = ($per_page * $page) - $per_page; //star


			 $clauses = mysqli_query($connection, "SELECT * FROM `clause` ORDER BY `id` DESC LIMIT $offset, $per_page");
			 $articles_exist = true;
			 if(mysqli_num_rows($clauses) <= 0)
			 {
			 	$articles_exist = false;
			 }

			while(($clause = mysqli_fetch_assoc($clauses))) {;$str = mb_strlen($clause["full_text"]);
			if ($str>417) {
				$a = ' ...';
			}
			else {
				$a = '';
			}
			?>
			<div class="row clause">
				<div class="col-lg-4">
					<div class="foto__clause">
						<img src="clause/<?=$clause['picture']?>">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="text__clause">
						<h3><?=$clause["title"]?></h3>
						<h2><?=date('d.m.Y', $clause["timeStamp"])?></h2>
						<p class="text__perem"><?=mb_substr($clause["full_text"], 0, 419, 'utf-8'). $a;?></p>
						<?php
						if ($str > 417) {
							echo '<a href="/clause_article.php?id='.$clause["id"].'">
						<button type="button" class="btn btn-link" id="elem">ПОДРОБНЕЕ</button>
						</a>';
						}
						?>
						
					</div>
				</div>
			</div>
		<? } ?>
		</div>
	
		<div class="container">
			<div class="row">
			<div class="col-lg-4 paginator">
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
						echo '<a href="/clause.php?page='.($page - 1).'">
						<div class="arrow-1">
						<div class="arrow-1-top"></div>
						<div class="arrow-1-bottom"></div>
						</div>
						</a>';
					}
					Pagination_clause($total_pages, $page);
					if ($page < $total_pages)
					{
						echo '<a href="/clause.php?page='.($page + 1).'">
						<div class="arrow-2">
						<div class="arrow-2-top"></div>
						<div class="arrow-2-bottom"></div>
						</div><a>';
					}
					echo '</div>';
				}
                mysqli_close($connection);
				?>
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