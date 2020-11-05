<!DOCTYPE html>
<html>
<head>
	<?php
	require_once "functions/functions.php";
	$title_up = get_clause_by_id($_GET["id"]);
	$title = $title_up["title"];
	require_once "blocks/head.php"; 
	$clause_id = $_GET['id'];
	if (!is_numeric($clause_id)) exit();
	$clauses = get_clause_by_id($clause_id);	
	?>
</head>
<body>
<?php require_once "blocks/header.php"?>
<section>
	<div class="container">
		<div class="row">
				<div class="col-lg-12 stat title1">
					<h1><?=$clauses["title"]?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<img src="clause/<?=$clauses['picture']?>" class="fotonews1 stat">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 stat">
					<p><?=$clauses["full_text"]?></p>
				</div>
			</div>
	</div>
</section>
<?php require_once "blocks/footer.php" ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>	
</body>
</html>