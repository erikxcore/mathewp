<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Mathe
 * @since Mathe 1.0
 */

get_header();
?>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php  the_content(); ?>

<?php endwhile; else: ?>
    <p><?php _e('Sorry, no pages matched your criteria.'); ?></p>
<?php endif; ?>


<?php
get_footer();
