<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Works</title>
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

<div class="container mt-3">
    <h3 class="mb-5">My works</h3>
    <div class="d-flex flex-wrap">
        <?php
        // Подключение к базе данных
        $hostname = 'localhost'; // Имя хоста базы данных
        $database = 'products'; // Имя базы данных
        $connection = mysqli_connect($hostname, 'root', '', $database);

        // Проверка подключения
        if (!$connection) {
            die("Ошибка подключения: " . mysqli_connect_error());
        }

        // SQL-запрос для выбора всех продуктов
        $sql = "SELECT * FROM products";
        $result = mysqli_query($connection, $sql);

        // Проверка, залогинен ли пользователь
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            // Если пользователь залогинен, отобразить кнопку "Просто приобрести"
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='card mb-4 shadow-sm'>";
                // Код для отображения продукта
                echo "<div class='card-header'>";
                echo "<h4 class='my-0 font-weight-normal'>" . $row['name'] . "</h4>";
                echo "</div>";
                echo "<div class='card-body'>";
                echo "<img src='" . $row['image_path'] . "' class='img-thumbnail'>";
                echo "<h1 class='card-title pricing-card-title'>" . $row['price'] . " € <small class='text-muted'></small></h1>";
                echo "<ul class='list-unstyled mt-3 mb-4'>";
                echo "<li>" . $row['description'] . "</li>";
                echo "</ul>";
                echo "<button type='button' class='btn btn-lg btn-block btn-outline-primary' onclick='window.location.href=\"Orders.php?id=" . $row['id'] . "\";'>Purchase</button>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            // Отображение продуктов
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='card mb-4 shadow-sm'>";
                echo "<div class='card-header'>";
                echo "<h4 class='my-0 font-weight-normal'>" . $row['name'] . "</h4>";
                echo "</div>";
                echo "<div class='card-body'>";
                echo "<img src='" . $row['image_path'] . "' class='img-thumbnail'>";
                echo "<h1 class='card-title pricing-card-title'>" . $row['price'] . " € <small class='text-muted'></small></h1>";
                echo "<ul class='list-unstyled mt-3 mb-4'>";
                echo "<li>" . $row['description'] . "</li>";
                echo "</ul>";
                echo "<button type='button' class='btn btn-lg btn-block btn-outline-primary' onclick='window.location.href=\"reg/SigningUp.php\";'>Log in for purchase</button>";
                echo "</div>";
                echo "</div>";
            }
        }

        // Закрытие соединения
        mysqli_close($connection);
        ?>
    </div>
</div>

<main>
</main>

<?php include('Footer.php'); ?>
</body>
</html>