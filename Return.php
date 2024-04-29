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
    echo '<h1 class="head">Return Policy</h1>';
    echo '<div class="return">';
    echo '<p><strong>General Provisions</strong>';
    echo '<p> This return policy is governed by the legislation of the Republic of Estonia, including the Consumer Protection Act and other relevant regulatory acts.<br> This policy applies to goods purchased from Craftopia OÜ, except in cases where other arrangements are agreed upon individually.</p>';
    echo '<p><strong>Right to Return</strong>';
    echo '<p> The buyer has the right to return the goods purchased from Craftopia OÜ within 14 days from the date of receipt of the goods if the goods have not been used, show no signs of damage, and maintain their original appearance and packaging.</p>';
    echo '<p><strong>Return Conditions</strong>';
    echo '<p> To return the goods, the buyer must provide a document confirming the purchase (e.g., a cash receipt, invoice, etc.).<br> The goods must be returned in a saleable condition, in the same packaging as received, without signs of use or damage.</p>';
    echo '<p><strong>Refusal of Return</strong>';
    echo '<p> Craftopia OÜ reserves the right to refuse the return of goods if they have been used, damaged, or do not meet the return conditions established by this policy.<br> Refusal to return the goods may also be justified if the goods were made to the buyer\'s individual order or show obvious signs of use.</p>';
    echo '<p><strong>Return Procedure</strong>';
    echo '<p> To return the goods, the buyer must contact the customer service department of Craftopia OÜ to receive instructions for returning the goods.<br> After receiving and inspecting the returned goods, Craftopia OÜ will refund the amount paid for the goods, minus any shipping costs, within a reasonable period established by law.</p>';
    echo '<li><strong>Contact Information</strong></li><br>';
    echo '<li> For additional information or assistance regarding returns, customers can contact us using the following contact details:</li><br>';
    echo '<ul class="custom-list">
<li>Craftopia OÜ</li>
<li>Address: Randla 19, Tallinn, Estonia</li>
<li>Phone: +372 5304 7318</li>
<li>Email: craftopia@shop.ee</li>
</ul>';
    echo '</div>';
    ?>
</main>
<?php include('Footer.php'); ?>
</body>
</html>