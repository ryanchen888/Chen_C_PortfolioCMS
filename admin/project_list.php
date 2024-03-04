<!DOCTYPE html>
<html lang="en">

<?php
session_start();

if(!$_SESSION['username']) {
  header( 'Location: login_form.php');
}

require_once('../includes/connect.php');
$stmt = $connection->prepare('SELECT project_id,case_study FROM tbl_projects ORDER BY case_study ASC');
$stmt->execute();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Main Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">

</head>
<body>

<?php

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

  echo  '<p class="project-list">'.
  $row['case_study'].
  '<a href="edit_project_form.php?project_id='.$row['project_id'].'">edit</a>'.

  '<a href="delete_project.php?project_id='.$row['project_id'].'">delete</a></p>';
}

$stmt = null;

?>
<br><br><br>
<h3 id="list_title">Add a New Project</h3>
<form action="add_project.php" method="post" id="project_list" enctype="multipart/form-data">
    <label for="case_study">Case Study: </label>
    <input name="case_study" type="text" required><br><br>
    <label for="image">Project img: </label>
    <input name="image" type="file" required><br><br>
    <label for="project_background">Project Background: </label>
    <textarea name="project_background" required></textarea><br><br>
    <input name="submit" type="submit" value="Add">
</form>
<br><br><br>
<div id=logout_botton>
<a href="logout.php" id="logout">log out</a>
</div>
</body>
</html>
