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
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Horizontal Halves - Startup</title>
    <meta name="description" content="">

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

  </head>
<?php #wp_body_open(); ?>
<body <?php body_class(); ?> style="background-color:#67a6a2;">

<!-- Navbar -->
<nav class="navbar dark absolute">
  <div class="nav-wrapper">
    <a href="horizontal-half.html" class="brand-logo"><i class="icon-diamond white-text"></i></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li class="active"><a class="dropdown-button" href="#!" data-activates="pages" data-constrainWidth="false" data-belowOrigin="true">Pages<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="blog.html">Blog</a></li>
      <li><a href="team.html">Team</a></li>
      <li><a href="docs/about.html">Docs</a></li>
      <li><a href="#">Buy Now!</a></li>
    </ul>

    <ul id="pages" class="dropdown-content">
      <li><a class="active" href="horizontal-half.html">Horizontal Halves</a></li>
      <li><a href="sierra.html">Zoom Out</a></li>
      <li><a href="circle-reveal.html">Circle Reveal</a></li>
      <li><a href="phone-wall.html">Phone Wall</a></li>
      <li><a href="element-transitions.html">Element Transitions</a></li>
      <li><a href="basic-elements.html">Basic Elements</a></li>
      <li><a href="card-shuffle.html">Shuffle</a></li>
      <li><a href="postcards.html">Postcards</a></li>
    </ul>

    <a href="#" data-activates="slide-out" class="button-collapse right"><i class="material-icons white-text">menu</i></a>
  </div>
</nav>

<ul id="slide-out" class="side-nav">
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
            <a class="collapsible-header waves-effect waves-teal active">Pages</a>
            <div class="collapsible-body">
                <ul>
                    <li><a class="active" href="horizontal-half.html">Horizontal Halves</a></li>
                    <li><a href="sierra.html">Zoom Out</a></li>
                    <li><a href="circle-reveal.html">Circle Reveal</a></li>
                    <li><a href="phone-wall.html">Phone Wall</a></li>
                    <li><a href="element-transitions.html">Element Transitions</a></li>
                    <li><a href="basic-elements.html">Basic Elements</a></li>
                    <li><a href="card-shuffle.html">Shuffle</a></li>
                    <li><a href="postcards.html">Postcards</a></li>
                </ul>
            </div>
            </li>
        </ul>
    </li>
    <li><a class="waves-effect waves-teal" href="blog.html">Blog</a></li>
    <li><a class="waves-effect waves-teal" href="team.html">Team</a></li>
    <li><a class="waves-effect waves-teal" href="docs/about.html">Docs</a></li>
    <li><a class="waves-effect waves-teal" href="#">Buy Now!</a></li>
</ul>



