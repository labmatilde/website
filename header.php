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
  'menu'              => "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
  'menu_class'        => "lam_menu_class", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
  'menu_id'           => "lam_menu_id", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
  'container'         => "lam_container", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
  'container_class'   => "lam_container_class", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
  'container_id'      => "lam_container_id", // (string) The ID that is applied to the container.
  'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
  'before'            => "texto que vem antes", // (string) Text before the link markup.
  'after'             => "texto que vem depois", // (string) Text after the link markup.
  'link_before'       => "link que vem antes", // (string) Text before the link text.
  'link_after'        => "link que vem depois", // (string) Text after the link text.
  'echo'              => "", // (bool) Whether to echo the menu or return it. Default true.
  'depth'             => "0", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
  'walker'            => "", // (object) Instance of a custom walker class.
  'theme_location'    => "primary_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
  'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>', // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
  'item_spacing'      => "preserve", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
)

print_r($args);


?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

  </head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right">Logo</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
  <?php

  wp_nav_menu( $args );
  get_search_form();



