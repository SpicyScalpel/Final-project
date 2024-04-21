<?php
// Подключение к базе данных
$hostname = 'localhost';
$database = 'products';
$connection = mysqli_connect($hostname, 'root', '', $database);

// Проверка подключения
if (!$connection) {
    die("Error: " . mysqli_connect_error());
}

// Получение данных из формы
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$birthdate = $_POST['birthdate'];
$location = $_POST['location'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Очистка и защита данных от SQL-инъекций
$firstName = mysqli_real_escape_string($connection, $firstName);
$lastName = mysqli_real_escape_string($connection, $lastName);
$birthdate = mysqli_real_escape_string($connection, $birthdate);
$location = mysqli_real_escape_string($connection, $location);
$phone = mysqli_real_escape_string($connection, $phone);
$email = mysqli_real_escape_string($connection, $email);
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

// Выполнение SQL-запроса для вставки данных в базу данных
$sql = "INSERT INTO users (first_name, last_name, birthdate, location, phone, email, username, password) 
        VALUES ('$firstName', '$lastName', '$birthdate', '$location', '$phone', '$email', '$username', '$password')";

if (mysqli_query($connection, $sql)) {
    // Вывод сообщения об успешной регистрации и кнопки для перехода на регистрационную страницу
    echo "<div style='text-align:center;'>";
    echo "<h3>Registration successful!</h3>";
    echo "<a href='SigningUp.php' class='btn btn-primary'>Go to page for signing up</a>";
    echo "</div>";
} else {
    echo "Error! " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>