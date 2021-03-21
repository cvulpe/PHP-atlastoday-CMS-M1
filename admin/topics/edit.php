<?php include('../../path.php'); ?>
<?php include(ROOT_PATH . '/app/controllers/topics.php'); ?>


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
    <title>Admin Section | Edit Topics</title>
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
                <a href="create.php" class="btn btn-big">Add Topic</a>
                <a href="index.php" class="btn btn-big">Manage Topics</a>
            </div>
            <div class="content">
                <h2 class="page-title">Edit Topics</h2>
                <form action="edit.php" method="POST">
                    <input type="hidden" name="id" value="<?= $id; ?>">
                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                    <div>
                        <label>Name:</label>
                        <input type="text" name="name" class="text-input" value="<?= $name; ?>" />
                    </div>
                    <div>
                        <label>Description:</label><br />
                        <textarea name="description" id="body"><?= $description; ?></textarea>
                    </div>
                    <div>
                        <button type="submit" name="update-topic" class="btn btn-big">Update Topic</button>
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