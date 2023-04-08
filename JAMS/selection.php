<?php
include 'connect.php';
if(isset($_GET['updateid'])){
$id = $_GET['updateid'];
$query = "insert into crudoperation.shorlisted select * from crudoperation.crud where id ='$id'";
$result = mysqli_query($con,$query);
if($result){
//echo "Deleted!";
header('location:select.php');
}else{
die(mysqli_error($con));
}
}
?>
