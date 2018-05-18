<?php
session_start();
include "dbConnect.php";

$itemname=$_POST['itemname'];
$qty=$_POST['quantity'];
$customername=$_POST['customername'];
$itemid=$_POST['itemid'];
$address=$_POST['address'];


$sql1 = "SELECT * FROM items where item_id='$itemid'";
$results = $conn->query($sql1);
$row = $results->fetch_assoc();   
$amount=$qty * $row['price'];
echo $amount;

$sq="INSERT INTO $itemname(CustomerName,Quantity,Price,Address) VALUES('$customername','$qty','$amount','$address')";
$result=$conn->query($sq);

 header("location:../index.php");


