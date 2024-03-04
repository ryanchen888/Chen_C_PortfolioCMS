<!DOCTYPE html>
<html lang="en">
<?php
require_once('../includes/connect.php');
$query = 'SELECT * FROM tbl_projects WHERE projects_id = :projectId';
$stmt = $connection->prepare($query);
$projectId = $_GET['project_id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">

</head>
<body>

 
<form action="edit_project.php" method="POST" id="edit">
<input name="project_id" type="hidden" value="<?php echo $row['project_id']; ?>">
    <label for="case_study">project title: </label>
    <input name="case_study" type="text" value="<?php echo $row['case_study']; ?>" required><br><br>
    <label for="image_url">project image: </label>
    <input name="image_url" type="text" required value="<?php echo $row['image_url']; ?>"><br><br>
    <label for="project_background">project background: </label>
    <textarea name="project_background" required><?php echo $row['project_background']; ?></textarea><br><br>
    <input name="submit" type="submit" value="Edit">
</form>
<?php
$stmt = null;
?>
</body>
</html>
