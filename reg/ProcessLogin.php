<?php
session_start();

// Подключение к базе данных
$hostname = 'localhost';
$database = 'products';
$connection = mysqli_connect($hostname, 'root', '', $database);

// Проверка подключения
if (!$connection) {
    die("Error: " . mysqli_connect_error());
}

// Получение данных из формы
$username = $_POST['username'];
$password = $_POST['password'];

// Очистка и защита данных от SQL-инъекций
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

// Поиск пользователя в базе данных
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($connection, $sql);

// Проверка наличия пользователя в базе данных
if (mysqli_num_rows($result) == 1) {
    // Пользователь найден, устанавливаем сессию для сохранения состояния входа
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;
    header("Location: ../Index.php"); // Перенаправляем пользователя на страницу приветствия
    exit(); // Останавливаем выполнение скрипта
} else {
    $_SESSION['wrong_data'] = "Invalid username or password!";// Сохраняем сообщение об ошибке в сессии
    header("Location: SigningUp.php");
    // Не перенаправляем пользователя, а просто завершаем скрипт
    exit();
}

mysqli_close($connection);
?>
