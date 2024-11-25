<?php
$id= $_GET['id'];
$title = "Delete Confirmation";
include('includes/head.php');
include('includes/nav.php');

require_once('config.php');
require_once('db_class.php');
$conn = new dbController(HOST,USER,PASS,DB);
$sql ="select * from tourismvictoria where id = $id";
$results = $conn->getOneRecord($sql);

echo "<div class='details'>";
	echo "<h2>Are you sure you want to delete this record?</h2>";
	echo "<h3>{$results['tourismname']}</h3>";
	echo "<p>{$results['location']}</p>";
	echo "<p>{$results['description']}</p>";
	echo "<p>{$results['price']}</p>";
	echo "<img src='{$results['image']}'>";
	echo "<p class='confirm'>";
	echo "<td> <a href='modify_table.php'>Cancel</a> </td>";
	echo "<td> <a href='delete.php?id={$results['id']}&&image={$results['image']}'>Delete</a> </td>";
	echo "</p>";
echo '</div>';
include('includes/footer.php');
?>