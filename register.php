<?php include('path.php'); ?>
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
    <title>Register</title>
</head>

<body>
    <?php include(ROOT_PATH . '/app/includes/header.php'); ?>
    <div class="auth-content">
        <form action="register.php" method="POST">
            <h2 class="form-title">Register</h2>

            <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
            <div>
                <label for="username">Username:</label>
                <input type="text" class="text-input" name="username" value="<?= $username; ?>">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" class="text-input" name="email" value="<?= $email; ?>">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" class="text-input" name="password" value="<?= $password; ?>">
            </div>
            <div>
                <label for="passwordConf">Repeat password:</label>
                <input type="password" class="text-input" name="passwordConf" value="<?= $passwordConf; ?>">
            </div>
            <div>
                <button type="submit" name="register-btn" class="btn btn-big">
                    Register
                </button>
            </div>
            <p>Or <a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></p>
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