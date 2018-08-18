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
		<img src="https://www.evanjfarmer.com/wp-content/uploads/2016/10/contact-header.jpg" alt="Blocks" width="1200" height="560" />
	&nbsp;
	</div>
	<div class="entry-content">
		<div class="contact-info row">
			<h1>Let's build something!</h1><br>
			<div class="small-12 large-6 columns">
				<h2>If you'd like more info...</h2>
				<?php echo do_shortcode('[caldera_form id="CF580ae4a72d264"]'); ?>
			</div>
			<div class="contact small-12 large-6 columns">
				<img class="contact-smartphone" src="https://www.evanjfarmer.com/wp-content/uploads/2016/10/contact-smartphone.jpg" alt="Smartphone Icon" width="240" height="240" />
				<div>
				&nbsp;
			<h2>Contact Us</h2>
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