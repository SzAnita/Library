<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Account</title>
	<link rel="stylesheet" href="../library.css">
	<script src="../index.js"></script>
</head>
<body>
	<ul>
		<li><img src="../logo.png" alt="logo" class="logo"></li>
		<li><a class="navbar" href="index-user.php">Home</a></li>
		<li><a class="navbar" href="browse-user.php">Browse</a></li>
		<li><img src="../user.png" alt="user" id="user"></li>
		<li>
			<div class="dropdown">
				<span><a href="javascript:void(0)"><img src="../arrow.png" alt="click arrow" id="arrow"></a></span>
				<ul class="dropdown">
					<div class="dropdown-content">
					    <span class="actions"><li><a href="account.php">My Account</a></li></span>
					    <span class="actions"><li><a href="account.php#loans">My Loans</a></li></span>
					    <span class="actions"><li><a href="../index-visitor.php">Log Out</a></li></span>
					</div>
				</ul>
			</div>
		</li>
	</ul>
	<div class="box-body">
		<h2>Account</h2>
		<p>Email: 
		<?php
			$conn =  new mysqli('localhost', 'root', '', 'mylibrary');
			$name = $_SESSION['username'];
			$sql = "SELECT email, password, nr_books FROM account WHERE name = '$name'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$email = $row["email"];
			echo $email;
			$password = $row["password"];
			//echo $email."<br>Password: ".$password;
			echo "</p>";
			echo "<h3 id='loans'>My Loans</h3>";
			echo "<div id = 'newbooks'></div>";
			$sql = "SELECT books.author, books.main_title, books.full_title, books.return_date FROM books JOIN account ON account.id_user = books.user_id WHERE account.email = '$email'";
			$result = $conn->query($sql);
			$count = 0;
			if($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo '<script>test("'.$row["main_title"].'" , "'.$row["author"].'" , "'.$row["full_title"].'")</script>';
				}
				$min_return = date_create(date('Y-m-d'));
				$min_return = date_add($min_return, date_interval_create_from_date_string("14 days"));
				$sql = "SELECT return_date FROM books JOIN account ON account.id_user = books.user_id WHERE account.email = '$email'";
				$result = $conn->query($sql);
				if($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						if($row['return_date']<$min_return) {
							$min_return = $row['return_date'];
						}
						$count = $count + 1; 
					}
				}
				echo '<p>Your next book has to be taken back at '.$min_return;
			}	
			echo'<br> You have '.$count.' books borrowed of 14.</p>';
			?>
	</div>
</body>
</html>