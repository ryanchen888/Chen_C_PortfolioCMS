<?php
require_once('../includes/connect.php');
$query = 'DELETE FROM tbl_projects WHERE project_id = :projectId';
$stmt = $connection->prepare($query);
$projectId = $_GET['project_id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$stmt = null;
header('Location: project_list.php');
?>