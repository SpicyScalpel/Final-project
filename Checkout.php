<?php

require __DIR__."/vendor/autoload.php";

$stripe_secret_key = "sk_test_51P8pnhHrKqD5PjyYGUdWRFMK73B1Vc4p0LV6HQMZ0USvlkmDN7Dl7t7bHhQc75M4yWykKpKAnnfseAEHSjOjq8Wt00ZsbuYhyY";

\Stripe\Stripe::setApiKey($stripe_secret_key);

// Проверяем, передана ли общая сумма в параметрах запроса
if (isset($_GET['total'])) {
    $total = $_GET['total'];
    // Если общая сумма передана, создаем объект Checkout Session с информацией о продукте
    $checkout_session = \Stripe\Checkout\Session::create([
        "mode" => "payment",
        "success_url" => "http://localhost:63342/Index.php/PaymentSuccess.php",
        "line_items" => [
            [
                "quantity" => 1,
                "price_data" => [
                    "currency" => "eur",
                    "unit_amount" => $total * 100, // Преобразуем общую сумму в центы
                    "product_data" => [
                        "name" => "Order"
                    ]
                ]
            ]
        ]
    ]);

    // Перенаправляем на URL платежной сессии Stripe
    http_response_code(303);
    header("Location: " . $checkout_session->url);
    exit; // Добавлено для прекращения выполнения скрипта после перенаправления
} else {
    // Если общая сумма не передана, выводим сообщение об ошибке
    echo "Total amount is not provided.";
}

?>
