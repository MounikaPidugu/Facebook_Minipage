<?php 
session_start();
?>
<html>
    <head>
        <style>
           body{
            margin:auto;
            font-size:25px;
            border:10px solid;
            border-radius:10px;
            background-color:lightblue;
            text-decoration-color:navy;
        }
        .id{
            width:200px;
    
            color:black;
            position:relative;
            left:600px;
        } 
        .mm{
            border:10px;
            width:20px;
            height:10px;
        }
        .mp{   
            margin:auto;
    height:170px;
    width:270px;
    border: 3px solid;
    border-radius:40px;
    
}
.lg{
    width:0px;
    height:50px;
    border-radius:3px;
}
        
            </style>
</head>     
    <body>
        <h1 align='center'><u><b>Facebook</b></u></h1>
        <nav>
            
            <a href="profile.php">Profile</a>
        </nav>        
        <?php 
            echo "Welcome, {$_SESSION['name']}";
        ?>
    
<div class="mp"> 
    </form>
    <h3><u>Post Photos💃🕺</u></h3>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="dash">
  <input type="submit" value="Upload File" name="image" ><br>
    </form>
    </div>
</body>
</html>
<center>
<?php 
	$con = mysqli_connect("localhost","root","","web");
	$query = " SELECT * from `file` order by `id` desc";
    $result = mysqli_query($con, $query);
    while ($data = mysqli_fetch_assoc($result)) { ?>
        <img src="./upload/<?=$data['name']; ?>"  width="500" height="400" vspace="50">
        <a href="likes.php">likes👍</a>
        <a href="comment.php">Comment💬</a>
<?php  }
?>
</center>
<form method='post' action='logout.php'>
        <div class="id" >
        <input type='submit' value='Logout' name='submit'><br><br>
</div>
</form>