<?php
$bodyclass = "demo";
$projectname = "Tsoh Activities";
require_once 'header.php'; ?>

<section class="demo-cover-primary">
    <img src="assets/img/cover-test.png" alt="">
</section>

<section class="demo-details"> <!-- start details -->
    <div class="demo-desc">
        <h3 class="demo-title">Détails du projet</h3>
        <p>
            Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit.
        </p>
    </div>
    <div class="demo-infos">
        <h3 class="demo-title">Rôle</h3>
        <ul>
            <li class="demo-details-item">Lead Designer</li>
            <li class="demo-details-item">Dev. Front-end</li>
        </ul>
        <h3 class="demo-title">Année</h3>
        <div class="demo-year">2016-2017</div>
    </div>
    <div class="demo-skills">
        <h3 class="demo-title">Compétences Engagées</h3>
        <ul>
            <li class="demo-details-item">HTML/CSS</li>
            <li class="demo-details-item">Javascript/jQuery</li>
            <li class="demo-details-item">Bootstrap 4</li>
            <li class="demo-details-item">Sketch</li>
        </ul>
    </div>
</section> <!-- end details -->

<section class="demo-gallery"> <!-- start gallery -->
    <img src="assets/img/maquette-test.png" alt="" class="demo-cover-secondary">

    <ul>
        <li class="gallery-item"><img src="" alt=""></li>
        <li class="gallery-item"><img src="" alt=""></li>
        <li class="gallery-item"><img src="" alt=""></li>
        <li class="gallery-item"><img src="" alt=""></li>
    </ul>
</section> <!-- end gallery -->

<div class="demo-nav">
    <a href="demo-immovesting.php"><div class="nav-previous left text-left "><div class="nav-hover bold-font white">Projet précedent </div></div></a>
    <a href="demo-echopen.php"><div class="nav-next right text-right "><div class="nav-hover bold-font white">Projet suivant </div></div></a>
</div>

<div class="clear"></div>

<?php require_once 'footer.php';