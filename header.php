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
  'menu_class'        => "left hide-on-med-and-down", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
  'menu_id'           => "nav-mobile", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
  'container'         => "lam_container", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
  'container_class'   => "lam_container_class", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
  'container_id'      => "lam_container_id", // (string) The ID that is applied to the container.
  'before'            => "texto que vem antes", // (string) Text before the link markup.
  'after'             => "texto que vem depois", // (string) Text after the link markup.
  'link_before'       => "link que vem antes", // (string) Text before the link text.
  'link_after'        => "link que vem depois", // (string) Text after the link text.
  'echo'              => "true", // (bool) Whether to echo the menu or return it. Default true.
  'depth'             => "0", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
  'theme_location'    => "primary_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
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
<?php wp_body_open(); ?>
<body <?php body_class(); ?>>

    <nav>

    <?php wp_nav_menu( $args ); ?>

  </nav>
  <?php 
  
  #get_search_form();



