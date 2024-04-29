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
echo '<h1 class="head">Payment</h1>';
echo '<div class="payment-body">';
echo '<p>For payment, you can choose a convenient payment method:</p>';
echo '<ul class="custom-list">
  <li>Cash on delivery</li>
  <li>Bank transfer</li>
  <li>Installment</li>
</ul>';
echo '<p><strong>Cash on delivery</strong><br>
      For the convenience of our customers, we also offer cash on delivery payment option. If you choose this payment method, you have the opportunity to pay for the goods in cash directly to the courier. You will also receive a receipt and an invoice. We would appreciate it if you could have the exact amount ready for the courier and provide change if necessary.</p>';
echo '<p><strong>Bank transfer</strong><br>     
By selecting this payment method, you have the option to pay for the goods via bank transfer.</p>';
echo '<p><strong>Payment details:</strong></p>';
echo '<ul class="custom-list">
<li>Recipient name: Craftopia OÜ</li>
<li>Recipient account: EE882200221064508123</li>
<li>Please specify the type of delivery and the quantity of purchased items in the payment reference.</li>
</ul>';
echo '<p>Upon confirmation of the payment order, you will receive a confirmation email and information about delivery.</p>';
echo '<p><strong>Installment</strong><br>
      Adult customers, legal entities, and regular customers of Craftopia can purchase items on installment starting from €100. 
      To request an installment payment plan, please send an email to craftopia@shop.ee. 
      We will respond to the installment payment request within 24 hours via email only on workdays.  
      Upon approval, we will send you an invoice for the first installment.  
      After making the initial deposit, we will contact you to arrange the delivery time to your home. You can sign the contract digitally. 
      For additional information, please contact us during business hours from 9:00 to 18:00 at 53047318, via email at craftopia@shop.ee or via any social media on our contact page.</p>';
echo '</div>';
echo '</div>';
?>
</main>
<?php include('Footer.php'); ?>
</body>
</html>