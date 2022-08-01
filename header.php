<?php
/**
* @package Labmatilde
* @subpackage lam
* @since Lar Assistencial Matilde 1.0
*/
?>
<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>


    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/icon.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/materialize.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/lam.css">


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title> 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">


    <?php wp_head(); ?>
    <?php do_action( 'wpseo_head' );  ?>
</head>

<body <?php body_class('body-lam'); ?>>


<!-- TOP MENU -->
<div id="topbar" class="menu-top-bar hide-on-med-and-down">
    <div class="container">
        <div class="nav-wrapper">
            <ul class="topbar">
                <li class="list-top"><i class="material-icons">account_balance</i><span class="content-top">CHAVE
                        PIX: 40.416.297/0001-95</span></li>
                <li class="list-top"><i class="material-icons">call</i><a class="link-top" href="#"><span
                            class="content-top">(11) 93719-0613</span></a></li>
                <li class="list-top"><i class="material-icons">call</i><a class="link-top" href="#"><span
                            class="content-top">(11) 2053-0090</span></a></li>
                <li class="list-top"><i class="material-icons">email</i><a class="link-top"
                        href="mailto:contato@larassistencialmatilde.com.br"><span
                            class="content-top">contato@larassistencialmatilde.com.br</span></a></li>
            </ul>
        </div>
    </div>
</div>

<!-- NAV MENU -->
<nav>
    <div class="container">
        <div class="nav-wrapper">
            <a href="<?= get_home_url(); ?>" class="brand-logo"><img class="logo-img"
                    src="<?= get_template_directory_uri(); ?>/assets/images/logo_lam_claro.png" alt=""></a>
            <a href="#" data-activates="mobile-lam" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="#voluntarios">Seja um Voluntario</a></li>
                <li><a href="#eventos">Eventos</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="#doe" class="waves-effect waves-light btn">Faça uma doação</a></li>
            </ul>

            <ul class="side-nav" id="mobile-lam">
                <li><img class="logo-mobile" src="<?= get_template_directory_uri(); ?>/assets/images/logo_lam_claro.png" alt=""></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="#voluntarios">Seja um Voluntario</a></li>
                <li><a href="#eventos">Eventos</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="#doe">Faça uma doação</a></li>
                <li><span class="pix-mobile">CHAVEPIX: 40.416.297/0001-95</span></li>
                <li><a href="tel:+5511937190613">(11) 93719-0613</a>
                </li>
                <li><a href="tel:+551120530090">(11) 2053-0090</a>
                </li>
                <li><a href="mailto:contato@larassistencialmatilde.com.br">contato@larassistencialmatilde.com.br</a>
                </li>
            </ul>
        </div>
    </div>
</nav>