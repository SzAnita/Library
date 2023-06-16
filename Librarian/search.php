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
		<li><img src="../logo.png" alt="logo" class="logo"></li>
		<li><a class="navbar" href="index-librarian.php">Home</a></li>
		<li><a class="navbar" href="browse-librarian.php">Browse</a></li>
		<li><img src="../user.png" id="user" alt="profile"></li>
		<li>
			<div class="dropdown">
				<span><a href="javascript:void(0)"><img src="../arrow.png" alt="click arrow" id="arrow"></a></span>
					<ul class="dropdown">
						<div class="dropdown-content">
						    <span class="actions"><li><a href="librarian.php">Add a user</a></li></span>
						    <span class="actions"><li><a href="librarian.php#add_book">Add a book</a></li></span>
						    <span class="actions"><li><a href="librarian.php#book_return">A book's been returned</a></li></span>
						    <span class="actions"><li><a href="librarian.php#del_book">Dkelete a book</a></li></span>
						    <span class="actions"><li><a href="../index-visitor.php">Log out</a></li></span>
						</div>
					</ul>
			</div>
		</li>
		<li id="logo_right"><img src="../logo.png" alt="logo" class="logo"></li>
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
				<a href="search.php">
					<svg width="104" height="50">
						<circle cx="12" cy="20" r="10" stroke="black" stroke-width="2" fill="lightgoldenrodyellow"/>
						<line x1="13" y1="30" x2="17" y2="44" style="stroke:rgb(0,0,0);stroke-width:2" />
					</svg>
				</a>
		</div>
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
		$sql = "SELECT id, isbn, author, full_title, borrowed FROM books WHERE Author LIKE '%$search_val%'";
		$result = $conn->query($sql);
		if($result->num_rows == 0) {
			echo 'No matches found';
		} else {
			while($row = $result->fetch_assoc()) {
				echo '<p>'.$row["Author"].": ".$row["full_title"].",ISBN:".$row["isbn"]."with id:".$row["id"]."</p>";
			}
		}
	} elseif ($search_by == "Title") {
		$sql = "SELECT Author, full_title, borrowed FROM books WHERE full_title LIKE '%$search_val%'";
		$result = $conn->query($sql);
		if($result->num_rows == 0) {
			echo 'No matches found';
		} else {
			while($row = $result->fetch_assoc()) {
				echo $row["Author"].": ".$row["full_title"]."<br>";
			}
		}
	} else {
		$sql = "SELECT Author, full_title, borrowed FROM books WHERE Author LIKE '%$search_val%' OR full_title LIKE '%$search_val%'";
		$result = $conn->query($sql);
		if($result->num_rows == 0) {
			echo 'No matches found';
		} else {
			while($row = $result->fetch_assoc()) {
				echo $row["Author"].": ".$row["full_title"]."<br>";
			}
		}
	}
?>
	</div>
</body>
</html>