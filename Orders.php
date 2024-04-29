<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <?php include('nav/Navigation.php'); ?>
    </div>
</nav>
<main>
    <?php
    if (!isset($_SESSION['selected_products'])) {
        $_SESSION['selected_products'] = array();
    }

    // Подключение к базе данных
    $hostname = 'localhost'; // Имя хоста базы данных
    $database = 'products'; // Имя базы данных
    $connection = mysqli_connect($hostname, 'root', '', $database);

    // Проверка подключения
    if (!$connection) {
        die("Ошибка подключения: " . mysqli_connect_error());
    }

    // Проверяем, есть ли идентификатор продукта в параметрах запроса
    if (isset($_GET['id'])) {
        $product_id = $_GET['id'];
        if (!in_array($product_id, $_SESSION['selected_products'])) {
            $_SESSION['selected_products'][] = $product_id;
        }
    }

    if (isset($_GET['remove_id'])) {
        // Если есть параметр remove_id, удаляем соответствующий продукт из сессии
        $remove_id = $_GET['remove_id'];
        $index = array_search($remove_id, $_SESSION['selected_products']);
        if ($index !== false) {
            unset($_SESSION['selected_products'][$index]);
        }
    }

    if (isset($_SESSION['selected_products']) && !empty($_SESSION['selected_products'])) {
        echo "<div class='product-container'>";
        foreach ($_SESSION['selected_products'] as $product_id) {
            $sql = "SELECT * FROM products WHERE id = $product_id";
            $result = mysqli_query($connection, $sql);
            if (mysqli_num_rows($result) > 0) {
                $product = mysqli_fetch_assoc($result);
                echo "<div class='product-row'>";
                echo "<div class='product-image'>";
                echo "<img src='" . $product['image_path'] . "' class='img-thumbnail'>";
                echo "</div>";
                echo "<div class='product-details'>";
                echo "<span class='remove-product' onclick='removeProduct($product_id)'>&times;</span>";
                echo "<h4>" . $product['name'] . "</h4>";
                echo "<h3>€" . $product['price'] . "</h3>";
                echo "<p>" . $product['description'] . "</p>";
                echo "</div>"; // Закрываем product-details
                echo "</div>"; // Закрываем product-row
            }
        }
        echo "</div>"; // Закрываем product-container
        // Выводим контейнер для суммирования общей суммы и кнопок
        echo "<div class='total-container'>";
        $total = 0; // Общая сумма
        foreach ($_SESSION['selected_products'] as $product_id) {
            $sql = "SELECT price FROM products WHERE id = $product_id";
            $result = mysqli_query($connection, $sql);
            if (mysqli_num_rows($result) > 0) {
                $price = mysqli_fetch_assoc($result)['price'];
                $total += $price; // Добавляем цену продукта к общей сумме
            }
        }
        echo "<p class='total-price'>Total: €" . number_format($total, 2) . "</p>";
        ?>
        <div class="action-buttons">
            <button type="button" class="btn btn-lg btn-secondary mr-2" onclick="window.location.href='MyWorks.php'">Back to products</button>
            <form method="get" action="Checkout.php" class="d-inline">
                <input type="hidden" name="total" value="<?php echo $total; ?>"> <!-- Передаем общую сумму в Checkout.php -->
                <button type="submit" class="btn btn-lg btn-danger">Pay now</button>
            </form>
        </div>
        </div>
        <?php
    } else {
        echo "<div class='container' style='display: flex; justify-content: center; align-items: center; height: auto;'>";
        echo "<div class='content' style='text-align: center;'>";
        echo "<div class='product-not-found'>Products are removed!</div>";
        echo "<button type='button' class='btn btn-lg btn-outline-primary' onclick='window.location.href=\"MyWorks.php\";'>Back to products</button>";
        echo "</div>";
        echo "</div>";
    }

    // Закрываем соединение с базой данных
    mysqli_close($connection);
    ?>
</main>
<?php include('Footer.php'); ?>

<script>
    function removeProduct(productId) {
        window.location.href = "Orders.php?remove_id=" + productId;
    }
</script>

</body>
</html>
