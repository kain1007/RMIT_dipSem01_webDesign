<?php
$title = "Home Page";
include('includes/head.php');
include('includes/nav.php');
require_once('config.php');
require_once('db_class.php');
$conn = new dbController(HOST,USER,PASS,DB);
$sql ="select id, tourismname, image from tourismvictoria";

$results = $conn->getAllRecord($sql);

echo "<div class='display'>";
foreach($results as $row){
	echo '<section>';
	echo "<h3>{$row['tourismname']}</h3>";
	echo "<a href='details.php?id={$row['id']}'><img src='
	{$row['image']}' alt='{$row['tourismname']}'></a>";
	echo '</section>';
}
echo '</div>';
include('includes/footer.php');
?>