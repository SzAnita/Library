<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search</title>
	<link rel="stylesheet" href="../library.css">
</head>
<body>
	<ul>
		<li><img src="logo.png" alt="logo" class="logo"></li>
		<li><a class="navbar" href="index-visitor.php">Home</a></li>
		<li><a class="navbar" href="browse-visitor.php">Browse</a></li>
		<li><img src="logo.png" alt="logo" class="logo" id="logo_right"></li>
	</ul>
	<div class="box-body">
		<div class="search">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
				<label for="search"></label>
					<select name="search" id="search">
						<option value="all" selected>All</option>
						<option value="author">Author</option>
						<option value="title">Title</option>
						<option value="subject">Subject</option>
					</select>
				<label for="search-value"></label>
					<input type="text" name="q" id="search-value" placeholder="Search">
				<input type="submit" value="" style="display: none;">
			</form> 
		</div>
		<div id="newbooks">
<?php
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$search_by = test_input($_GET['search']);
	$search_val = test_input($_GET['q']);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mylibrary";
	$conn =  new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) { 
		die("Connection failed: ".$conn->connect_error);
	}
	echo '<br>';
	if($search_by == "Author") {
		$sql = "SELECT id, isbn, author, main_title, full_title, borrowed FROM books WHERE author LIKE '%$search_val%'";
		$result = $conn->query($sql);
		if($result->num_rows == 0) {
			echo 'No matches found';
		} else {
			while($row = $result->fetch_assoc()) {
				echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
			}
		}
	} elseif ($search_by == "Title") {
		$sql = "SELECT author, main_title, full_title, borrowed FROM books WHERE full_title LIKE '%$search_val%'";
		$result = $conn->query($sql);
		if($result->num_rows == 0) {
			echo 'No matches found';
		} else {
			while($row = $result->fetch_assoc()) {
				echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
			}
		}
	} else {
		$sql = "SELECT author, main_title, full_title, borrowed FROM books WHERE author LIKE '%$search_val%' OR full_title LIKE '%$search_val%'";
		$result = $conn->query($sql);
		if($result->num_rows == 0) {
			echo 'No matches found';
		} else {
			while($row = $result->fetch_assoc()) {
				echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
			}
		}
	}
?>
	</div>
	</div>
</body>
</html>