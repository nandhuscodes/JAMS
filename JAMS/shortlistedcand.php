<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>History of application</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type = "text/css" href="style.css">
</head>
<body class="bg-img">
<h2 class=text-center>Candidate list</h2>
<div class="container-fluid">
<table class="table table-dark my-3">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">Mobile</th>
<th scope="col">Skill</th>
<th scope="col">Process</th>
</tr>
</thead>
<tbody>
<?php
$query = "Select * from shorlisted";
$result = mysqli_query($con,$query);
if($result){
while($row = mysqli_fetch_assoc($result)){
$id=$row['ID'];
$name = $row['name'];
$email=$row['email'];
$mobile = $row['mobile'];
$password=$row['password'];
echo '<tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$email.'</td>
<td>'.$mobile.'</td>
<td>'.$password.'</td>
<td>
<butten class = "btn btn-danger"><a href="deleted.php?deleteid='.$id.'" class = "text-light">Delete</a></butten>
</td>
</tr>';
}
}
?>
</tbody>
</table>
</div>
<div class = "text-center">
<button class="btn btn-primary"><a href="user.php" class="text-light">Get back to login page</a></button>
</div>
<br>
<div class = 'text-center'>
<h5>Congratulation! to all the candidates in the list!</h5>
<br><h6>Other applied candidates- You are too close. Better luck next time!</h6>
</div>
</body>
</html>