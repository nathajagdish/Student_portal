<?php
session_start();
$message="";
if(count($_POST)>0) {
 
include("dbcon.php");

$result = mysqli_query($conn,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['name'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:Dashboard.php");
}
?>
<html>
<head>
<style>


.d{
	background-color: #C70039;
	margin-left:25%;
	margin-right:25%;
	height:50%;
	padding-top:10%;
}
</style>
<title>User Login</title>
</head>
<body>
<div class="d">
<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center" style=font-size:20px>Enter Login Details</h3>
 <h1>Username:</h1>
 <input type="text" name="user_name">
 <br>
 <h1>Password:</h1>
<input  type="password" name="password">
<br><br>
<input style=font-size:20px type="submit" name="submit" value="Submit">

</form></div>
</body>
</html>