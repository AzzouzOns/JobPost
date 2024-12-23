<?php
require 'config.php';
$sql = "SELECT * FROM tb_jobs_postes";
$result = mysqli_query($conn, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);




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
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style_CVS.css">
  <title>Download files</title>
</head>
<body>

<table>
<thead>
  
    <th>Nom</th>
    <th>Numéro de téléphone</th>
    <th>Région</th>
    <th>email</th>
    <th>Type d'emploi</th>
    <th>Niveau</th>
    <th>Experience</th>
    <th>Competence</th>
</thead>
<tbody>
<?php foreach ($files as $file): ?>
    <tr>
   
      <td><?php echo $file['name_S']; ?></td>
      <td><?php echo $file['tel_S'] ; ?></td>
      <td><?php echo $file['region_S']; ?></td>
      <td><?php echo $file['email_S'] ; ?></td>
      <td><?php echo $file['type_S']; ?></td>   
       <td><?php echo $file['niveau_S'] ; ?></td>
      <td><?php echo $file['experience_S']; ?></td>
      <td><?php echo $file['competence_S']; ?></td>

    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>