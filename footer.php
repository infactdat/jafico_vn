<?php 
$copyright = ot_get_option('copyright');
$job_banner = ot_get_option('job_banner');
?>
					<!--footer-->
			        <footer class="footer">
						<div class="copy-right"><?php echo $copyright;?></div>
			        </footer>
			        <!--footer-end-->
	        



			<?php if ( is_mobile() ) : ?>
				<?php if(get_field('footer_banner_mobile')) : ?>
					<div class="footer_m pc-none">
					    <a href="/mailform/" target="_blank">
					        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/picture/footer_m.png" alt="Gửi câu hỏi tới hệ thống">
					    </a>
					</div>
				<?php endif; ?>

			<?php else: ?>

				<a href="#" class="backtotop">
			        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/backtotop.png" alt="back top">
			    </a>
			    <?php if(is_front_page()): ?>
			    	<a class="job-banner" href="<?php echo get_home_url()?>/search-job/">
			    		<img src="<?php echo $job_banner; ?>" />
			    	</a>
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
