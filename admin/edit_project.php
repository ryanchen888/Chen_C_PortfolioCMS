<?php
require_once('../includes/connect.php');

$project_id = $_POST['project_id'];
$case_study = $_POST['case_study'];
$project_background = $_POST['project_background'];

// 处理文件上传
if (isset($_FILES['image']['name']) && $_FILES['image']['error'] == 0) {
    // 如果有新的图片上传
    $target_dir = "../images/";
    $imageFileType = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    $filename = uniqid() . '.' . $imageFileType;
    $target_file = $target_dir . $filename;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        $image_url = $filename;
    } else {
        echo "Sorry, there was an error uploading your file.";
        exit;
    }
} else {
    // 没有新图片上传，使用旧的图片URL
    $image_url = $_POST['old_image_url'];
}

$query = "UPDATE tbl_projects SET case_study = ?, image_url = ?, project_background = ? WHERE project_id = ?";
$stmt = $connection->prepare($query);
$stmt->execute([$case_study, $image_url, $project_background, $project_id]);

header('Location: project_list.php');
?>
