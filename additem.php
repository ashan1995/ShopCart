<?php
  include "phpfiles/dbConnect.php";
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>ADD Item</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
  
  
      <link rel="stylesheet" href="CSS/additem.css">

  
</head>

<body>

  <body class="align">

  <div class="grid">

    <div id="login">

      <h2><img src="Assets/AddItem/add2.png"> Add New Item</h2>

      <form action="phpfiles/additem.include.php" method="POST" enctype="multipart/form-data">

        <fieldset>

          <p><label for="IName">Item Name</label></p>
          <p><input type="text" id="IName" name="itemname"></p>

          <p><label for="Price">Item Price</label></p>
          <p><input type="text" id="Price" name="price"></p>

          <p><label for="File">File</label></p>
          <p><label class="bb"><!-- <img src="plus4.png"> -->+Add Your File
          <input name="image" accept="image/jpeg" type="file"></label></p>


          <p><input type="submit" value="Add Item"></p>

        </fieldset>

      </form>

    </div> <!-- end login -->

  </div>

</body>
<?php
  $sqll = "SELECT photo_target FROM items WHERE item_id='23'";
  $results = $conn->query($sqll);
  

      while($row = $results->fetch_assoc()) {
          echo "<img src='".$row['photo_target']."'><br>";
      }
  
  

?>
  <a href="orders.php" style="margin-bottom:10px; margin-top:10px; text-decoration:none; color:white; background-color:black; font-size:20px; width:140px; padding:12px; border-radius:5px">See Orders</a>
  <form action="phpfiles/logout.include.php">
      <button type="submit" style=" text-decoration:none; color:white; background-color:rgb(36, 201, 15);; font-size:20px; width:140px; padding:12px; border-radius:5px">Logout</button>
</form>
</body>

</html>
