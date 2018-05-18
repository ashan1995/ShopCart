<?php

    return $conn=mysqli_connect('localhost','root','','shopcart');

    if(!$conn){
        die("Connection failed:" .mysqli_connect_error());
    }
