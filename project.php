<!DOCTYPE html>
<html lang="en">
<?php
require_once('connect.php');
$stmt = $connection->prepare('SELECT * FROM tbl_projects ORDER BY project_id ASC');
$stmt->execute();

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/grid.css">
    <title>Portfolio Page</title>
</head>
<body>
    <div id="portfolio">
        <h2>Porjects</h2>
        <div id="pic-zoom">

        <?php

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo  '<div class="pic" id="pic'.$row['project_id'].'"><img class="lightbox-trigger" src="images/'.$row['image_url'].'" alt="'.$row['case_study'].'"><a id="pic'.$row['project_id'].'-title" href="case.php?id='.$row['project_id'].'">'.$row['case_study'].'</a></div>';
} 


        ?>







            
        </div>

        <div id="lightbox" class="lightbox">
            <span class="close-lightbox" id="closeLightbox">&times;</span>
            <img class="lightbox-content no-hover-effect" src="images/pf01.jpg" alt="Large Image 1">
        </div>
    </div>
    
</body>
</html>