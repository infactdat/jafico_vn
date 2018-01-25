<?php 
$copyright = ot_get_option('copyright');
$job_banner = ot_get_option('job_banner');
$form_banner_mobile = ot_get_option('form_banner_mobile');
$job_banner_mobile = ot_get_option('job_banner_mobile');
?>
					<!--footer-->
			        <footer class="footer">
						<div class="copy-right"><?php echo $copyright;?></div>
			        </footer>
			        <!--footer-end-->
	        



			<?php if ( is_mobile() ) : ?>
				<div class="footer_m pc-none">
					<?php if($form_banner_mobile): ?>
					    <a href="<?php echo get_home_url()?>/mailform/" target="_blank">
					        <img src="<?php echo $form_banner_mobile; ?>" />
					    </a>
					<?php endif; ?>
				    <?php if($job_banner_mobile): ?>
					    <a href="<?php echo get_home_url()?>/search-job/" target="_blank">
				    		<img src="<?php echo $job_banner_mobile; ?>" />
				    	</a>
				    <?php endif; ?>
				</div>
			<?php else: ?>

				<a href="#" class="backtotop">
			        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/backtotop.png" alt="back top">
			    </a>
			    <?php if(is_front_page()): ?>
					<?php if($job_banner): ?>
				    	<a class="job-banner" href="<?php echo get_home_url()?>/search-job/">
				    		<img src="<?php echo $job_banner; ?>" />
				    	</a>
			    	<?php endif; ?>
			    <?php endif; ?>
			<?php endif; ?>

			<?php if ( is_mobile() ) : ?>
				<div id="sp_slide">
				  <div class="slidemenu slidemenu-right">
				    <div class="slidemenu-body">
				      <div class="slidemenu-content">
				        <?php wp_nav_menu( array(
							'theme_location' => 'top'
						) ); ?>
				      </div>
				    </div>
				  </div>
				  <div class="pos">
						<span class="button menu-button-right">MAIN<br>MENU</span>
					</div>
				</div>

				<script>
				    var menu_right = SpSlidemenu({
				      main : '#wrap',
				      button: '.menu-button-right',
				      slidemenu : '.slidemenu-right',
				      direction: 'right'
				    });
				</script>
			<?php endif; ?>

		</div><!-- #content -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
