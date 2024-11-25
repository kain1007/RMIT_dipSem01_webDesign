<?php
$title = "Change Records";
include('includes/head.php');
include('includes/nav.php');
require_once('config.php');
require_once('db_class.php');
$conn = new dbController(HOST,USER,PASS,DB);
$sql ="select id, tourismname, image from tourismvictoria";

$results = $conn->getAllRecord($sql);
?>
<table>
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Image</th>
	<th colspan="2">Make Changes</th>
</tr>
<?php

foreach($results as $row) {
echo "<tr>";
echo "<td> {$row['id']} </td>";
echo "<td> {$row['tourismname']} </td>";
echo "<td> <img class='thumb' src='{$row['image']}' alt='{$row['tourismname']}'> </td>";

echo "<td> <a class='link' href='update_form.php?id={$row['id']}'>Update</a> </td>";
echo "<td> <a class='link' href='delete_confirm.php?id={$row['id']}'>Delete</a> </td>";
echo "</tr>";
}
echo "</table>";
include('includes/footer.php');
?>






