<?php
/**
* Template Name: Singlepage
*
* @package Labmatilde
* @subpackage lam
* @since Lar Assistencial Matilde 1.0
*/

get_header(); 

if ( have_posts() ) : while ( have_posts() ) : the_post();

get_footer();