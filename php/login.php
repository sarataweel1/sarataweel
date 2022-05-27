<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/login.css">
	<title>Login Form </title>
</head>
<body>

<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: profile.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM db_user1 WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: profile.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="" method="POST"  >
				<h1>Login</h1><br/>
				<input type="email" name="email" placeholder="Email" value="<?php echo $email;?>" required>
				<input type="password" name="password" placeholder="Password" value="<?php echo  md5($_POST['password']); ?>" required>
				<a href="#">Forgot your password?</a>
				<button name="submit">Log In</button>
				<p>Dont have account?<a  href="sign-up.php">signup Here</a></p>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Friend book</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, hic reprehenderit praesentium illo minus quas, sunt nulla reiciendis dolor mollitia deserunt iusto aliquid asperiores. Quisquam assumenda explicabo sapiente veritatis quaerat!</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

