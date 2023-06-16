<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="../library.css">
	<script src="../index.js"></script>
</head>
<body>
		<ul>
			<li><img src="../logo.png" alt="logo" class="logo"></li>
			<li><a class="navbar" href="index-user.php">Home</a></li>
			<li><a class="navbar" href="browse-user.php">Browse</a></li>
			<li class="dropdown"><a href="javascript:void(0)"><img src="../user.png" id="user"></a></li>
			<li><div class="dropdown">
				<span><a href="javascript:void(0)"><img src="../arrow.png" alt="click arrow" id="arrow"></a></span>
				<ul class="dropdown">
					<div class="dropdown-content">
						<span class="actions"><li><a href="account.php">My Account</a></li></span>
					    <span class="actions"><li><a href="account.php#loans">My Loans</a></li></span>
					    <span class="actions"><li><a href="../index-visitor.php">Log Out</a></li></span>							
					</div>
				</ul>
			</div>
		</ul>
	<div class="box-body">
		<div class="search">
			<form action="search.php" method="get">
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
			<h3>Recently added</h3>
		<?php 
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "mylibrary";
			$conn =  new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) { 
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT id, author, main_title, full_title FROM books ORDER BY books.id DESC LIMIT 10";
			$result = $conn->query($sql);
			if($result->num_rows > 0 && $result->num_rows < 11) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			}
			echo"<h3>Recently returned</h3>";
			$sql = "SELECT books.author, books.main_title, books.full_title FROM books JOIN returned ON books.isbn = returned.isbn LIMIT 10";
			$result = $conn->query($sql);
			if($result->num_rows > 0 && $result->num_rows < 11) {
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