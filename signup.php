<?php
    $name=$_POST['user'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $dob=$_POST['dob'];
    $gen=$_POST['gender'];
    $pass=$_POST['psw'];
    $conn=mysqli_connect('localhost','root','','web');
    $sql="INSERT INTO facebook(`sname`,`smail`,`sphone`,`sgender`,`sdob`,`spass`)VALUES ('$name','$email','$phone','$gen','$dob','$pass')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location:login.html");
    }
?>