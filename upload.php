<?php 
session_start();
if(isset($_POST['image'])){
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["dash"]["name"]);
if(isset($_FILES["dash"])){
	$id=$_FILES["dash"]["id"];
	$fn = $_FILES["dash"]["name"];
$ft = $_FILES["dash"]["type"];
$fs = $_FILES["dash"]["size"];
$ftp = $_FILES["dash"]["tmp_name"];
  
  if (move_uploaded_file($_FILES["dash"]["tmp_name"], $target_file)) {
    $user=$_SESSION['name'];
	$con = mysqli_connect("localhost","root","","web");
	$st1 = "insert into `file` values('$id','$fn','$user')";
	$res1 = mysqli_query($con,$st1);
    header("location:dashboard.php");
    }
}
 else
 {
 	echo "<br><h3>sorry file exists</h3>";
 }
}
?>
