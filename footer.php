		</div>  <!-- end content area -->
			<!-- footer -->
			<footer class="footer" role="contentinfo">
                <div class="col col85">
					<?php wp_nav_menu( array('menu' => 'footer navigation' )); ?>

                </div>
                <div class="col col15">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/art/emya-logo.svg" alt="Logo" width="100%" class="logo-img">
					</figure>
                     <a href="http://www.holidaycheck.de/reisetipp-Reiseinformationen+Deutsches+Auswandererhaus-zid_19544.html" style="float: right;padding-right:20px;">
                        <img src="http://dah-bremerhaven.de/wp-content/uploads/2015/01/holidaycheck.png" alt="Deutsches Auswandererhaus Top Bewertet bei Holidaycheck"  width="75" height="auto">
                    </a>
                </div>
				<div class="col col100">
				<p class="copyright">
					&copy; <?php echo date("Y"); ?> Copyright <?php bloginfo('name'); ?>
				</p>
				</div>
			</footer>


		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10932812-2', 'dah-bremerhaven.de');
  ga('send', 'pageview');

</script>

		<script src="<?php echo get_template_directory_uri(); ?>/js/uisearch.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
    	<script>
      		new UISearch( document.getElementById( 'sb-search' ) );
    	</script>
	</body>
</html>