<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Librarian's actions</title>
	<link rel="stylesheet" type="text/css" href="../library.css">
	<script src="addinput.js"></script>

</head>
<body>
	<ul>
		<li><img src="../logo.png" alt="logo" class="logo"></li>
		<li><a class="navbar" href="index-librarian.php">Home</a></li>
		<li><a class="navbar" href="browse-librarian.php">Browse</a></li>
		<li><img src="../user.png" id="user"></li>
		<li><div class="dropdown">
				<span><a href="javascript:void(0)"><img src="../arrow.png" alt="click arrow" id="arrow"></a></span>
				<ul class="dropdown">
					<div class="dropdown-content">
					    <span class="actions"><li><a href="librarian.php">Add a user</a></li></span>
					    <span class="actions"><li><a href="librarian.php#add_book">Add a book</a></li></span>
					    <span class="actions"><li><a href="librarian.php#borrow_book">A book was borrowed</a></li></span>
					    <span class="actions"><li><a href="librarian.php#book_return">A book's been returned</a></li></span>
					    <span class="actions"><li><a href="librarian.php#del_book">Delete a book</a></li></span>
					    <span class="actions"><li><a href="../index-visitor.php" <?php $_COOKIE['name'] = 'visitor';?>>Log out</a>
					    </li></span>
					</div>
				</ul>
				</div>
			</li>
	</ul>
	<div class="box-body">
		<h3>Add a new user to the database</h3>
		<form action="add_user.php" method="post">
			<label for="fname">Name:</label><br>
			<input type="text" name="fname" id="fname" placeholder="Name" required><br>
			<!--label for="lname">Last name:</label><br>
			<input type="text" name="lname" id="lname" placeholder="Last name" required><br-->
			<label for="email">Email:</label><br>
			<input type="email" name="email" id="email" placeholder="Email" required><br>
			<label for="password">Password:</label><br>
			<input type="password" name="password" id="password" placeholder="Password" required><br>
			<input type="submit" value="Add user">
		</form>
		<h3 id="add_book">Add a new book</h3>
		<form action="add_book.php" method="get">
			<label for="isbn">ISBN:</label><br>
			<input type="text" name="isbn" id="isbn" placeholder="ISBN" required><br>
			<label for="author">Author:</label><br>
			<input type="text" name="author" id="title" placeholder="Author" required><br>
			Title:
			<label for="subtitle"></label><br>
			<input type="text" name="subtitle" id="subtitle" placeholder="Main title" required><br>
			<label for="fulltitle"></label>
			<textarea name="fulltitle" id="fulltitle" rows="2" cols="30" placeholder="Title" required></textarea><br>
			<label for="year">Publication year:</label><br>
			<input type="text" name="year" id="year" pattern="[1-9][0-9]{3}" required size="4" placeholder="Year"><br>
			<label for="lang">Language:</label><br>
			<input type="text" name="lang" id="lang" placeholder="Language" value="English"><br>
			<input type="submit" value="Add the new book">
		</form>
		<h3 id="borrow_book">Record that a book was borrowed</h3>
		<form action="borrow_book.php" method="post">
			<label for="email">Member's email<br></label>
			<input type="email" name="email" id="user_email" placeholder="User's email" required><br>
			<label for="isbn[]" id="addbook">Book's ISBN:<br></label>
			<input type="text" name="isbn[]" id="isbn" required size="13" placeholder="ISBN"><br>
			<input type="button" value="+1 book" onclick="addinput('addbook')">
			<input type="submit" value="Submit">
		</form>
		<h3 id="book_return">Record that a book has been returned</h3>
		<p>Specify the ISBN of the book </p>
		<form action="returned_book.php" method="POST">
			<label for="email">Member's email<br></label>
			<input type="text" name="email" required placeholder="Email"><br>
			<label for="isbn[]" id="return_book">ISBN:<br></label>
			<input type="text" name="isbn[]" id="isbn" placeholder="ISBN" required size="13"><br>
			<input type="button" value="+1 book" onclick="addinput('return_book')">
			<input type="submit" value="A book was returned">
		</form>
		<h3 id="del_book">Remove a book from the database</h3>
		<p>Specify the ISBN of the book you want to remove from the database</p>
		<form action="delete_book.php" method="get" id="delete">
			<label for="isbn[]">ISBN<br></label>
			<input type="text" name="isbn[]" id="isbn" placeholder="ISBN" required><br>
			<input type="button" value="+1 book" onclick="addinput('delete')">
			<input type="submit" value="Delete book">
		</form>
	</div>
</body>
</html>