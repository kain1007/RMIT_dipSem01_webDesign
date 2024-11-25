<?php
class dbController {
private $conn;

public function __construct($host,$user,$pass,$db) {
		$this->conn = new mysqli(
			$this->host = $host,
			$this->user = $user,
			$this->pass = $pass,
			$this->db = $db
		);
		
		if($this->conn->connect_error) {
		exit('Connection failed');
		}
		/*
		else {
		echo 'Successfully connected to the database';
		}
		*/
	return $this->conn;

}

public function executeQuery($sql)  {
	$this->conn->query($sql);
	if($this->conn->error) {
		exit($this->conn->error);
		//$this->logError($this->conn->error);
	}
	else {
		return true;
	}
}

public function uploadImage($temp,$dest) {

	if(move_uploaded_file($temp,$dest)) {
		echo '<p>Image moved to folder</p>';
	}
	else {
		echo '<p>Image not moved to folder</p>';
	}
}

private function logError($error) {
	error_log("SQL Error: $error".PHP_EOL,3,"my-errors.log");
	exit("OOPs something went wrong");
}

public function cleanUp($value) {
	$value = trim($value);
	$value = htmlentities($value);
	$value = $this->conn->real-escape-string($value);
	return $value;
	//must return value
}

public function prepareQuery($sql,$tourismname,$location,$description,$price,$image) {
	$stmt = $this->conn->prepare($sql);
	if(!$stmt) {
		exit ("Prepare failes:".$this->conn->error);
	}
	$stmt->bind_param("sssds",$tourismname,$location,$description,$price,$image);
	$stmt->execute();
	if($stmt->affected_rows) {
		return true;
	}
	else {
		return false;
	}
}

public function getOneRecord($sql) {
$results = $this->conn->query($sql);
	if($this->conn->error) {
		exit($this->conn->error);
	}
$row = $results->fetch_assoc();
	return $row;
}

public function getAllRecord($sql) {
$results = $this->conn->query($sql);
	if($this->conn->error) {
		$this->logError($this->conn->error);
	}
	while($row = $results->fetch_assoc()) {
		$resultset[] = $row;
	}
	return $resultset;
}

public function prepareSearch($sql,$search) {
	$stmt = $this->conn->prepare($sql);
	if(!$stmt) {
		exit ("prepare failed:".$this->conn->error);
	}
	$stmt->bind_param("s",$search);
	$stmt->execute();
	$result = $stmt->get_result();
	$resultset = $result->fetch_all(MYSQLI_ASSOC);
	return $resultset;
}

public function deleteRecord($sql,$id) {

$stmt = $this->conn->prepare($sql);
	if(!$stmt) {
		exit('Query Failed: '.$this->conn->error);
	}
$stmt->bind_param("i",$id);
$stmt->execute();
	if($stmt->affected_rows) {
		return true;
	}
	else {
		return true;
	}
}

public function updateRecord($sql,$location,$description,$price,$id) {
	$stmt = $this->conn->prepare($sql);
	if(!$stmt) {
		exit("Prepare failed: ".$this->conn->error);
	}
	$stmt->bind_param("ssdi",$location,$description,$price,$id);
	$stmt->execute();
	if($stmt->affected_rows) {
		return true;
	}
	else {
		return false;
	}
}
}
?>




