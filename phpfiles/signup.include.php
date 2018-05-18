<?php
session_start();
include "dbConnect.php";

$uname=$_POST['username'];
$name=$_POST['name'];
$address=$_POST['address'];
$tel=$_POST['mobile'];
$email=$_POST['email'];
$pw=$_POST['password'];


$sq="INSERT INTO user_info(username,name,address,mobile,email,password)
VALUES('$uname','$name','$address','$tel','$email','$pw')";
$result=$conn->query($sq);

header("location:../login.php");