<?php
/**
* Template Name: Header
*
* @package Labmatilde
* @subpackage lam
* @since Lar Assistencial Matilde 1.0
*/
?>
<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>


    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/materialize.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/lam.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title> 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">


    <?php #wp_head(); ?>
</head>

<body <?php body_class('body-lam'); ?>>