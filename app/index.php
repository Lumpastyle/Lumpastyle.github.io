<?php
$bodyclass = "homepage";
require_once 'header.php'; ?>

<section id="about" class="about"> <!-- start about -->
    <h2 class="h2"><span class="blue">A propos</span> de moi</h2>
    <p class="about-desc">
        Etudiant en 2ème année de Bachelor Web à <span>HETIC</span>, actuellement UX Designer chez Immovesting, je suis à la <span>recherche d’une alternance</span> pour Octobre 2017 en tant que Designer UI. Passionné d'<span>esport</span> et de jeux vidéos, j'aime relever les défis et la <span>compétition</span> est un moteur pour moi, que ce soit dans la vie ou dans les jeux.
        <br>
        <a class="link" href="javascript:void(0)">Télécharger mon CV</a>
    </p>
    <div class="bio_pic"></div>
</section> <!-- end about -->


<section id="projects" class="projects"> <!-- start projects -->
    <h2 class="h2 text-center">Mes <span class="blue">projets</span></h2>

    <ul class="project-list">
        <li class="project-item">
            <a href="demo-immovesting.php">
                <div class="project-image"><img src="assets/img/immovesting-logo.svg" alt="logo_immovesting"></div>
                <div class="project-name"><span class="">Immovesting</span>, refonte de la charte</div>
            </a>
        </li>
        <li class="project-item">
            <a href="demo-tsoh.php">
                <div class="project-image"><img src="assets/img/tsoh_logo.png" alt="logo_tsoh"></div>
                <div class="project-name"><span class="">Tsoh Activities</span>, redesign onepage</div>
            </a>
        </li>
        <li class="project-item">
            <a href="demo-echopen.php">
                <div class="project-image"><img src="assets/img/imv_logo.png" alt="logo_imv"></div>
                <div class="project-name"><span class="">echOpen</span>, design et création de l'app</div>
            </a>
        </li>
    </ul>
</section> <!-- end projects -->

<?php require_once 'footer.php';