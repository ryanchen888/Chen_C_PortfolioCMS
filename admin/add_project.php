<?php
require_once('../includes/connect.php');

//move_uploaded_file etc FIRST, as we need the new name
//save the name in $filename variable
$imageFileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
$target_dir = "uploads/";
$filename = uniqid() . "." . $imageFileType;
$target_file = $target_dir . $filename;

if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
    // 文件成功上传
} else {
    // 文件上传失败
    exit('File upload failed.');
}



$query = "INSERT INTO tbl_projects (case_study,project_background,image_url) VALUES (?,?,?)";

$stmt = $connection->prepare($query);
$stmt->bindParam(1, $_POST['case_study'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['project_background'], PDO::PARAM_STR);
$stmt->bindParam(3, $filename, PDO::PARAM_STR);

$stmt->execute();
$last_id = $connection->lastInsertId();
$stmt = null;
header('Location: project_list.php');
?>