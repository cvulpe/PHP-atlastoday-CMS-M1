<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); ?>

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
    <title>Admin Section | Add Posts</title>
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
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>
            <div class="content">
                <h2 class="page-title">Add Post</h2>
                <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
                <form action="create.php" method="POST" enctype="multipart/form-data">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" class="text-input" value="<?= $title; ?>" />
                    </div>
                    <div>
                        <label>Body</label>
                        <textarea id="editor" name="body"><?= $body; ?></textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input" />
                    </div>
                    <div>
                        <label>Topic</label>
                        <select name="topic_id" class="text-input">
                            <option value=""></option>
                            <?php foreach ($topics as $key => $topic) : ?>
                            <?php if (!empty($topic_id) && $topic_id == $topic['id']) : ?>
                            <option selected value="<?= $topic['id']; ?>"><?= $topic['name']; ?></option>
                            <?php else : ?>
                            <option value="<?= $topic['id']; ?>"><?= $topic['name']; ?></option>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <?php if (empty($published)) : ?>
                        <label>
                            <input type="checkbox" name="published">
                            Publish
                        </label>
                        <?php else : ?>
                        <label>
                            <input type="checkbox" name="published" checked>
                            Publish
                        </label>

                        <?php endif; ?>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-big" name="add-post">Add Post</button>
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