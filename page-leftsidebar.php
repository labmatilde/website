<?php
/**
* 
* Template Name: left sidebar
*
* @package Labmatilde
* @subpackage lam
* @since Lar Assistencial Matilde 1.0
*/
?>
<?php get_header();?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="container">
	<div class="row">
		<div class="col s12 m8">
			<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
			<div class="content">
				<?php the_content(); ?>
			</div>
		</div> <!-- col -->
		<?php get_sidebar(); ?>
	</div> <!-- row -->
</div> <!-- container -->

<?php endwhile; ?>
<?php get_footer();?>