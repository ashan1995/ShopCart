<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
  
  
      <link rel="stylesheet" href="CSS/signup.css">

  
</head>

<body>

  <body class="align">

  <div class="grid">

    <div id="login">

      <h2><span class="fontawesome-lock"></span>Sign Up</h2>

      <form action="phpfiles/signup.include.php" method="POST">

        <fieldset>

          <p><label for="Username">Username</label></p>
          <p><input type="text" id="Username" placeholder="Username" name="username"></p>

          <p><label for="Name">Name</label></p>
          <p><input type="text" id="Name" placeholder="Name"  name="name"></p>

          <p><label for="Address">Address</label></p>
          <p><input type="text" id="Address" placeholder="Address"  name="address"></p>

          <p><label for="No">Mobile No</label></p>
          <p><input type="number" id="No" placeholder="Mobile No"  name="mobile"></p>

          <p><label for="email">E-mail address</label></p>
          <p><input type="email" id="email" placeholder="mail@address.com"  name="email"></p>

          <p><label for="password">Password</label></p>
          <p><input type="password" id="password" placeholder="password"  name="password"></p>

          <p><label for="password">Retype Password</label></p>
          <p><input type="password" id="password" placeholder="password"></p>

          


          <p><input type="submit" value="Sign Up"></p>
          <a href="index.php" style="text-decoration:none; color:white; background-color:black; font-size:20px; width:140px; padding:12px; border-radius:5px">Back</a>
        </fieldset>

      </form>
      
    </div> <!-- end login -->

  </div>

</body>
  
  

</body>

</html>
