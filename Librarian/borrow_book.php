<?php
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$isbn[] = array();
	$length = 0;
	foreach ($_POST['isbn'] as $value) {
	 	$isbn[$length] = test_input($value);
	 	$length = $length + 1;
	} 
	$email = test_input($_POST['email']);
	
	$conn =  new mysqli('localhost', 'root', "", 'mylibrary');
	//Get id of the member who has borrowed the books
	$sql = "SELECT id_user FROM account WHERE email = '$email'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$id = $row['id_user'];
	//Update number of books user has borrowed
	$sql = "UPDATE account SET nr_books = '$length' WHERE email = '$email'";
	$conn->query($sql);
	//Set the books as borrowed by the member, and their return date|!
	$sql = "UPDATE books SET borrowed = 1, user_id = '$id', return_date = ADDDATE(CURRENT_TIMESTAMP, INTERVAL 14 day) WHERE books.isbn = ?";
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