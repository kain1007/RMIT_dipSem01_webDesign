<?php
$search =$_GET['search'];
$title = "Search";
include('includes/head.php');
include('includes/nav.php');
require_once('config.php');
require_once('db_class.php');
$conn = new dbController(HOST,USER,PASS,DB);
$search = "%$search%";
$sql = "select * from tourismvictoria WHERE description LIKE ?";
$results = $conn->prepareSearch($sql,$search);
echo "<div id='search'>";
	if($results){
		foreach($results as $row){
			echo "<div class='details'>";
				echo "<h3>{$row['tourismname']}</h3>";
				echo "<p>{$row['location']}</p>";
				echo "<p>{$row['description']}</p>";
				echo "<p>{$row['price']}AUD$</p>";
				echo "<img src='{$row['image']}' alt='{$row['location']}'>";
			echo '</div>';
	}
	}else {
		echo "<p>No Results</p>";
	}
echo '</div>';
include('includes/footer.php');
?>