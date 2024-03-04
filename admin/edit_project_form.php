<!DOCTYPE html>
<html lang="en">
<?php
require_once('../includes/connect.php');
$projectId = isset($_GET['project_id']) ? $_GET['project_id'] : 0;
$query = 'SELECT * FROM tbl_projects WHERE project_id = :projectId';
$stmt = $connection->prepare($query);
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    echo "Project not found";
    exit; // 如果没有找到项目，停止脚本运行
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
</head>
<body>

<form action="edit_project.php" method="POST" id="edit" enctype="multipart/form-data">
    
    <input type="hidden" name="project_id" value="<?php echo htmlspecialchars($row['project_id']); ?>">

    <label for="case_study">Project Title: </label>
    <input id="case_study" name="case_study" type="text" value="<?php echo htmlspecialchars($row['case_study']); ?>" required><br><br>

    <label for="image">Project Image (optional): </label>
    <input id="image" name="image" type="file"><br><br>
    <small>Current Image: <?php echo htmlspecialchars($row['image_url']); ?></small><br><br>

    <label for="project_background">Project Background: </label>
    <textarea id="project_background" name="project_background" required><?php echo htmlspecialchars($row['project_background']); ?></textarea><br><br>

    <input name="submit" type="submit" value="Edit">
</form>

<?php $stmt = null; ?>
</body>
</html>
