<?php
session_start();
$con=mysqli_connect('localhost','root','','web');
$user=$_SESSION['name'];
$query = " SELECT * from `file` where `user`= '$user' ";
$result = mysqli_query($con, $query);
while ($data = mysqli_fetch_assoc($result)) { ?>
    <img src="./upload/<?=$data['name']; ?>"  width="200">
<?php    }?>