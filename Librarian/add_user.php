<?php
	$name = $email = $password_user = "";
	$emailerr = "";
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$name = test_input($_POST['fname']);
		//$lname = test_input($lname);
		$email = test_input($_POST['email']);
		/*if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "Invalid email-format";
		}*/
		$password_user = test_input($_POST['password']);
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
	$query = "INSERT INTO account (email, password, name, nr_books, library) VALUES (?, ?, ?, 0, FALSE)";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("sss", $a, $b, $c);
	$a = $email;
	$b = $password_user;
	$c = $name;
	$stmt->execute();
	$stmt->close();
	header('location: librarian.php');
	$conn->close();
?>