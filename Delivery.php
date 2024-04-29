<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main page</title>
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
<?php
echo '<div class="delivery_menu">';
echo '<h1 class="head">Delivery</h1>';
echo '<div class="serviceoffer-body">';
echo 'The delivery time is from 1 business day after placing the order (if the item is in stock) to 15 days (if out of stock). An approximate delivery time will be sent to the email.<br><br>';
echo '<strong>Craftopia OÜ</strong>&nbsp;offers four different delivery methods for goods:&nbsp;<br><br>';
echo '<strong>Free delivery</strong><br>When ordering goods worth over 100 EUR, we will deliver the order within Tallinn for free. Also, if you wish to pick up the order by yourself, you will not pay for delivery too.&nbsp;<br><br>';
echo '<strong>Parcel lockers</strong><br>Itella SmartPost (<a href="https://my.smartpost.ee/new_shipment/" target="_blank">www.smartpost.ee/new_shipment</a>), Omniva (<a href="https://www.omniva.ee/eng" target="_blank">www.omniva.ee/eng</a>), DPD (<a href="https://www.dpd.com/ee/en/" target="_blank">https://www.dpd.com/ee/en/</a>)&nbsp;<br>In Estonia, goods are delivered to the nearest parcel locker of SmartPost, Omniva, or DPD. If the item does not fit into the parcel locker, delivery is carried out by courier to the address specified in the order for an additional fee. Courier delivery is available on workdays, and the delivery time is agreed with the customer by phone in advance.<br><br>';
echo '<strong>Post Office</strong>&nbsp;<br>Goods are delivered to the nearest post office according to the customer location. Notification is sent to the customer when the goods are already delivered to the post office. Pickup at the post office can be arranged for items weighing less than 30 kg and with dimensions not exceeding 180x80x60cm.<br><br>';
echo '<strong>Courier Delivery to Home or Office</strong>&nbsp;<br>Goods are delivered on workdays from 09:00 to 18:00. The delivery time is agreed with the customer by phone in advance.&nbsp;The goods are delivered to the entrance door of the customers building, weighing up to 30 kg. If the weight of the item exceeds 30 kg, delivery is possible only if the customer assists the courier in unloading the item. &nbsp;<strong>Delivery to upper floors is available for an additional fee. If the item is heavier than 30 kg or its longest side exceeds 120 cm, the cost of delivery for oversized items is calculated separately, and the customer will be contacted &nbsp;regarding the additional fee.</strong>';
echo '</div>';
echo '</div>';
?>
</main>
<?php include('Footer.php'); ?>
</body>
</html>