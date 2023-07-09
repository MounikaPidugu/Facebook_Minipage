<!--<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            font-size:50px;
            border:5px solid;
            border-radius:50px;
            padding-left:400px;
            background-color:pink;
        }
    </style>
</head>
<body>-->
<?php
session_start();
session_destroy();
header("Location:login.html");
?>