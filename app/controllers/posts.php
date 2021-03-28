<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");

$table = 'posts';
$topics = selectAll('topics');
$posts = selectAll($table);
$errors = array();
$title = '';
$body = '';
$topic_id = '';
$published = '';

if (isset($_POST['add-post'])) {
    //dd($_FILES['image']['name]);
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $imgName = time() . '_' . $_FILES['image']['name'];
        $imgDestination = ROOT_PATH . '/assets/images/' . $imgName;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $imgDestination);

        if ($result) {
            $_POST['image'] = $imgName;
        } else {
            array_push($errors, "Failed to upload the image!");
        }
    } else {
        array_push($errors, "Post image required.");
    }

    if (count($errors) === 0) {
        unset($_POST['add-post']);
        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);

        $post_id = create($table, $_POST);
        $_SESSION['message'] = "Post created succsesfully!";
        $_SESSION['type'] = "success";
        header("Location:" . BASE_URL . '/admin/posts/index.php');
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}