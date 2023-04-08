<?php
include 'connect.php';
$id = $_GET['updateid'];
$query = "Select * from crud where id = $id";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$query = "update crud set name = '$name', email = '$email', mobile = '$mobile', password = '$password' where id = '$id'";
$result = mysqli_query($con,$query);
if($result){
//header('location:user.php');
echo "Updated Successfully!";
}
else{
die(mysqli_error($con));
}
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
<title>User management system</title>
</head>
<body class="bg-img">
<div class="container my-5">
<form method = "post">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" placeholder = "Enter your name" name = "name" autocomplete = "off" value = <?php echo $name?>>
</div>
<div class="form-group">
<label>Email</label>
<input type="email" class="form-control" placeholder = "Enter your email" name = "email" autocomplete = "off"value = <?php echo $email?>>
</div>
<div class="form-group">
<label>Mobile</label>
<input type="text" class="form-control" placeholder = "Enter your mobile number" name = "mobile" autocomplete = "off" value = <?php echo $mobile?>>
</div>
<div class="form-group">
<label>Skill</label>
<input type="text" class="form-control" placeholder = "Enter your skills" name = "password" autocomplete = "off" value = <?php echo $password?>>
</div>
<button type="submit" class="btn btn-primary" name = "submit">Update</button>
<div class = "text-center">
<button class = "btn btn-primary my-5"><a href="display.php" class='text-light'>View Candidates</a></button>
<br>
<button class="btn btn-primary"><a href="user.php" class="text-light">Get back to login page</a></button>
</div>
</form>
</div>
</body>
</html>