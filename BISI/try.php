<?php
$aaaa=15;
	$mysqlconnect=mysql_connect("localhost","root","");
	if($mysqlconnect===false){die("mysql is not connected");}
	else{
	mysql_select_db("bisi");
	}
$res=mysql_query("INSERT INTO client(username,email,password)
				  VALUES ('$aaaa','$aaaa','$aaaa');");
				 
?>