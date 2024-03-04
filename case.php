<!DOCTYPE html>
<?php


require_once('connect.php');

$id = $_GET['id']; 
$projectStmt = $connection->prepare("SELECT * FROM tbl_projects WHERE project_id = :id");
$projectStmt->bindValue(':id', $id, PDO::PARAM_INT);
$projectStmt->execute();
$project = $projectStmt->fetch(PDO::FETCH_ASSOC);

$mediaStmt = $connection->prepare("SELECT * FROM tbl_media WHERE project_id = :id");
$mediaStmt->bindValue(':id', $id, PDO::PARAM_INT);
$mediaStmt->execute();
$mediaItems = $mediaStmt->fetchAll(PDO::FETCH_ASSOC);


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/grid.css">
    <title>Case Study</title>
</head>
<body>
    <header id="case-header">
            <h2>CASE STUDY</h2>
            <h3> ------ <?php echo $project['case_study']; ?></h3>
    </header>



    <?php foreach ($mediaItems as $index => $media): ?>
    <?php if ($index == 0): ?>
        <div class="project-bg">
            <img src="images/<?php echo $media['file_name']; ?>" alt="<?php echo $project['case_study']; ?>">
            <h2>Project Background</h2>
            <p><?php echo $project['project_background']; ?></p>
        </div>
    <?php elseif ($index == 1): ?>
        <div class="design-process">
            <img src="images/<?php echo $media['file_name']; ?>" alt="<?php echo $project['case_study']; ?>">
            <h2>Design Process</h2>
            <p><?php echo $project['design_process']; ?></p>
        </div>
        <?php elseif ($index == 2): ?>
        <div class="challenge">
            <img src="images/<?php echo $media['file_name']; ?>" alt="<?php echo $project['case_study']; ?>">
            <h2>Challenges and Solutions</h2>
            <p><?php echo $project['challenges_solutions']; ?></p>
        </div>
        <?php elseif ($index == 3): ?>
        <div class="results">
            <img src="images/<?php echo $media['file_name']; ?>" alt="<?php echo $project['case_study']; ?>">
            <h2>Results</h2>
            <p><?php echo $project['results']; ?></p>
        </div>
        <?php elseif ($index == 4): ?>
        <div class="learned">
            <img src="images/<?php echo $media['file_name']; ?>" alt="<?php echo $project['case_study']; ?>">
            <h2>Reflection and Lessons Learned</h2>
            <p><?php echo $project['reflection_lessons_learned']; ?></p>
        </div>
    <?php endif; ?>
<?php endforeach; ?>

1












    

    






    <!-- <div class="project-bg">
        <img src="images/Project Background_p.jpg" alt="">
        <h2>Project Background</h2>
        <p>This is an exciting project, as designing dynamic 3D graphics is always interesting and challenging. The task involves utilizing Cinema 4D software to construct a personalized arena showcase and capturing an exhilarating video for it.</p>
    </div>

    <div class="design-process">
        <img src="images/Design Process_p.png" alt="">
        <h2>Design Process</h2>
        <p>After receiving the task requirements, what came to my mind was not just a grand and expansive scene with intricate structures and scattered lights but the content of the video. This implies that the arena must have an engaging theme.</p>
        <p>After receiving assistance from the professor, I confirmed my idea to create content with a competitive nature. While many people choose sports similar to instructional videos—competitive sports being a great option—I first thought of the competitive game I enjoy, World of Warcraft.</p>
        <p>The process of choosing a theme can be quite a dilemma, but once the theme is established, everything progresses smoothly. This is also a very interesting part because electronic games often offer more imaginative possibilities than real-world competitive sports.</p>
    </div>

    <div class="challenge">
        <h2>Challenges and Solutions</h2>
        <img src="images/Challenges and Solutions_p.jpg" alt="">
        <p>As a widely popular online game that has been around for many years, its resources are abundant. However, the distinctive art design and the vast, expansive game background posed challenges for this task.</p>
        <p>The logos of both factions are overly complex.
            It's challenging to determine the timing of key events in the promotional video.
            Artistic requirements for lighting and material textures pose difficulties in this task.</p>
        <p>Especially concerning the issue of material textures, it's crucial to strike a balance between realism and the virtual scale. The lighting should not be too dim, yet excessive brightness might compromise its distinctive features.</p>
    </div>

    <div class="results">
        <h2>Results</h2>
        <img src="images/Results_p.jpg" alt="">
        <p>After repeatedly examining the game textures and content, I had a research direction, particularly studying some scenes that professionals recreated using Unreal Engine 5. The stunning realism achieved through Unreal's reset effect provided excellent affirmation and inspiration for my ideas.</p>
    </div>

    <div class="learned">
        <img src="images/Reflection and Lessons Learned_p1.jpg" alt="">
        <h2>Reflection and Lessons Learned</h2>
        <p>1.Insufficient understanding of material textures.</p>
        <p>2.Adequate preparation and research are necessary before initiating the object creation process to ensure a well- thought-out approach at each step.</p>
        <p>3.Perfect handling of lighting is essential; different lighting setups can create drastically different effects for the same object.</p>
        <img src="images/Reflection and Lessons Learned_p2.jpg" alt="">
    </div> -->
</body>
</html>