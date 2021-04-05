<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>
<?php
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
    <title>Admin Section | Manage Users</title>
</head>

<body>
    <!--Admin Header-->
    <?php include(ROOT_PATH . '/app/includes/adminHeader.php'); ?>
    <!--Admin Page Wrapper-->
    <div class="admin-wrapper">
        <!--Left Sidebar-->
        <?php include(ROOT_PATH . '/app/includes/adminSidebar.php'); ?>
        <!--End Left Sidebar-->
        <!--Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Users</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>
            <div class="content">
                <h2 class="page-title">Manage Users</h2>
                <?php include(ROOT_PATH . '/app/includes/messages.php') ?>
                <table>
                    <thead>
                        <th>N</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($adminUsers as $key => $user) : ?>
                        <tr>
                            <td><?= $key + 1; ?></td>
                            <td><?= $user['username']; ?></td>
                            <td><?= $user['email']; ?></td>
                            <td><a href="edit.php?id=<?= $user['id']; ?>" class="edit">Edit</a></td>
                            <td><a href="index.php?del_id=<?= $user['id']; ?>" class="delete">Delete</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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