<?php
if($_POST){
$host = "localhost";
$user = "root";
$pass = "";
$db = "crudoperation";
$username=$_POST['username'];
$password=$_POST['password'];
$conn = mysqli_connect($host,$user,$pass,$db);
$query = "SELECT * from hostlog where username = '$username' and password = '$password'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1){
session_start();
$_SESSION['crudoperation']='true';
header('location:select.php');
}
else{ echo 'wrong username or password';}
}
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type = "text/css" href="style.css">
<title>Host authentication</title>
</head>
<body class="bg-img">
<div class="container my-5">
<h3 class = "text-white">Authenticate yourself to proceed further</h3>
<form method = "post">
<div class="form-group">
<div class="text-light">
<label>Username</label></div>
<input type="text" class="form-control" placeholder = "Enter host username" name = "username" autocomplete = "off">
</div>
<div class="form-group">
<div class="text-light">
<label>Password</label></div>
<input type="password" class="form-control" placeholder = "Enter host password" name = "password" autocomplete = "off">
</div>
<button type="submit" class="btn btn-primary" name = "submit">Submit</button>
</form>
</div>
</body>
</html>
