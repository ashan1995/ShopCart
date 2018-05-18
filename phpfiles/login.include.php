<?php   
        session_start();

        include "dbConnect.php";
        
         $uname=$_POST['username'];
         $pw=$_POST['password'];


         if(($uname=="admin")&&($pw=="admin123")){
                $_SESSION['username']=$uname;
            header("location:../additem.php");
         }
         else{
                 $sq="SELECT * FROM user_info WHERE username='$uname' AND password='$pw'";
                 $result=$conn->query($sq);
        
             if(!$row=$result->fetch_assoc()){
            echo "error logging in";
             }
            else{
                $_SESSION['username']=$row['username'];
                $_SESSION['name']=$row['name'];
                $_SESSION['address']=$row['address'];
           
                header("location:../index.php");
        }
         }
         
      