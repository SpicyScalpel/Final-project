<nav class="my-2 my-md-0 mr-md-3 container-fluid d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">
        <a href="Index.php" style="display: inline-block; border-radius: 50%;">
            <img src="img/logo.png" alt="KK project" width="100" height="100" style="border-radius: 50%;">
        </a>
    </h5>
    <a class="p-2 text-dark" href="Contacts.php">Contacts</a>
    <a class="p-2 text-dark" href="MyWorks.php">Products</a>
    <a class="p-2 text-dark" href="AboutMe.php">About me</a>
    <a class="p-2 text-dark" href="About.php">About</a>
    <a href="Orders.php" class="shop-icon">
        <img src="img/storeIcon.png" alt="Shop">
    </a>

    <?php
    session_start();
    // Проверяем, авторизован ли пользователь
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        // Получаем имя пользователя из сессии
        $username = $_SESSION['username'];

        // Определяем время суток и соответствующее приветствие
        $time = date("H");
        if ($time < 12) {
            $greeting_message = "Good morning, $username!";
        } else if ($time < 18) {
            $greeting_message = "Good afternoon, $username!";
        } else if ($time < 24) {
            $greeting_message = "Good evening, $username!";
        } else {
            $greeting_message = "Good night, $username!";
        }

        // Выводим приветственное сообщение
        echo '<a href="UserProfile.php">' . $greeting_message . '</a>';

        echo '<span class="ml-2"></span>';
        ?>
            <style>
                .ml-2 {
                    margin-left: 10px; /* Измените значение по вашему усмотрению */
                }
            </style>
        <?php
        // Выводим кнопку "Log out"
        echo '<a class="btn btn-outline-danger ml-2" href="log/Logout.php">Log out</a>';
    } else {
        // Пользователь не авторизован, выводим кнопку "Log in"
        echo '<a class="btn btn-outline-primary ml-auto" href="reg/SigningUp.php">Log in</a>';
    }
    ?>
</nav>
