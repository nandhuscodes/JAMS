<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
$id = $_GET['deleteid'];
$query = "delete from shorlisted where id ='$id'";
$result = mysqli_query($con,$query);
if($result){
//echo "Deleted!";
header('location:shortlistedcand.php');
}else{
die(mysqli_error($con));
}
}
?>