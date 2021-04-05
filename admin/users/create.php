<?php include('../../path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");


adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <script src="https://kit.fontawesome.com/deacd0cdf3.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Pattaya|Poppins:400,500&display=swap" rel="stylesheet" />
    <!--Custom Styling-->
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <!--Admin Styling-->
    <link rel="stylesheet" href="../../assets/css/admin.css" />
    <title>Admin Section | Add Users</title>
</head>

<body>
    <?php include(ROOT_PATH . '/app/includes/adminHeader.php'); ?>
    <!--Admin Page Wrapper-->
    <div class="admin-wrapper">
        <!--Left Sidebar-->
        <?php include(ROOT_PATH . '/app/includes/adminSidebar.php'); ?>
        <!--End Left Sidebar-->
        <!--Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>
            <div class="content">
                <h2 class="page-title">Add User</h2>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                <form action="create.php" method="POST">
                    <div>
                        <label for="username">Username:</label>
                        <input type="text" class="text-input" name="username" value="<?= $username; ?>" />
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" class="text-input" name="email" value="<?= $email; ?>" />
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" class="text-input" name="password" value="<?= $password; ?>" />
                    </div>
                    <div>
                        <label for="passwordConf">Repeat password:</label>
                        <input type="password" class="text-input" name="passwordConf" value="<?= $passwordConf; ?>" />
                    </div>
                    <div>
                        <?php if (isset($admin) && $admin == 1) : ?>
                        <label>
                            <input type="checkbox" name="admin" checked>
                            Admin
                        </label>
                        <?php else : ?>
                        <label>
                            <input type="checkbox" name="admin">
                            Admin
                        </label>
                        <?php endif; ?>
                    </div>
                    <div>
                        <div>
                            <button type="submit" name="add-admin" class="btn btn-big">Add User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--End Admin Content-->
    </div>
    <!--End Admin Page Wrapper-->
    <!--Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"
        integrity="sha512-/DXTXr6nQodMUiq+IUJYCt2PPOUjrHJ9wFrqpJ3XkgPNOZVfMok7cRw6CSxyCQxXn6ozlESsSh1/sMCTF1rL/g=="
        crossorigin="anonymous"></script>
    <!--CKEditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    <!--Custom Script-->
    <script src="../../assets/js/script.js"></script>
</body>

</html>