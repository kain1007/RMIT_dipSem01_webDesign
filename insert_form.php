<?php
	$title = "Insert Form";
	include('includes/head.php');
	include('includes/nav.php');
?>
<form method="post" action="insert.php" enctype="multipart/form-data" class="main-form">
	<h3>Insert a new Tourism in Victoria:</h3>
		<label for="tourismname">Tourism Name:</label>
		<input type="text" name="tourismname" id="tourismname" />
		
		<label for="location">location</label>
		<input type="text" name="location" id="location" />
		
		<label for="desc">Description</label>
		<textarea cols="50" rows="5" name="description" id="desc"></textarea>
		
		<label for="price">Price AUD$:</label>
		<input type="double" name="price" id="price"/>
		
		<label for="image">Select an Image:</label>
		<input type="file" name="image" id="image"/>
		
		<input type="submit" name="submit" value="Insert" />
</form>
<?php
	include('includes/footer.php');
?>








