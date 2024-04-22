<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karina php</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src=""></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <?php include('nav/Navigation.php'); ?>
    </div>
</nav>
<main>
    <div class="container mt-5">
        <?php
        // Проверяем, авторизован ли пользователь
        if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
            // Если пользователь не авторизован, перенаправляем на страницу входа
            header("Location: ../reg/SigningUp.php");
            exit();
        }

        // Подключение к базе данных
        $hostname = 'localhost';
        $database = 'products';
        $username = 'root';
        $connection = mysqli_connect($hostname, $username, '', $database);

        // Проверка подключения
        if (!$connection) {
            die("Error: " . mysqli_connect_error());
        }

        // Получение имени пользователя из сессии
        $username = $_SESSION['username'];

        // Запрос к базе данных для получения данных пользователя
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($connection, $sql);

        // Проверка наличия данных пользователя
        if (mysqli_num_rows($result) == 1) {
            // Получение данных пользователя
            $userData = mysqli_fetch_assoc($result);
            ?>
            <div class="cards">
                <div class="card-header">
                    <h2 class="card-title">User Profile</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" value="<?php echo $userData['first_name']; ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Surname</label>
                        <input type="text" class="form-control" value="<?php echo $userData['last_name']; ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="text" class="form-control" value="<?php echo $userData['birthdate']; ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Country</label>
                        <input type="text" class="form-control" value="<?php echo $userData['location']; ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" value="<?php echo $userData['phone']; ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="<?php echo $userData['email']; ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" value="<?php echo $userData['username']; ?>" disabled>
                    </div>
                    <!-- Добавьте другие поля профиля пользователя по аналогии -->
                </div>
            </div>
            <?php
        } else {
            echo '<p>User data not found</p>';
        }

        mysqli_close($connection);
        ?>
    </div>
</main>
<?php include('Footer.php'); ?>
</body>
</html>