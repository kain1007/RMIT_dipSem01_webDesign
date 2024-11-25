<?php
$id= $_GET['id'];
$title = "Update Form";
include('includes/head.php');
include('includes/nav.php');

require_once('config.php');
require_once('db_class.php');
$conn = new dbController(HOST,USER,PASS,DB);
$sql ="select * from tourismvictoria where id = $id";
$results = $conn->getOneRecord($sql);
?>
<form class="main-form" method="post" action="update.php">
<h3>Update Tourism Details: <?php echo $results['tourismname']?> </h3>
<input type="hidden" name="id" value=" <?php echo $results['id']?> ">
<label>Location</label>
<input type="text" name="location" value=" <?php echo $results['location']?>">
<label>Description</label>
<textarea cols="50" rows="7" name="description"><?php echo $results['description']?> </textarea>
<label>Price AUD$:</label>
<input type="double" name="price" value=" <?php echo $results['price']?>">
<input type="submit" name="update" value="Update">
</form>

<?php
include('includes/footer.php');
?>