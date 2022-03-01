<?php
/**
* Template Name: Front Page
*
* @package Labmatilde
* @subpackage lam
* @since Lar Assistencial Matilde 1.0
*/
get_header(); ?>

<!-- SLIDE -->
<div class="row">
    <div class="carousel carousel-slider center">
        <div class="carousel-fixed-item center">
            <a class="btn waves-effect white grey-text darken-text-2">button</a>
        </div> <!-- carousel-item -->
        <div class="carousel-item red white-text" href="#one!">
            <h2>First Panel</h2>
            <p class="white-text">This is your first panel</p>
        </div> <!-- carousel-item -->
        <div class="carousel-item amber white-text" href="#two!">
            <h2>Second Panel</h2>
            <p class="white-text">This is your second panel</p>
        </div> <!-- carousel-item -->
        <div class="carousel-item green white-text" href="#three!">
            <h2>Third Panel</h2>
            <p class="white-text">This is your third panel</p>
        </div> <!-- carousel-item -->
        <div class="carousel-item blue white-text" href="#four!">
            <h2>Fourth Panel</h2>
            <p class="white-text">This is your fourth panel</p>
        </div> <!-- carousel-item -->
    </div> <!-- carousel -->
</div> <!-- row -->

<!-- SOCIAL INSTAGRAM -->

<div class="container">
    <div class="row">
        <div class="col s12 center">
            <a class="waves-effect waves-light btn-large"><i class="material-icons left">cloud</i>Faça uma doação</a>
            <a class="waves-effect waves-light btn-large"><i class="material-icons left">cloud</i>Apadrinhe o Lam</a>
            <a class="waves-effect waves-light btn-large"><i class="material-icons left">cloud</i>Compre uma cesta Básica</a>
        </div> <!-- col -->
    </div> <!-- row -->
</div> <!-- container -->


<?php
get_footer();