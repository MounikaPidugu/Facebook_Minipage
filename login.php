
<?php
    session_start();
    $name=$_POST['name'];
    $pass=$_POST['psw'];
    $conn=mysqli_connect('localhost','root','','web');
    $sql="SELECT *FROM facebook WHERE `sname`='$name' and `spass`='$pass'";
    $res=mysqli_query($conn,$sql);
    if($res){
        $_SESSION['name']=$name;
        header("Location:dashboard.php");
    }
    else{
        echo "<script>alert('Invalid Credentials');window.location=login.html ;</script>";
    }
?>