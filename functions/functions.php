<?php 
$mysqli = false;
function connectDB () {
	global $mysqli;
	$mysqli = new mysqli ("localhost", "root", "", "orient");
	mysqli_set_charset($mysqli, 'utf8');
	$mysqli->query("SET NAMES 'utf-8'");
}
function closeDB (){
	global $mysqli;
	$mysqli->close();
}
function getNews ($limit, $id) {
	global $mysqli;
	connectDB();
	if($id)
		$where = "WHERE `id` = ".$id; 
	$result = $mysqli->query("SELECT * FROM `news`$where ORDER BY `id`");
	closeDB();
	if(!$id)
		return resultToArray ($result);
	else 
		return $result->fetch_assoc();
}
function resultToArray ($result) {
	$array = array();
	while (($row = $result->fetch_assoc()) != false) 
		$array[] = $row;
	return $array;
}

function get_categories($mysqli) {
	global $mysqli;
	connectDB();
	$sql = "SELECT * FROM `categories`";
	$result = mysqli_query($mysqli, $sql);
	$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
	closeDB();
	return $categories;
}

function get_post_by_id($post_id) {
	global $mysqli;
	connectDB();
	$sql = "SELECT * FROM news WHERE id = ".$post_id;
	$result = mysqli_query($mysqli, $sql);
	$post = mysqli_fetch_assoc($result);
	closeDB();
	return $post;
}

function get_clause_by_id($clause_id) {
	global $mysqli;
	connectDB();
	$sql = "SELECT * FROM clause WHERE id = ".$clause_id;
	$result = mysqli_query($mysqli, $sql);
	$clauses = mysqli_fetch_assoc($result);
	closeDB();
	return $clauses;
}

function get_posts_by_category($category_id) {
	global $mysqli;
	connectDB();
	$category_id = mysqli_real_escape_string($mysqli, $category_id);
	$sql = 'SELECT * FROM news WHERE category_id = "'.$category_id.'" ORDER BY `timeStamp` DESC ';
	$result = mysqli_query($mysqli, $sql);
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	closeDB();
	return $posts;
}

function get_category_title($category_id) {
	global $mysqli;
	connectDB();
	$category_id = mysqli_real_escape_string($mysqli, $category_id);
	$sql = 'SELECT category FROM categories WHERE id = "'.$category_id.'"';
	$result = mysqli_query($mysqli, $sql);
	$category = mysqli_fetch_assoc($result);
	closeDB();
	return $category['category'];
}

function Pagination($total_pages, $page){
if($total_pages < 5) foreach(range(1, $total_pages) as $p){ echo '<a href="index.php?page='.$p.'#test">';

		if($p == $_GET['page']) {
			echo '<li class="kvad kvad_active">'.$p.'</li>';
		} else {
			echo '<li class="kvad kvad">'.$p.'</li>';
		}

	echo '</a>';
};
}

function Pagination_clause($total_pages, $page){
if($total_pages < 5) foreach(range(1, $total_pages) as $p){ echo '<a href="clause.php?page='.$p.'">';

		if($p == $_GET['page']) {
			echo '<li class="kvad kvad_active">'.$p.'</li>';
		} else {
			echo '<li class="kvad kvad">'.$p.'</li>';
		}

	echo '</a>';
};
}

?>