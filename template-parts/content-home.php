<?php
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<div class="container-fluid header_sidebar"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Widgets Area') ) : endif; ?></div><br>
			</div>
		&nbsp;
		<div class="row">
			<div class="intro small-12 medium-4 large-4 text-center columns">
				<a href="/about" class="about hollow button"><h4><strong>About</strong></h4></a>
				<div class="evanimg">
				<a href="/about"><img src="/wp-content/uploads/2016/09/aboutsquare.jpg" alt="Evan About Photo" width="250" height="250" /></a>
				</div><br>
			</div>
			<div class="intro small-12 medium-4 large-4 text-center columns">
				<a href="/projects" class="projects hollow button"><h4><strong>Projects</strong></h4></a>
				<div class="portfolioimg">
				<a href="/projects"><img src="/wp-content/uploads/2016/09/portfolioimg.png" alt="Portfolio Icon" width="250" height="250" /></a>
				</div><br>
			</div>
			<div class="intro small-12 medium-4 large-4 text-center columns">
				<a href="/contact" class="go hollow button"><h4><strong>Let's Go!</strong></h4></a>
				<div class="letsgoimg">
				<a href="/contact"><img src="/wp-content/uploads/2016/09/letsgoimg.jpg" alt="Man Running Icon" width="250" height="250" /></a>
				</div><br>
			</div>
		</div>
		&nbsp;
		<div class="callout-title">
			<div class="call row">
				<div class="columns small-12 medium-8">
				<h2><strong>Do you need a website for your small business, ecommerce store, or other online endeavors?</strong></h2></div>
			</div>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("extra-widget-area") ) : ?>

			<?php endif; ?><br>
			<div class="more row">
				<div class="columns medium-4"></div>
				<div class="columns small-12 medium-8">
				<h2><strong>Let's build a platform for your project or product that will engage your fans and increase your following.</strong></h2></div>
			</div>
			&nbsp;
		</div>
		<div class="iconic row">
			<div class="small-6 large-3 columns">
			<img class="icon" src="/wp-content/uploads/2016/10/img-crop.png" alt="Image Crop Icon" width="120" height="120" />
			<strong><p>web design & development</p></strong></div>
			<div class="small-6 large-3 columns">
			<img class="icon" src="/wp-content/uploads/2016/10/light-bulb.png" alt="Light Bulb Icon" width="120" height="120" /><br>
			<strong><p>idea creation & implementation</p></strong></div>
			<div class="small-6 large-3 columns">
			<img class="icon" src="/wp-content/uploads/2016/10/like.png" alt="Like Icon" width="120" height="120" /><br>
			<strong><p>social strategy & branding</p></strong></div>
			<div class="small-6 large-3 columns">
			<img class="basket-icon" src="/wp-content/uploads/2016/10/basket.png" alt="Basket Icon" width="120" height="120" />
			<strong><p>ecommerce solutions</p></strong></div>
			&nbsp;
			&nbsp;
		</div>
		<div class="home-slider row">
			<div class="large-12 columns">
				<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '181' ); } ?>
			</div>
		</div>
		<div class="callout">
	 		<h2 class="learn_more"><strong>Learn more about how you can do anything with WordPress!</strong></h2>
	 		&nbsp;
	  		<div class="row">
	  		<div class="learn small-12 medium-4 large-4 text-center columns">
	  			<img src="/wp-content/uploads/2016/09/chart.png" alt="Chart Icon" width="150" height="150" /><br>
	  			<br><h4><strong>More than 25% of the internet is powered by WordPress, and that number is growing!</strong></h4><h4><strong>Find out why it's the best...<strong></h4>
	  			<br><a href="/webdev-with-wordpress/" class="button">LEARN MORE</a><hr>
	  		</div>
			<div class="learn small-12 medium-4 large-4 text-center columns">
				<img src="/wp-content/uploads/2016/09/tablet.png" alt="Tablet Icon" width="150" height="150" /></br>
				<br><h4><strong>Responsive design, easy to implement for content managment, and lots of plug-ins and add-ons to help you do just about anything.</strong></h4>				
				<br><a href="/responsiveness/" class="button">LEARN MORE</a><hr>
	  		</div>
	  		<div class="learn small-12 medium-4 large-4 text-center columns">
	  			<img src="/wp-content/uploads/2016/09/magnifier.png" alt="Magnifier Icon"	width="150" height="150" /><br>
	  			<br><h4><strong>Search engine friendly, reliable, safe and secure, extensible, simple to use, and <a href="https://wordpress.org/showcase/">trusted by many</a>!</h4><h4><strong>You will love it too.</strong></h4>
	  			<br><a href="/value-of-a-website/" class="button">LEARN MORE</a><hr>
			</div>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->