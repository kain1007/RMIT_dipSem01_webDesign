<?php
$id= $_GET['id'];
$title = "Tourism Details";
include('includes/head.php');
include('includes/nav.php');

require_once('config.php');
require_once('db_class.php');
$conn = new dbController(HOST,USER,PASS,DB);
$sql ="select * from tourismvictoria WHERE id = $id";
$results = $conn->getOneRecord($sql);
echo "<div class='details'>";
	echo "<h3>{$results['tourismname']}</h3>";
	echo "<p>{$results['location']}</p>";
	echo "<p>{$results['description']}</p>";
	echo "<p>{$results['price']}AUD$</p>";
	echo "<img src='{$results['image']}' alt='{$results['location']}'>";
echo '</div>';
include('includes/footer.php');
?>