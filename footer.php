					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="large-12 medium-12 columns">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
		    				<div class="row">
			    				<div class="large-6 medium-6 small-6 columns">
			    					<?php if ( function_exists( 'mc4wp_form' ) ) { mc4wp_form( '210' ); } ?>
			    				</div>
								<div class="large-6 medium-6 small-6 columns">
									<a href="https://www.evanjfarmer.com"><img class="ejfimg" src="/wp-content/uploads/2016/09/cropped-icon.jpg" alt="ejf webdev" width="200" height="200"/></a>
								</div>
							</div>

								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->