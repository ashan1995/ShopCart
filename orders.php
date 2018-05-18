<?php
    session_start();
    include "phpfiles/dbConnect.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="CSS/orders.css">
  
</head>
<body>

<div class="header">
  <a href="index.php" style="font-size:50px; font-weight:bold;">e-world.lk</a>
  <div class="header-right">
    <a class="active" href="additem.php">Add new items</a>
    <form action="phpfiles/logout.include.php">
        <button style="color:white; background-color:black; font-size:20px; width:140px; padding:12px; border-radius:5px" type="submit">Logout</button>
    </form>
 
  </div>
</div>
    <div style="margin-left:30px;">
       
        <?php
    

$sql1 = "SELECT * FROM items";
$results = $conn->query($sql1);

while ($row=$results->fetch_assoc()) {

	$sq = "SELECT * FROM ".$row['item_name']."";
	$result = $conn->query($sq);
		echo "<h2>".$row['item_name']."</h2><table style='border:2px solid black; width:500px;'><tr style='background-color:rgb(2, 121, 95); color:white;'><td style='border:2px solid black'>Customer Name</td><td style='border:2px solid black'>Quantity</td><td style='border:2px solid black'>Price</td><td style='border:2px solid black'>Address</td></tr>";

		while($rows = $result->fetch_assoc()) {
			echo "<tr><td style='border:2px solid black'>".$rows['CustomerName']."</td><td style='border:2px solid black'>".$rows['Quantity']."</td><td style='border:2px solid black'>".$rows['Price']."</td><td style='border:2px solid black'>".$rows['Address']."</td></tr>";		
    
        }
	
    echo "</table>";

}

?>
    
    </div>
</body>
</html>