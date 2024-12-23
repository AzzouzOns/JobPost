<?php
require 'config.php';
$sql = "SELECT * FROM tb_jobs";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM tb_jobs WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['CV'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);
        exit;
    }else {
        echo 'nooo';
    }

}
if (isset($_GET['file_delete_id'])) {
    $id_delete = $_GET['file_delete_id'];
    $sql = "DELETE FROM tb_jobs WHERE id= $id_delete";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Location: consulter_cvs_admin.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

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
            <li><a href="consulter_cvs_admin.php" data-after="Projects">Job List</a></li>
            <li><a href="consulter_postes_admin.php" data-after="About">Emloyers</a></li>

            <li><a href="logout.php" data-after="Contact">logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<html>
  
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
    <th> CV </th>
</thead>
<tbody>
<?php foreach ($files as $file): ?>
    <tr>
   
      <td><?php echo $file['name']; ?></td>
      <td><?php echo $file['tel'] ; ?></td>
      <td><?php echo $file['region']; ?></td>
      <td><?php echo $file['email'] ; ?></td>
      <td><?php echo $file['type']; ?></td>   
       <td><?php echo $file['niveau'] ; ?></td>
      <td><?php echo $file['experience']; ?></td>
      <td><?php echo $file['competence']; ?></td>
      <td><a href="consulter_cvs_admin.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
     <td><a  href="consulter_cvs_admin.php?file_delete_id=<?php echo $file['id'] ?>"> <button>delete</button></a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>