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
    <img src="/wp-content/uploads/2016/10/blue-leaves.jpg" alt="Blue Leaves" width="1400" height="560" />
  </div>
  &nbsp;
  <div class="about entry-content">
    <div class="row">
      <div class="services small-12 large-4 columns">
        <h3>AT YOUR SERVICE</h3></a>
        <hr><br>
        <img src="/wp-content/uploads/2016/09/evanandkoren.jpg" alt="Evan and Koren" width="300" height="300" /><br><br>
        <h4><i>our team</i></h4><br>
        <h5>Koren and Evan Farmer have been working together for the last ten years, in marriage and in parenthood...but also artistically and more recently, through entrepreneurship.</h5><br><h5>Evan has been using WordPress for blogging and photo sharing, as a business development tool and CMS since 2011; and in the last few years, for professional web design and development as well.</h5><br><h5>Being versatile and experienced with various tools for design, Koren can help with logo creation, color scheme selection, and other visual elements.</h5><br>
      <hr>
      </div>
      <div class="services small-12 large-4 columns">
        <h3>OFFERINGS</h3></a>
        <hr><br>
        <img src="/wp-content/uploads/2016/09/EMap1.jpg" alt="Map" width="300" height="300"/><br><br>
        <h4><i>what we do</i></h4><br>
        <h5>Evan and Koren will work together to craft a beautiful, responsive, functional, and very useful website for you. We use WordPress to help you keep fresh content up and engage with your fans and friends across all web and social platforms!</h5><br><h5>Koren takes care of the design work, while Evan maps the plans for your site, covering everything from domain and hosting choices, to the handling of security, site backups, updates, maintanence, and analytics.</h5><br>
        <h5><a href="/contact">Get in Touch</a> with us and let's talk about a project you'd like to start!</h5><br>
      <hr>
      </div>
    <div class="services small-12 large-4 columns">
        <h3>THE MISSION</h3></a>
        <hr><br>
        <img src="/wp-content/uploads/2016/09/farmer-family.jpg"alt="Farmer Family" width="300" height="300"/><br><br>
        <h4><i>our passion</i></h4><br>
        <h5>Our goal is to make peoples' lives better by sharing our skills and experiences. If you're a business owner or entrepreneur, we will make your customers' online experience better by improving the web presence and visibility of your brand.</h5><br><h5>We want to help you engage more with your audience and build community, both online and offline. We'll take care of the online part so you can do what you do best...take good care of your customers.</h5><br><br><h5>Let's explore the possibilities together!</h5><br>&nbsp;
      <hr>
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