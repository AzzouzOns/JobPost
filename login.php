<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE name = '$username' ");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];

      if($row["role"]=='admin'){
        header("Location: admin_home.php");

      }
      else{      header("Location: user_home.php");
      }
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="style2.css">

  <head>
    <meta charset="utf-8">
    <title><span>L</span>ogin .</title>
  </head>
  <body>
   
    <form class="" action="" method="post" autocomplete="off">
    
    <h2><span>L</span>ogin <span>.</span></h2>

    
      <label for="username"> User name : </label>
      <input type="text" name="username" id = "username" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <button type="submit" name="submit">Login </button>
      <a href="registration.php" class="ca"> Register
</a>

    </form>
    <br>
  </body>
</html>
