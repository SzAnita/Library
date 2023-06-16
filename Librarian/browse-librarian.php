<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="../library.css">
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
					    <span class="actions"><li><a href="../index-visitor.php">Log out</a></li></span>
					</div>
				</ul>
				</div>
			</li>
	</ul>
	<div class="box-body">
		<h3>Browse by Author</h3>
		<p><a href="#a-aut">A</a> || <a href="#b-aut">B</a> || <a href="#c-aut">C</a> || <a href="#d-aut">D</a> || <a href="#e-aut">E</a> || <a href="#f-aut">F</a> || <a href="#g-aut">G</a> || <a href="#h-aut">H</a> || <a href="#i-aut">I</a> || <a href="#j-aut">J</a> || <a href="#k-aut">K</a> || <a href="#l-aut">L</a> || <a href="#m-aut">M</a> || <a href="#n-aut">N</a> || <a href="#o-aut">O</a> || <a href="#p-aut">P</a> || <a href="#q-aut">Q</a> || <a href="#r-aut">R</a> || <a href="#s-aut">S</a> || <a href="#t-aut">T</a> || <a href="#u-aut">U</a> || <a href="#v-aut">V</a> || <a href="#w-aut">W</a> || <a href="#x-aut">X</a> || <a href="#y-aut">Y</a> || <a href="#z-aut">Z</a></p>
		<h4 id=a-aut>A</h4>
		<h4 id="b-aut">B</h4>
		<h4 id="c-aut">C</h4>
		<h4 id="d-aut">D</h4>
		<h4 id="e-aut">E</h4>
		<h4 id="f-aut">F</h4>
		<h4 id="g-aut">G</h4>
		<h4 id="h-aut">H</h4>
		<h4 id="i-aut">I</h4>
		<h4 id="j-aut">J</h4>
		<h4 id="k-aut">K</h4>
		<h4 id="l-aut">L</h4>
		<h4 id="m-aut">M</h4>
		<h4 id="n-aut">N</h4>
		<h4 id="o-aut">O</h4>
		<h4 id="p-aut">P</h4>
		<h4 id="q-aut">Q</h4>
		<h4 id="r-aut">R</h4>
		<h4 id="s-aut">S</h4>
		<h4 id="t-aut">T</h4>
		<h4 id="u-aut">U</h4>
		<h4 id="v-aut">V</h4>
		<h4 id="w-aut">W</h4>
		<h4 id="x-aut">X</h4>
		<h4 id="y-aut">Y</h4>
		<h4 id="z-aut">Z</h4>
	</div>
</body>