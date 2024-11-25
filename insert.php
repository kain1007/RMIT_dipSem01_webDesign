<?php
$title = "Confirmation";
include('includes/head.php');
include('includes/nav.php');
require_once('config.php');
require_once('db_class.php');
$conn = new dbController(HOST,USER,PASS,DB);

$tourismname = $_POST['tourismname'];
$location = $_POST['location'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = 'image/'.$_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];

$sql = "insert into tourismvictoria(tourismname,location,description,price,image)
		values(?,?,?,?,?)";

if($conn->prepareQuery($sql,$tourismname,$location,$description,$price,$image)) {
	echo "<p>New record added to database</p>";
	$conn->uploadImage($temp,$image);
}
include('includes/footer.php');
?>