<?php
	$mysqlconnect=mysql_connect("localhost","root","");
	if($mysqlconnect===false){die("mysql is not connected");}
	else{
		mysql_select_db("bisi");
		}
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="js/sweetalert2@11.js"></script>
    <style>
        body {
            background-color: #303641;
        }
    </style>
</head>

<body>
    <div id="container-register">
        <div id="title">
            <i class="material-icons lock">lock</i> Register
        </div>

        <form name="f1" method="POST" action="">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input name="email1" id="email" placeholder="Email" type="email" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input name="username1" id="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input name="password1" id="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
            </div>

            <div class="remember-me">
                <input type="checkbox">
                <span style="color: #DDD">I accept Terms of Service</span>
            </div>

            <input type="submit" value="Register" />
        </form>
<?php
	if (isset($_POST['email1']))  $email=$_POST['email1'];
	if (isset($_POST['username1'])) $username =$_POST['username1'];
	if (isset($_POST['password1']))  $password=$_POST['password1'];
	$req0=mysql_query("select email from client where(email='$email');");
	if (mysql_num_rows($req0)==0)
		{
		$res=mysql_query("INSERT INTO client
				  VALUES ('$username','$email','$password');");
		echo '<script>';
		echo "Swal.fire('Signed in to $email $username $password', '', 'success')"; 
		echo "</script>";
		} 
	else{
		echo '<script>';
		echo "Swal.fire('Already in use', '', 'warning')"; 
		echo "</script>";
		} 
?>

        <div class="privacy">
            <a href="#">Privacy Policy</a>
        </div>

        <div class="register">
            Do you already have an account?
            <a href="login.php"><button id="register-link">Log In here</button></a>
        </div>
    </div>
</body>

</html>