<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");

$table = 'posts';
$topics = selectAll('topics');
$posts = selectAll($table);

$errors = array();
$id = '';
$title = '';
$body = '';
$topic_id = '';
$published = '';

if (isset($_GET['id'])) {
    $post = selectOne($table, ['id' => $_GET['id']]);
    $id = $post['id'];
    $title = $post['title'];;
    $body = $post['body'];
    $topic_id = $post['topic_id'];
    $published = $post['published'];
}

if (isset($_GET['del_id'])) {
    $count = delete($table, $_GET['del_id']);
    $_SESSION['message'] = "Post deleted succsesfully!";
    $_SESSION['type'] = "success";
    header("Location:" . BASE_URL . '/admin/posts/index.php');
    exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);

    $_SESSION['message'] = "Post published state change!";
    $_SESSION['type'] = "success";
    header('Location: ' . BASE_URL . "/admin/posts/index.php");
    exit();
}


if (isset($_POST['add-post'])) {
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
        $_POST['user_id'] = $_SESSION['id'];
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

if (isset($_POST['update-post'])) {
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
    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-post'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);

        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Post updated succsesfully!";
        $_SESSION['type'] = "success";
        header("Location:" . BASE_URL . '/admin/posts/index.php');
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}