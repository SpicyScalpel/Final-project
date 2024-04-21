<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="../js/ValidateForm.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <?php include('../nav/NavForReg.php'); ?>
    </div>
</nav>
<main class="container mt-5">
    <?php include('FormForRegistration.php'); ?>
</main>
<?php include('../nav/FootForReg.php'); ?>
</body>
</html>
