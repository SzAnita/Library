<?php
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
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
	$isbn[] = array();
	$length = 0;
	foreach ($_POST['isbn'] as $value) {
	 	$isbn[$length] = test_input($value);
	 	$length = $length + 1;
	} 
	$email = test_input($_POST['email']);
	//Update number of books member has borrowed
	$sql = "UPDATE account SET nr_books = nr_books-'$length' WHERE email = '$email'";
	$conn->query($sql);
	$sql = "SELECT isbn, return_date FROM returned WHERE returned.isbn = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s", $a);
	$books[] = array();
	$index = 0;
	foreach ($isbn as $value) {
		$a = $value;
		$stmt->execute();
		$result = $stmt->get_result();
		if($result->num_rows == 0) {
			$books[$index] = 0;
		} else {
			$books[$index] = $result->fetch_assoc();
		}
		$index = $index + 1;
	}
	$stmt->close();
	$index = 0;
	foreach($books as $value) {
		$date = date('Y-m-d');
		if($value != 0) {
			$sql = "UPDATE returned SET return_date = '$date'";
			$conn->query($sql);
		} else {
			$query = "INSERT INTO returned (isbn, return_date) VALUES (?, ?)";
			$ins = $conn->prepare($query);
			$ins->bind_param("ss", $a, $b);
			$a = $isbn[$index];
			$b = $date;
			$ins->execute();
			$ins->close();
		}
		$index = $index + 1;
	}
	$sql = "UPDATE books SET borrowed = 0, user_id = 0, return_date = 0000 WHERE isbn = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s", $a);
	foreach ($isbn as $value) {
		$a = $value;
		$stmt->execute();
	}
	header('librarian.php');
	$stmt->close();
	$conn->close();
?>