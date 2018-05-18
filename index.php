<?php
include "phpfiles/dbConnect.php";
session_start();
	
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="vendors/bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link href="CSS/index.css" rel="stylesheet"/>
	<link href="Assets/Index/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link rel="shortcut icon" href="Assets/Index/ico/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
<body>

<!--
Lower Header Section 
-->
<div class="container">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 50px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <a href="index.php" class="logo">e-world.lk</a>
  <div class="header-right">
  <?php
        if(isset($_SESSION['username'])){
         $sq2="SELECT * FROM user_info";
         $resultss=$conn->query($sq2);
		 $row=$resultss->fetch_assoc();
			echo "<p>Welcome ".$_SESSION['name']."<br></p>
			<form action='phpfiles/logout.include.php' method='post'>
			<button type='submit' style='padding:10px; color:white; background-color:black; border-radius:6px;'>Logout</button>
		</form>
			";
         }
				
				else{
					echo"<a class='active' href='login.php'>LogIn</a>
					<a href='signup.php'>Sign up</a>
					
					";
				}

    ?>
    

	
    
    
  </div>
</div>
    <div>


<div>

<!--

<div class="loginFrm">
	Welcome User Name <input type="button" class="btn-danger" value="LogOut">
</div>

-->
</header>



<!-- 
Body Section 
-->
	
<!--
New Products
-->
	<div>
	<?php

	$sql1 = "SELECT * FROM items";
		$results = $conn->query($sql1);
		
		if ($results->num_rows > 0) {
				// output data of each row
				while($row = $results->fetch_assoc()) {
						echo "<div style='height:200px; border-bottom:2px solid black'>
						<img class='itemphoto' src='".$row['photo_target']."' style='float:left; width:200px; height: 200px; padding:10px;'>
						<h2>".$row['item_name']."</h2>
						<h3>Rs.".$row['price']."</h3>";
						
						if(isset($_SESSION['username']))
							{
								echo"<form action='phpfiles/cart.include.php' method='post'>
															Quantity : <input type='text' name='quantity' onkeyup='showbtn()'>
															<input type='hidden' value='".$row['item_name']."' name='itemname'>
															<input type='hidden' value='".$row['item_id']."' name='itemid'>
															<input type='hidden' value='".$_SESSION['address']."' name='address'>
                              <input type='hidden' value='".$_SESSION['username']."' name='customername'>
                              
                              <button type='submit' name='btn' value='Add to Cart' onclick='confirmpu()'><img src='Assets/Index/cart.png' style='width:30px;height:30px;'></button>
                          
													</form>";
							}
						
						echo "</div>";
					}
		} else {
				echo "No items available";
		}
	
		?>
	</div>
	<style>
.footer {
  margin-top:20px;
  padding-top:30px;
    left: 0;
    bottom: 0;
    width: 100%;
    height:100px;
    background-color: black;
    
    text-align: center;
}
</style>

<div class="footer">
  <div class="col-md-6"><a style="text-decoration:none;color: white;" href="#">Contact Us</a></div>
  <div class="col-md-6"><a style="text-decoration:none;color: white;" href="#">About Us</a></div>
</div>
<script>
  function confirmpu() {
    window.confirm("Confirm add to cart?");
  }

  
    
</script>
    
  </body>
</html>