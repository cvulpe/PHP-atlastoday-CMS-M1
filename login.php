<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <script src="https://kit.fontawesome.com/deacd0cdf3.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Pattaya|Poppins:400,500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>

<body>
    <!--Include Header-->
    <?php include_once(ROOT_PATH . "/app/includes/header.php"); ?>
    <div class="auth-content">
        <form action="login.php" method="POST">
            <h2 class="form-title">Login</h2>
            <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
            <div>
                <label for="username">Username:</label>
                <input type="text" class="text-input" name="username" value="<?= $username; ?>">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" class="text-input" name="password" value="<?= $password; ?>">
            </div>
            <div>
                <button type="submit" name="login-btn" class="btn btn-big">
                    Login
                </button>
            </div>
            <p>Or <a href="<?= BASE_URL . '/register.php' ?>">Register</a></p>
        </form>
    </div>

    <!--Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"
        integrity="sha512-/DXTXr6nQodMUiq+IUJYCt2PPOUjrHJ9wFrqpJ3XkgPNOZVfMok7cRw6CSxyCQxXn6ozlESsSh1/sMCTF1rL/g=="
        crossorigin="anonymous">
    </script>
    <script src="assets/js/script.js"></script>
</body>

</html>