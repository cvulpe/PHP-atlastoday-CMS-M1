<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/topics.php'); ?>

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
                <div class="post">
                    <img src="assets/images/plan.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">Start planning for your next vacation.</a></h4>
                        <i class="far fa-user">Chris Nemo</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 9, 2019</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/plan.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">Start planning for your next vacation.</a></h4>
                        <i class="far fa-user">Chris Nemo</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 9, 2019</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/plan.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">Start planning for your next vacation.</a></h4>
                        <i class="far fa-user">Chris Nemo</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 9, 2019</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/plan.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">Start planning for your next vacation.</a></h4>
                        <i class="far fa-user">Chris Nemo</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 9, 2019</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/plan.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">Start planning for your next vacation.</a></h4>
                        <i class="far fa-user">Chris Nemo</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 9, 2019</i>
                    </div>
                </div>
            </div>
        </div>
        <!--End Slider-->
        <!--Main Section-->
        <div class="content clearfix">
            <div class="main-content">
                <h1 class="recent-post-title">
                    Recent Posts
                </h1>
                <div class="post clearfix">
                    <img src="assets/images/travel.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">Get ready for your dream destination.</a></h3>
                        <i class="far fa-user">Chris Nemo</i>
                        &nbsp;
                        <i class="far fa-calendar">Apr 04, 2019</i>
                        <p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque porro,
                            natus commodi at dolor sint?
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="assets/images/travel.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">Get ready for your dream destination.</a></h3>
                        <i class="far fa-user">Chris Nemo</i>
                        &nbsp;
                        <i class="far fa-calendar">Apr 04, 2019</i>
                        <p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque porro,
                            natus commodi at dolor sint?
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="assets/images/travel.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">Get ready for your dream destination.</a></h3>
                        <i class="far fa-user">Chris Nemo</i>
                        &nbsp;
                        <i class="far fa-calendar">Apr 04, 2019</i>
                        <p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque porro,
                            natus commodi at dolor sint?
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="assets/images/travel.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">Get ready for your dream destination.</a></h3>
                        <i class="far fa-user">Chris Nemo</i>
                        &nbsp;
                        <i class="far fa-calendar">Apr 04, 2019</i>
                        <p class="preview-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque porro,
                            natus commodi at dolor sint?
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
            </div>
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.html" method="POST">
                        <input type="text" name="search-term" class="text-input" placeholder="Search">
                    </form>
                </div>
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $key => $topic) : ?>
                        <li><a href="#"><?= $topic['name']; ?></a></li>
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