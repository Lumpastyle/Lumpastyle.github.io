<?php
$bodyclass = "demo";
require_once 'header.php'; ?>

<section class="demo-cover-primary">
    <img src="assets/img/cover-test.png" alt="">
</section>

<section class="demo-details"> <!-- start details -->
    <div class="demo-desc">
        <h3>Détails du projet</h3>
        <p>
            Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit.
        </p>
    </div>
    <div class="demo-infos">
        <h3>Rôle</h3>
        <ul>
            <li>Lead Designer</li>
            <li>Dev. Front-end</li>
        </ul>
        <h3>Année</h3>
        <div class="demo-year">2016-2017</div>
    </div>
    <div class="demo-skills">
        <h3>Compétences Engagées</h3>
        <ul>
            <li>HTML/CSS</li>
            <li>Javascript/jQuery</li>
            <li>Bootstrap 4</li>
            <li>Sketch</li>
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
    <a href=""><div class="nav-previous">Projet précedent</div></a>
    <a href=""><div class="nav-next">Projet suivant</div></a>
</div>

<div class="clear"></div>

<?php require_once 'footer.php';