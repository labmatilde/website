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
<html lang="pt-br">

<head>


    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/materialize.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/lam.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LAM - Lar Assistencial Matilde</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class('body-lam'); ?>>