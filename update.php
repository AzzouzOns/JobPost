
<?php

require 'config.php';

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$position = strpos($actual_link,'=');
$id_=substr($actual_link, $position+1,strlen($actual_link) - $position+2);
echo $id_;
 $sql = "SELECT * FROM tb_jobs_postes WHERE id=$id_";

 $result = mysqli_query($conn, $sql);
 $file = mysqli_fetch_assoc($result);
 if(isset($_POST["submit"])){
    $name = $_POST["name_S"];
    $tel = $_POST["tel_S"];
    $region = $_POST["region_S"];
    $email = $_POST["email_S"];
    $type = $_POST["type_S"];
    $niveau = $_POST["niveau_S"];
    $experience = $_POST["experience_S"];
    $competence = $_POST["competence_S"];
    
  
        $query="UPDATE `tb_jobs_postes` SET `name_S`='$name',`tel_S`='$tel',`region_S`='$region',`email_S`='$email',`tel_S`='$tel',`niveau_S`='$niveau',`type_S`='$type',`experience_S`='$experience',`competence_S`='$competence' WHERE `id` like '$id_'";

       
        mysqli_query($conn, $query);
        echo
        "<script> alert('Registration Successful'); </script>";
        header("Location: consulter_postes_admin.php");
    
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
            <li><a href="admin_home.php" data-after="Home">Home</a></li>
            <li><a href="#feature" data-after="Service">About Us</a></li>
            <li><a href="consulter_cvs_admin.php" data-after="Projects">Job List</a></li>
            <li><a href="consulter_postes_admin.php" data-after="About">Emloyers</a></li>
            <li><a href="#footer" data-after="Contact">Contact</a></li>

            <li><a href="logout.php" data-after="Contact">logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<html>
  
    <head>
         <title>Modification</title>
         <link rel="stylesheet" href="style2.css"/>
        <meta charset="UTF-8">
    </head>
    <body>
    <div class="form">
    <form method="POST" action="" >
    <h1>Formulaire de modification</h1>
    <label for="name_S">Société : </label>
      <input type="text" name="name_S" id = "name_S" required  value="<?php echo $file['name_S'];?>"> <br>
      <label for="tel_S">numéro du téléphone  : </label>
      <input type="text" name="tel_S" id = "tel_S" required value="<?php echo $file['tel_S'];?>"> <br>
      <label for="region_S">Région : </label>
      <input type="text" name="region_S" id = "region_S" required value="<?php echo $file['region_S'];?>"> <br>
      <label for="email_S">Email professionnel : </label>
      <input type="email" name="email_S" id = "email_S" required value="<?php echo $file['email_S'];?>"> <br>
      <label for="type_S">Type d'emploi : </label>
      <input type="text" name="type_S" id = "type_S" required value="<?php echo $file['type_S'];?>"> <br>
      <label for="niveau_S">niveau d'études demandé: </label>
      <input type="text" name="niveau_S" id = "niveau_S" required value="<?php echo $file['niveau_S'];?>"> <br>
      <label for="experience_S">Nombre d'années d'expérience professionnelle demandées : </label>
      <input type="text" name="experience_S" id = "experience_S" required value="<?php echo $file['experience_S'];?>"> <br>
      <label for="competence_S">Compétences exigées  : </label>
      <input type="text" name="competence_S" id = "competence_S" required value="<?php echo $file['competence_S'];?>"> <br>
      <button type="submit" name="submit">modifier</button>


    </form>
    </div>
    </body></html>