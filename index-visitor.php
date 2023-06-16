<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="library.css">
	<script src="index.js"></script>
</head>
<body>
		<ul>
			<li><img src="logo.png" alt="logo" class="logo"></li>
			<li><a class="navbar" href="index-visitor.php">Home</a></li>
			<li><a class="navbar" href="browse-visitor.php">Browse</a></li>
			<li><img src="logo.png" alt="logo" class="logo"></li>
		</ul>
	<div class="box-body">
		<div id="search">
			<select>
				<option value="all">All</option>
				<option value="author">Author</option>
				<option value="title">Title</option>
				<option value="subject">Subject</option>
			</select>
			<input type="text" name="search" id="search" placeholder="Search">
			<a href="login.php" class="login"> Log In </a>
		</div>
		<div id="newbooks">
		<h3>Recently added</h3>
		<?php 
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "mylibrary";
			$conn =  new mysqli($servername, $username, $password, $dbname);
			
			$sql = "SELECT id, author, main_title, full_title FROM books ORDER BY books.id DESC LIMIT 10";
			$result = $conn->query($sql);
			if($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			}
			echo "<h3>Recently returned</h3><div id='returned'></div>";
			$sql = "SELECT books.author, books.main_title, books.full_title FROM books JOIN returned ON books.isbn = returned.isbn LIMIT 10";
			$result = $conn->query($sql);
			if($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			}
			$conn->close()
		?>
		</div>
	</div>
</body>
</html>