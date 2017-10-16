<!DOCTYPE html>
<html>
<head>
	<title>Instagoreng</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div id="form">
		<div class="content">
		<form action="hasil.php" method="POST">
			<center>
			<h1>Instagoreng</h1>
			<h3>Sign up to see photos and videos<br>from your fiends</h3>
                <hr />
            <button>Login with Facebook</button><br>
			<p class="line">OR</p>
			<input type="text" name="email" placeholder="Mobile Number or Email" required><br />
			<input type="text" name="fullname" placeholder="Fullname" required><br />
			<input type="text" name="username" placeholder="Username" required><br />
			<input type="password" name="password" placeholder="Password" required><br />
			<button type="submit">Sign Up</button><br />
			<p id="privacy">By signing up, you agree to our<br><b>Terms </b>&<b> Privacy Policy</b>.</p>
			</center>
		</form>
		</div>
	</div>
    <div id="login">
        <div class="content">
            <p class="login">Have an account? <a href=#>Log in</a></p>
        </div>
    </div>
</body>
</html>