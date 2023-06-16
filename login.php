<?php 
	session_start();
?>
<!DOCTYPE html>
<!--?php
$cookie_name = "who";
$cookie_value = "visitor";
setcookie($cookie_name, $cookie_value);
?-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="library.css">
	<title>Login</title>
</head>
<body>
	<ul>
		<li><img src="logo.png" alt="logo" class="logo"></li>
		<li><a class="navbar" href="index-visitor.php" style="margin-left: 0;">Home</a></li>
		<li><a class="navbar" href="browse-visitor.php">Browse</a></li>
		<li><img src="logo.png" alt="logo" class="logo"></li>
	</ul>
	<div class="box-body">
		<h3>Log In</h3>
		<p>Please enter your email and password to access your account.</p
>		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" onsubmit="return login()">
		<label for="email">Email<br></label>
		<input type="email" id="email"name="email" placeholder="Email" required><br>
		<label for="password">Password<br></label>
		<input type="password" id="password" name="password" placeholder="Password" required><br>
		<input type="submit" value="Log in">
		</form>
	</div>
	<?php
		$emailerr = $passworderr = "";
		$password_user = $email = "";
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		if($_SERVER['REQUEST_METHOD'] == "POST") {
			if (empty($_POST['email'])) {
				$emailerr = "Email is required";
			} else {
				$email = test_input($_POST['email']);
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailerr = "Invalid email format";
				}
			}
			if(empty($_POST['password'])) {
				$passworderr = "Password is required";
			} else {
				$password_user = test_input($_POST['password']);
			}
		}
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mylibrary";
		$conn =  new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) { 
			die("Connection failed: ".$conn->connect_error);
		}
		
		$sql = "SELECT id_user, email, password, name, library FROM account";
		$result = $conn->query($sql);
		if($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				if($row["library"] == 1 && $row["email"] == $email && $row["password"] == $password_user){
					$_SESSION['usertype'] = 'librarian';
					header("location: Librarian/librarian.php");
				} elseif($row["library"] == 0 && $row["email"] == $email && $row["password"] == $password_user) {
					$_SESSION['usertype'] = 'member';
					$_SESSION['username'] = $row["name"];
					header("location: User/index-user.php");
				} 
			}
		}
		$conn->close();
		
	?>
</body>
<script type="text/javascript">
	var login = function() {
		var imgEl = document.createElement("img");
		imgEl.src = "user.png";
		imgEl.style.className = "logo";
		document.body.appendChild(imgEl);
	}
	
</script>
</html>