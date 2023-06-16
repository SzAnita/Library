<?php
	$isbn = $aut = $subtit = $alltit = $year = "";
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	if($_SERVER['REQUEST_METHOD'] == "GET") {
		$isbn = test_input($_GET['isbn']);
		$aut = test_input($_GET['author']);
		$subtit = test_input($_GET['subtitle']);
		$alltit = test_input($_GET['fulltitle']);
		$year = test_input($_GET['year']);
		$lang = test_input($_GET['lang']);
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
	$query = "INSERT INTO books (isbn, author, main_title, full_title, pub_year, language) VALUES (?, ?, ?, ?, ?, ?)";
	
	$stmt = $conn->prepare($query);
	$stmt->bind_param("ssssis", $a, $b, $c, $d, $e, $f);
	$a = $isbn;
	$b = $aut;
	$c = $subtit;
	$d = $alltit;
	$e = $year;
	$f = $lang;

	$stmt->execute();
	$stmt->close();
	header('location: librarian.php#add_book');
	$conn->close();
?>