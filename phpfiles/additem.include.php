<?php

session_start();
include "dbConnect.php";

$itemname=$_POST['itemname'];
$price=$_POST['price'];



$sql="CREATE TABLE $itemname(
    CustomerID int PRIMARY KEY AUTO_INCREMENT,
    CustomerName varchar(255),
    Quantity varchar(255),
    Price varchar(255),
    Address varchar(255) 
);";
$result=$conn->query($sql);


//image upload
if ($_FILES["image"]["error"] > 0)
  {
     echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
     echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
   }
   else
   {
     move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads/" . $_FILES["image"]["name"]);
     echo"<font size = '5'><font color=\"#0CF44A\">SAVED<br>";

     $file="uploads/".$_FILES["image"]["name"];
     $sq="INSERT INTO items (item_name,price, photo_target) VALUES ('$itemname','$price','$file')";

     $result=$conn->query($sq);
    header("location:../additem.php");
   }