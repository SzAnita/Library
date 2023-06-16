<?php
	function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
	}
	$isbn[] = array();
	$length = 0;
	foreach ($_GET['isbn'] as $value) {
	 	$isbn[$length] = test_input($value);
	 	$length = $length + 1;
	}
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mylibrary";
	$conn =  new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) { 
		die("Connection failed: ".$conn->connect_error);
	} else {
		echo "Connected succesfully<br>";
	}
	$sql = "DELETE FROM books WHERE isbn = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s", $a);
	foreach ($isbn as $value) {
		$a = $value;
		$stmt->execute();
	}
	$stmt->close();
	$conn->close();
?>