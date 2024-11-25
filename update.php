<?php
$title = "Update Confirmation";
include('includes/head.php');
include('includes/nav.php');

require_once('config.php');
require_once('db_class.php');
$conn = new dbController(HOST,USER,PASS,DB);
$id = $_POST['id'];
$description = $_POST['description'];
$location = $_POST['location'];
$price = $_POST['price'];
$sql = "update tourismvictoria set location=?, description=?, price=? where id=?";
$update = $conn->updateRecord($sql,$location,$description,$price,$id);
	if($update) {
		echo "<p>Record Updated</p>";
	}
	else {
		echo "<p>Record Not Updated</p>";
	}
include('includes/footer.php');
?>