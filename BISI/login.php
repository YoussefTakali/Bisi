<?php
session_start();
ob_start();
	$mysqlconnect=mysql_connect("localhost","root","");
	if($mysqlconnect===false){die("mysql is not connected");}
	else{
	mysql_select_db("bisi");
	}	
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="js/sweetalert2@11.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <style>
        body {
            background-color: #303641;
        }
    </style>
</head>

<body>
    <div id="container-login">
        <div id="title">
            <i class="material-icons lock">lock</i> Login
        </div>

        <form name="f" method="POST" action="">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input name="email" id="email" placeholder="Email" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input name="password" id="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
            </div>

            <div class="remember-me">
                <input type="checkbox">
                <span style="color: #DDD">Remember Me</span>
            </div>

            <input type="submit" value="Log In" />
        </form>

        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
        <div class="privacy">
            <a href="#">Privacy Policy</a>
        </div>

        <div class="register">
            Don't have an account yet?
            <a href="register.php"><button id="register-link">Register here</button></a>
        </div>
    </div>
<?php
	if (isset($_POST['email'])) $email=$_POST['email'];
	if (isset($_POST['password'])) $password=$_POST['password'];
	$req0=mysql_query("select * from client where(email='$email')and(password='$password');");
	$row=mysql_fetch_array($req0);
	if (is_array($row))
		{
		$_SESSION["email"]=$row["email"];
		echo '<script>';
		echo "Swal.fire('Logged to $email', '', 'success')"; 
		echo "</script>";
		 }
		 else
		 {
		echo '<script>';
		echo "Swal.fire('Wrong Data', '', 'warning')"; 
		echo "</script>";
		 }
	if(isset($_SESSION["email"])){
		header("Location:index.php");
	}
?>
</body>
</html>