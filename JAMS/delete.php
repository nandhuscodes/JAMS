<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
$id = $_GET['deleteid'];
$query = "delete from crud where id ='$id'";
$result = mysqli_query($con,$query);
if($result){
echo "Deleted!";
header('location:display.php');
}else{
die(mysqli_error($con));
}
}
?>
<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
$id = $_GET['deleteid'];
$query = "delete from shorlisted where id ='$id'";
$result = mysqli_query($con,$query);
if($result){
//echo "Deleted!";
header('location:display.php');
}else{
die(mysqli_error($con));
}
}
?>
