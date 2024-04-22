<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karina php</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <?php include('../nav/NavForReg.php'); ?>
    </div>
</nav>
<main class="container mt-3">
    <h2>Sign in</h2>
    <form id="check" action="ProcessLogin.php" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Login</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
    <div id="error_message" style="color: red;"></div>
    <?php
    // Проверка наличия сообщения об ошибке
    if (isset($_SESSION['wrong_data'])) {
        echo '<div style="color: red;">' . $_SESSION['wrong_data'] . '</div>';
        unset($_SESSION['wrong_data']); // Очистка сообщения об ошибке после вывода
    }
    ?>
    <script src="../js/Check.js"></script>

    <h2>No account?</h2>
    <div>
        <button type="submit" class="btn btn-primary" onclick="window.location.href='ProcessRegister.php';">Register</button>
    </div>
    <hr>
    <h2>Sign up via social media</h2>
    <div class="row">
            <a href="#" class="btn btn-outline-primary">Google</a>
    </div>
</main>
<?php include('../nav/FootForReg.php'); ?>
</body>
</html>

