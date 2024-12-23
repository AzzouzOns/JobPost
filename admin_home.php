<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>My Website</title>
</head>

<body>
  
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
 
  <section id="hero">
    <div class="hero container">
      <div class="content">
      <h1>Welcome ADMIN  <br><?php echo $row["name"]; ?></h1>
        <a href="consulter_cvs_admin.php" type="button" class="cta">Job List</a>
        <a href="consulter_postes_admin.php" type="button" class="cta">Employers</a>
      </div>
    </div>
  </section>
  <section id="feature">
    <div class="title-text">
        <h1><span>A</span>bout <span>U</span>s</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Maxime unde nobis assumenda delectus voluptates, minus id ab,
           incidunt suscipit qui, tenetur repudiandae. Quod unde eius doloremque 
           earum eveniet ea fugit?</p>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Consequatur voluptates tempore, similique aliquid ullam sapiente 
             ipsum veniam ab totam? Possimus, neque? Magnam error recusandae 
             suscipit atque et reprehenderit rerum veritatis.</p>
            
    </div>
</section>
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>Y</span>Our <span>C</span>arrer</h1>
      </div>
      <h2>Contract Us :</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.facebook.com/"><img src="images/facebook-770688_640.webp" /></a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/?hl=fr"><img src="images/ins.webp" /></a>
        </div>
        <div class="social-item">
          <a href="https://fr.linkedin.com/"><img src="images/link.png" /></a>
        </div>
        
      </div>
      <p>OnsAzzouz@2022</p>
    </div>
  </section>
  
</body>

</html>