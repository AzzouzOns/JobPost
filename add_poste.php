<?php
require 'config.php';

if(isset($_POST["submit"])){

  $file =$_FILES['myfile']['tmp_name'];

    $filename = $_FILES['myfile']["name"];
    $destination = 'uploads/' . $filename;
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    echo  $extension ;
    if (!in_array($extension, ['zip', 'pdf', 'docx','png','jpg'])) {
      echo "You file extension must be .zip, .pdf or .docx";
  }else {if (move_uploaded_file($file, $destination)) {


    $name = $_POST["name"];

  $tel = $_POST["tel"];
  $region = $_POST["region"];
  $email = $_POST["email"];
  $type = $_POST["type"];
  $niveau = $_POST["niveau"];
  $experience = $_POST["experience"];
  $competence = $_POST["competence"];
  $genre = $_POST["genre"];

   
  $query = "INSERT INTO tb_jobs VALUES('','$name','$tel','$genre','$region','$email','$type','$niveau','$experience','$competence','$filename')";
  mysqli_query($conn, $query);
  if($conn->query($query)===true){
    header("Location: user_home.php");}
    
    else{
    echo"echec!!!";
}
   

 
  }else {
            echo "Failed to upload file.";
        }
}}

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

    <h2><span>F</span>IND A JOB <span>.</span> </h2>

  
    <label for="name">Last_name & First_name : </label>
      <input type="text" name="name" id = "name" required value=""> <br>
      <label for="tel"> Phone Number : </label>
      <input type="text" name="tel" id = "tel" required value=""> <br>
      <label>Genre :</label>
            <input type="radio" name="genre" value="femme"><label>Femme</label>
            <input type="radio" name="genre" value="Homme"><label>Homme</label><br>
      <label for="region">Region : </label>
      <input type="text" name="region" id = "region" required value=""> <br>
      <label for="email">Email  : </label>
      <input type="email" name="email" id = "email" required value=""> <br>
      <label for="type">employment: </label>
      <input type="text" name="type" id = "type" required value=""> <br>
      <label for="niveau">Study level : </label>
      <input type="text" name="niveau" id = "niveau" required value=""> <br>
      <label for="experience">Number of years of experience : </label>
      <input type="text" name="experience" id = "experience" required value=""> <br>
      <label for="competence"> Skills : </label>
      <input type="text" name="competence" id = "competence" required value=""> <br>
      <label >ADD Your CV : </label>
      <input type="file" name="myfile" id="myfile">
      <button type="submit" name="submit">Enregistrer</button>


    </form>
   
    <br>
  </body>
</html>
