
<html>
    <head>
        <title>Hasil</title>
    	<link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php
        $conn=mysql_connect("localhost", "root", "");
		mysql_select_db("dbinstagoreng");
		$email=$_POST['email'];$fullname=$_POST['fullname'];
		$username=$_POST['username'];$password=$_POST['password'];
		$sql="insert into tbuser (email, fullname, username, password) values ('$email', '$fullname', '$username', '$password')";
		mysql_query($sql);
        ?>
        <div id="hasil">
            <div class="content">
                <center>
                    <h1>Instagoreng</h1>
                    <h3>Registration Complete</h3>
                    <hr />
                        <table width="250" height="150">
                        <tr><td>Email</td><td>:</td><td><?php echo $_POST["email"]; ?></td></tr>
                        <tr><td>Fullname</td><td>:</td><td><?php echo $_POST["fullname"]; ?></td></tr>
                        <tr><td>Username</td><td>:</td><td><?php echo $_POST["username"]; ?></td></tr>
                        <tr><td>Password</td><td>:</td><td><?php echo $_POST["password"]; ?></td></tr>
                    </table>
                    <a href="form.php"><button type=button>Back</button></a>
                </center>
            </div>
        </div>
        
    </body>
</html>
