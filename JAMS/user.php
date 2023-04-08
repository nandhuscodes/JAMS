<?php
include 'connect.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$query = "insert into crud(name,email,mobile, password) values('$name','$email','$mobile','$password')";
$result = mysqli_query($con,$query);
if($result){
echo "Data Inserted Successfully!!! Click View Candidates to see the outcome";
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
<title>Job application management system</title>
</head>
<body class="bg-img">
<div class="container my-5">
<h3 class = "text-white">Register for your job</h3>
<button class = "btn btn-primary my-5"><a href="display.php" class='text-light'>View Candidates</a></button>
<button class = "btn btn-primary my-5"><a href="host.php" class='text-light'>Selection section</a></button>
<button class = "btn btn-primary my-5"><a href="shortlistedcand.php" class='text-light'>Selected candidates</a></button>
<form method = "post">
<div class="form-group">
<div class="text-light">
<label>Name</label></div>
<input type="text" class="form-control" placeholder = "Enter your name" name = "name" autocomplete = "off">
</div>
<div class="form-group">
<div class="text-light">
<label>Email</label></div>
<input type="email" class="form-control" placeholder = "Enter your email" name = "email" autocomplete = "off">
</div>
<div class="form-group">
<div class="text-light">
<label>Mobile</label></div>
<input type="text" class="form-control" placeholder = "Enter your mobile number" name = "mobile" autocomplete = "off">
</div>
<div class="form-group">
<div class="text-light">
<label>Skill</label></div>
<input type="text" class="form-control" placeholder = "Enter your skills" name = "password" autocomplete = "off">
</div>
<button type="submit" class="btn btn-primary" name = "submit">Submit</button>
</form>
</div>
</body>
</html>