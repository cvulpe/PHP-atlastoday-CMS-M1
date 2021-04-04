<header>
    <a href="<?= BASE_URL . '/index.php'; ?>" class="logo">
        <h1 class="logo-text"><span>Atlas</span>today</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
        <?php if (isset($_SESSION['id'])) : ?>
        <li>
            <a href="#">
                <i class="fa fa-user"></i>
                <?= $_SESSION['username']; ?>
                <i class="fa fa-chevron-down" style="font-size: 0.8em"></i>
            </a>
            <ul>
                <li><a href="<?= BASE_URL . '/logout.php'; ?>" class="logout">Logout</a></li>
            </ul>
        </li>
        <?php endif; ?>
    </ul>
</header>