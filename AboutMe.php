<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About author</title>
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
    <section id="about" class="sek">
        <div class="box">
            <div class="about-content">
                <div class="image-container">
                    <img src="img/photo1.jpg" alt="My Image">
                    <div class="small-image-container">
                        <img src="img/code.gif" alt="My Small Image">
                    </div>
                </div>
                <div class="text-container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit risus nec turpis congue, at dapibus dui laoreet.</p>
                    <button type="button" class='btn btn-lg btn-block btn-outline-primary' onclick='window.location.href="Contacts.php";'>My contacts</button>
                </div>
            </div>
        </div>
    </section>
    <section id="main" class="sek">
        <div class="container">
            <h2>MY BEST PROJECTS</h2>
            <div class="pages-grid">
                <a href="https://karinakulakova22.thkit.ee/Lipud/Lipud.html">
                    <img src="img/html.png" alt="HTML" class="custom-img">
                </a>
                <a href="https://karinakulakova22.thkit.ee/Lego/Yoda.html">
                    <img src="img/javascript.jpg" alt="Java" class="custom-img">
                </a>
                <a href="https://karinakulakova22.thkit.ee/Arvestustoo/login.php">
                    <img src="img/php.png" alt="PHP" class="custom-img">
                </a>
                <a href="https://karinakulakova22.thkit.ee/wp/">
                    <img src="img/wordpress.png" alt="Wordpress" class="custom-img">
                </a>
            </div>
        </div>
    </section>
    <section id="main" class="sek">
        <div class="container">
            <h2>MAIN PAGES</h2>
            <div class="main-grid">
                <div class="myweb">
                    <a href="https://karinakulakova22.thkit.ee/index.html">
                        <img src="img/html-css.gif" alt="CSS" class="custom-img">
                    </a>
                    <p>My website</p>
                </div>
                <div class="myweb">
                    <a href="https://folioka.wordpress.com/">
                        <img src="img/wordpress-dribbble.gif" alt="WORDPRESS" class="custom-img">
                    </a>
                    <p>My first WordPress</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('Footer.php'); ?>
</body>
</html>