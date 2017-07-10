<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/main-min.js"></script>
</head>

<body class="<?=$bodyclass?>">

<?php
    if($bodyclass == "homepage") {?>

        <div class="hero"> <!-- start hero -->
            <header class="header">
                <div class="hero-logo left">anthony<span class="blue">dias</span></div>
                <div class="hero-menu right">
                    <ul>
                        <li class="hero-menu-item bold-font"><a href="#about">a propos</a></li>
                        <li class="hero-menu-item bold-font"><a href="#projects">projets</a></li>
                        <li class="hero-menu-item bold-font"><a href="contact.php">contact</a></li>
                    </ul>
                </div>
            </header>
            <h1 class="h1">Your most unhappy customers are your greatest source of <span class="blue">learning</span>.</h1>
            <div class="hero-desc">
                - Bill Gates.
            </div>
        </div> <!-- end hero -->

    <?php } else { ?>

        <div class="hero"> <!-- start hero -->
            <header class="header">
                <div class="hero-logo">anthony<span>dias</span></div>
                <div class="hero-menu">
                    <ul>
                        <li class="hero-menu-item"><a href="index.php">retour à l'accueil</a></li>
                    </ul>
                </div>
            </header>

            <h1 class="h1">Nom du projet</h1>
        </div> <!-- end hero -->

    <?php } ?>

