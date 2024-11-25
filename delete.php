<?php
$id= $_GET['id'];
$image = $_GET['image'];
$title = "Delete Record";
include('includes/head.php');
include('includes/nav.php');
require_once('config.php');
require_once('db_class.php');
$conn = new dbController(HOST,USER,PASS,DB);
$sql="delete from tourismvictoria where id = ?";

if($conn->deleteRecord($sql,$id)) {
	echo "<p>Record deleted</p>";
	if(file_exists($image)) {
	unlink($image);
	}
}
else {
	echo "<p>Record NOT deleted</p>";
}

include('includes/footer.php');
?>