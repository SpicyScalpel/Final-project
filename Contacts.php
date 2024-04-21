<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts</title>
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
    <h1>Contacts</h1>
</div>

<p class="icons">
    <a href="https://www.facebook.com/kkulakova1/" target="_blank"><img src="img/facebook.png" alt="Facebook"></a>
    <a href="https://www.instagram.com/martyr_with_scalpel/" target="_blank"><img src="img/instagram.png" alt="Instagram"></a>
    <a href="tel:+37253047318"><img src="img/phone.png" alt="Phone">+372 5304 7318</a>
    <a href="mailto:karina.kulakova.97@gmail.com"><img src="img/email.png" alt="Email"></a>
</p>

<div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2028.2050607488086!2d24.68978747703757!3d59.44633177467118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46929476265277d3%3A0xafaa07c35e54af0e!2sRandla%2019%2C%2010311%20Tallinn!5e0!3m2!1sru!2see!4v1713473104189!5m2!1sru!2see"></iframe>
</div>
<?php
include('Footer.php'); //
?>
</body>
</html>

