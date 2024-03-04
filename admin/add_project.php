<?php
require_once('../includes/connect.php');

$uploadOk = 1; // 用于跟踪文件上传是否成功
$target_dir = "../images/"; // 目标目录
$imageFileType = strtolower(pathinfo(basename($_FILES["image"]["name"]), PATHINFO_EXTENSION));
$filename = uniqid() . "." . $imageFileType; // 生成唯一文件名
$target_file = $target_dir . $filename; // 完整的目标路径

// 检查文件大小
if ($_FILES["image"]["size"] > 500000) { // 500KB 限制
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// 允许特定文件格式
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// 检查 $uploadOk 是否因为错误被设置为 0
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    // 如果一切正常，尝试上传文件
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // 文件上传成功，现在将项目信息插入数据库
        $query = "INSERT INTO tbl_projects (case_study, project_background, image_url) VALUES (?, ?, ?)";
        $stmt = $connection->prepare($query);
        $stmt->bindParam(1, $_POST['case_study'], PDO::PARAM_STR);
        $stmt->bindParam(2, $_POST['project_background'], PDO::PARAM_STR);
        $stmt->bindParam(3, $filename, PDO::PARAM_STR); // 注意：这里保存的是文件名，确保您的应用逻辑与之匹配

        if ($stmt->execute()) {
            echo "The new project has been added successfully.";
            header('Location: project_list.php'); // 重定向到项目列表页
        } else {
            echo "Error: " . $stmt->errorInfo()[2];
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
