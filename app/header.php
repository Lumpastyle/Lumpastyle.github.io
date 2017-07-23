<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <?php
    if($bodyclass == "demo") { ?>
    <link rel="stylesheet" href="css/styledemo.css">
    <?php } ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/main-min.js"></script>
</head>

<body class="<?=$bodyclass?>">

<?php
    if($bodyclass != "demo") {?>

        <div class="hero"> <!-- start hero -->
            <header class="header">
                <div class="hero-logo">anthony<span class="blue">dias</span></div>
                <div class="hero-menu">
                    <ul>
                        <li class="hero-menu-item bold-font to-hide"><a href="#about">a propos</a></li>
                        <li class="hero-menu-item bold-font to-hide"><a href="#projects">projets</a></li>
                        <li class="hero-menu-item bold-font"><a href="contact.php">contact</a></li>
                    </ul>
                </div>
            </header>
            <h1 class="h1">Hi, I'm Anthony Dias,
                <div>a <span class="light blue">creative</span>, <span class="somatic blue">curious</span> and <span class="ultrabold blue">involved</span> worker.</div>
                <div>I'm an <span class="blue">UI Developer</span></div></h1>
        </div> <!-- end hero -->

    <?php } else { ?>

        <div class="hero"> <!-- start hero -->
            <header class="header">
                <div class="hero-logo left">anthonydias</div>
                <div class="hero-menu right">
                    <ul>
                        <li class="hero-menu-item bold-font white"><a href="index.php">retour à l'accueil</a></li>
                    </ul>
                </div>
            </header>

            <!-- <h1 class="h1 text-center"><?=$projectname?></h1> -->
        </div> <!-- end hero -->

    <?php } ?>

