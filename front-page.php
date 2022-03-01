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

<!-- MISSÃO, VISÃO E VALORES -->

<div class="section teal lighten-2">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h2>Projeto sem fins lucrativos</h2>
                <p>A transformação do mundo em um lugar melhor como objetivo principal. O trabalho, na maior parte do tempo, fica por conta dos times de voluntários, que se doam para melhorar a vida de pessoas que muitas vezes nem conhecem. Vale dizer que o maior combustível desses projetos é a vontade humana de fazer o bem</p>
            </div>
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                        <h5 class="center">Speeds up development</h5>

                        <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">User Experience Focused</h5>

                        <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
                        <h5 class="center">Easy to work with</h5>

                        <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- section -->


<?php
get_footer();