<html>
    <head>
        <title>Hasil</title>
    	<link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php
            $DBServer = 'localhost';
            $DBUser = 'root';
            $DBPass = '';
            $DBName = 'dbinstagoreng';
            $conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
        
            if ($conn->connect_error) {
                trigger_error('Database connection failed: '. $conn->connect_error, E_USER_ERROR);
            }
            
            $email=$_POST['email'];$fullname=$_POST['fullname'];
            $username=$_POST['username'];$password=$_POST['password'];
        
            $sql = "INSERT INTO tbuser (username, fullname, email, password) VALUES ('$username', '$fullname', '$email', '$password')";
        
            if ($conn->query($sql) === false){
                trigger_error('Wrong SQL: ' . $sql . 'Error: ' . $conn->error, E_USER_ERROR);
            } else {
                $last_inserted_id = $conn->insert_id;
                $affected_rows = $conn->affected_rows;
            }
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
