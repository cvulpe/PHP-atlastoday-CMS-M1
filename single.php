<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php'); ?>

<?php
if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/deacd0cdf3.js" crossorigin="anonymous"></script>
    <!--Google Fonts-->
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?= $post['title']; ?> | AtlasToday</title>
</head>

<body>
    <!--Include Header-->
    <?php include_once(ROOT_PATH . "/app/includes/header.php"); ?>
    <!--Page Wrapper-->
    <div class="page-wrapper">
        <div class="content clearfix">
            <!--Main Content Wrapper-->
            <div class="main-content-wrapper">
                <div class="main-content-single">
                    <h1 class="post-title"><?= $post['title']; ?> | AtlasToday</h1>
                    <div class="post-content">
                        <?= html_entity_decode($post['body']); ?>
                    </div>
                </div>
            </div>
            <!--END Main Content Wrapper-->
            <!--Sidebar-->
            <div class="sidebar single">
                <div class="section popular">
                    <h2 class="section-title">Popular</h2>
                    <?php foreach ($posts as $p) : ?>
                    <!--Renamed var as "p" to avoid confusion between sidebar post and regular post-->
                    <div class="post clearfix">
                        <img src="<?= BASE_URL . '/assets/images/' . $p['image']; ?>" alt="" />
                        <a href="#" class="title">
                            <h4><?= $p['title']; ?></h4>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $topic) : ?>
                        <li><a
                                href="<?= BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?= $topic['name']; ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!--End Sidebar-->
        </div>
        <!--End Main Section-->
    </div>
    <!--End Page Wrapper-->
    <!--Footer-->

    <footer>
        <div class="footer-wrapper">
            <h5>Atlas &copy; 2020</h5>
            <ul>
                <li><a href="#"><img src="./icons/twitter.svg" alt=""></a></li>
                <li><a href="#"><img src="./icons/youtube.svg" alt=""></a></li>
                <li><a href="#"><img src="./icons/instagram.svg" alt=""></a></li>
            </ul>
        </div>
        <!--Include Footer.php-->
        <?php include_once(ROOT_PATH . "/app/includes/footer.php"); ?>