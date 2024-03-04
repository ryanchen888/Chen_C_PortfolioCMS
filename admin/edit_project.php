<?php
require_once('../includes/connect.php');
$query = "UPDATE tbl_projects SET case_study = ?,image_url = ?,project_background=? WHERE project_id = ?";

$stmt = $connection->prepare($query);

$stmt->bindParam(1, $_POST['project_id'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['case_study'], PDO::PARAM_STR);
$stmt->bindParam(3, $_POST['image_url'], PDO::PARAM_STR);
$stmt->bindParam(4, $_POST['project_background'], PDO::PARAM_INT);

$stmt->execute();
$stmt = null;
header('Location: project_list.php');
?>
