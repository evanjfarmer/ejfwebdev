<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Evanjfarmer_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="trees row">
		<img src="http://www.evanjfarmer.com/wp-content/uploads/2016/09/3leaves.jpg" alt="Black and White Leaves" width="1200" height="560" />
	</div>
	<div class="contact entry-content">
		<div class="row">
			<div class="small-8 large-6 columns">
				<?php echo do_shortcode('[contact-form-7 id="50" title="Contact form 1"]'); ?>
			</div>
			<div class="small-4 large-6 columns">
				<h1>Contact Us</h1>
			</div>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'evanjfarmer-theme' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->