<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: user_home.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE  email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$surname','$email','$password','user')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      header("Location: login.php");

    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style2.css">

    <title>Registration .</title>
  </head>
  <body>
    
    <form class="" action="" method="post" autocomplete="off">
    
    <h2><span>R</span>egistration <span>.</span></h2>
    
      <label for="name">Last name: </label>
      <input type="text" name="name" id = "name" required value=""> <br>
      <label for="surname">First name: </label>
      <input type="text" name="surname" id = "surname" required value=""> <br>
      <label for="email">Email: </label>
      <input type="email" name="email" id = "email" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <label for="confirmpassword">Confirm Password: </label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
      <button type="submit" name="submit">Save</button>
      <a href="login.php" class="ca">
      Already have an account?</a>

    </form>
    <br>
  </body>
</html>
