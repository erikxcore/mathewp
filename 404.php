<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Mathe
 * @since Mathe 1.0
 */

get_header();
?>
<div class="container">
	<div class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'MATHE' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'MATHE' ); ?></p>
		</div><!-- .page-content -->
	</div><!-- .error-404 -->
</div>
<?php
get_footer();
