<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/topics.php'); ?>
<?php
$posts = array();
$postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
    $posts = getPostsByTopicId($_GET['t_id']);
    $postsTitle = "You searched for posts under: " . $_GET['name'];
} else if (isset($_POST['search-term'])) {
    $postsTitle = "You searched for: " . $_POST['search-term'];
    $posts = searchPosts($_POST['search-term']);
} else {
    $posts = getPublishedPosts();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <script src="https://kit.fontawesome.com/deacd0cdf3.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Pattaya|Poppins:400,500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Blog</title>
</head>

<body>
    <!--Include Header-->
    <?php include_once(ROOT_PATH . "/app/includes/header.php"); ?>
    <?php include_once(ROOT_PATH . "/app/includes/messages.php"); ?>

    <!--Page Wrapper-->
    <div class="page-wrapper">
        <!--Post Slider-->
        <div class="post-slider">
            <h1 class="slider-title">Trending posts</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>
            <div class="post-wrapper">
                <?php foreach ($posts as $post) : ?>
                <div class="post">
                    <img src="<?= BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php?id=<?= $post['id']; ?>"><?= $post['title']; ?></a></h4>
                        <i class="far fa-user"><?= $post['username']; ?></i>
                        &nbsp;
                        <i class="far fa-calendar"><?= date('F j, Y', strtotime($post['created_at'])); ?></i>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!--End Slider-->
        <!--Main Section-->
        <div class="content clearfix">
            <div class="main-content">
                <h1 class="recent-post-title">
                    <?= $postsTitle; ?>
                </h1>
                <?php foreach ($posts as $post) : ?>
                <div class="post clearfix">
                    <img src="<?= BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.php?id=<?= $post['id']; ?>"><?= $post['title']; ?></a></h3>
                        <i class="far fa-user"><?= $post['username']; ?></i>
                        &nbsp;
                        <i class="far fa-calendar"><?= date('F j, Y', strtotime($post['created_at'])); ?></i>
                        <p class="preview-text"><?= html_entity_decode(substr($post['body'], 0, 150) . '...'); ?></p>
                        <a href="single.php?id=<?= $post['id']; ?>" class="btn read-more">Read More</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.php" method="POST">
                        <input type="text" name="search-term" class="text-input" placeholder="Search">
                    </form>
                </div>
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $key => $topic) : ?>
                        <li><a
                                href="<?= BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?= $topic['name']; ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
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