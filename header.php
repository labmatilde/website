<?php
/**
 * Header default theme.
 *
 * @link 
 *
 * @package lam
 * @subpackage lam
 * @since Lar Assistencial Matilde 1.0
 */


$args = array(
  'menu_class'        => "right hide-on-med-and-down", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
  'menu_id'           => "nav-mobile", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
  'echo'              => "true", // (bool) Whether to echo the menu or return it. Default true.
  'depth'             => "0", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
  'theme_location'    => "primary_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
  'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>', // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
  'item_spacing'      => "preserve", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
);

$args_mobile = array(
  'menu_class'        => "lam-mobile", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
  'menu_id'           => "menu-mobile", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
  'echo'              => "true", // (bool) Whether to echo the menu or return it. Default true.
  'container'         => "div", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
  'container_class'   => "sidenav", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
  'container_id'      => "mobile-lam", // (string) The ID that is applied to the container.
  'depth'             => "0", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
  'theme_location'    => "mobile_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
  'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>', // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
  'item_spacing'      => "preserve", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
);
?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

  </head>
<?php #wp_body_open(); ?>
<body <?php body_class(); ?>>

<nav class="nav-extended">
<div class="container">
  <div class="row">
    <div class="col s12">
    <div class="nav-wrapper">
<a href="<?php home_url(); ?>" class="brand-logo">
<?php if ( function_exists( 'the_custom_logo' ) ) {
  the_custom_logo();
} ?></a>
<a href="#" data-target="mobile-lam" class="sidenav-trigger"><i class="material-icons">menu</i></a>
<ul class="right hide-on-med-and-down">
<li><a href="sass.html"><i class="material-icons">search</i></a></li>
<li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
<li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
<li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
</ul>
</div>
<div class="nav-content">
<?php wp_nav_menu( $args ); ?>
</div>
    </div>
  </div>
</div>
</nav>

<?php 
wp_nav_menu( $args_mobile );

  
  #get_search_form();



