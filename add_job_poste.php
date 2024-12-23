
<?php
require 'config.php';

if(isset($_POST["submit"])){
  $name = $_POST["name_S"];
  $tel = $_POST["tel_S"];
  $region = $_POST["region_S"];
  $email = $_POST["email_S"];
  $type = $_POST["type_S"];
  $niveau = $_POST["niveau_S"];
  $experience = $_POST["experience_S"];
  $competence = $_POST["competence_S"];
  $salaire = $_POST["salaire"];
  

      $query = "INSERT INTO tb_jobs_postes VALUES('','$name','$tel','$region','$email','$type','$niveau','$experience','$competence','$salaire')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      header("Location: user_home.php");
  
    }else {
      "<script> alert('Registration failed'); </script>";

        }


?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Website</title>
  </head>
  


<section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>Y</span>OUR <span>J</span>OB .</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="user_home.php" data-after="Home">Home</a></li>
            <li><a href="consulter_cvs.php" data-after="Projects">Job List</a></li>
            <li><a href="consulter_postes.php" data-after="About">Emloyers</a></li>

            <li><a href="logout.php" data-after="Contact">logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style2.css">

    <title>Registration</title>
  </head>
  <body>

    <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">

    <h2><span>A</span>DD A JOB <span>. </span></h2>

  
    <label for="name_S">Company : </label>
      <input type="text" name="name_S" id = "name_S" required value=""> <br>
      <label for="tel_S">Phone number: </label>
      <input type="text" name="tel_S" id = "tel_S" required value=""> <br>
      <label for="region_S">Region : </label>
      <input type="text" name="region_S" id = "region_S" required value=""> <br>
      <label for="email_S">Email: </label>
      <input type="email" name="email_S" id = "email_S" required value=""> <br>
      <label for="type_S"> employement : </label>
      <input type="text" name="type_S" id = "type_S" required value=""> <br>
      <label for="niveau_S">level of studies requested : </label>
      <input type="text" name="niveau_S" id = "niveau_S" required value=""> <br>
      <label for="experience_S">Number of years of professional experience required : </label>
      <input type="text" name="experience_S" id = "experience_S" required value=""> <br>
      <label for="competence_S">  Skills required : </label>
      <input type="text" name="competence_S" id = "competence_S" required value=""> <br>
      <label for="salaire">  Salary: </label>
      <input type="text" name="salaire" id = "salaire" required value=""> <br>
      <button type="submit" name="submit">ADD</button>


    </form>
   
    <br>
  </body>
</html>
