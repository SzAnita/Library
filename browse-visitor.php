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
		<li><img src="logo.png" alt="logo" class="logo" id="logo_right"></li>
	</ul>
	<div class="box-body">
		<h3>Browse by Author</h3>
		<p><a href="#a-aut">A</a> || <a href="#b-aut">B</a> || <a href="#c-aut">C</a> || <a href="#d-aut">D</a> || <a href="#e-aut">E</a> || <a href="#f-aut">F</a> || <a href="#g-aut">G</a> || <a href="#h-aut">H</a> || <a href="#i-aut">I</a> || <a href="#j-aut">J</a> || <a href="#k-aut">K</a> || <a href="#l-aut">L</a> || <a href="#m-aut">M</a> || <a href="#n-aut">N</a> || <a href="#o-aut">O</a> || <a href="#p-aut">P</a> || <a href="#q-aut">Q</a> || <a href="#r-aut">R</a> || <a href="#s-aut">S</a> || <a href="#t-aut">T</a> || <a href="#u-aut">U</a> || <a href="#v-aut">V</a> || <a href="#w-aut">W</a> || <a href="#x-aut">X</a> || <a href="#y-aut">Y</a> || <a href="#z-aut">Z</a></p>
		<div id="newbooks">
		<h4 id=a-aut>A</h4>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "mylibrary";
			$conn =  new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) { 
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * FROM books WHERE author LIKE '% A%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="b-aut">B</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% B%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="c-aut">C</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% C%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="d-aut">D</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% D%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			}
			echo '<h4 id="e-aut">E</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% E%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="f-aut">F</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% F%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="g-aut">G</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% G%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="h-aut">H</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% H%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="I-aut">I</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% I%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="j-aut">J</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% J%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="k-aut">K</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% K%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="l-aut">L</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% L%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="m-aut">M</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% M%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="n-aut">N</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% N%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="o-aut">O</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% O%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="p-aut">P</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% P%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="q-aut">Q</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% Q%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="r-aut">R</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% R%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="s-aut">S</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% S%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="t-aut">T</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% T%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			}
			echo '<h4 id="u-aut">U</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% U%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="v-aut">V</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% V%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="w-aut">w</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% W%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="x-aut">X</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% X%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="y-aut">Y</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% Y%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			} 
			echo '<h4 id="z-aut">Z</h4>';
			$sql = "SELECT * FROM books WHERE author LIKE '% Z%' ORDER BY author ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
			}   
		?>
	</div>
	</div>
</body>