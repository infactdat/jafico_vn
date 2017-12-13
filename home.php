<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<div id="wrap">
<i class="fa fa-handshake-o fa-fw" aria-hidden="true"></i>
	<?php if(is_mobile()): ?>
        <?php if(get_field('banner_sp')) : ?>
            <section class="top-banner">
                <img src="<?php $image = get_field('banner_sp'); echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']?>" />
            </section>
        <?php endif;?>
    <?php endif;?>

    <section class="section-1">
        <div class="container">
            <?php if(get_field('sec1_title')) : ?>
				<h2 class="sec-title"><?php the_field('sec1_title'); ?></h2>
			<?php endif; ?>
            <?php if( have_rows('sec1_repeater') ): ?>
				<ul>
					<?php while( have_rows('sec1_repeater') ): the_row(); 
	        			$text = get_sub_field('text');
					?>
						<li><span><?php echo $text; ?></span></li>
					<?php   endwhile;?>
				</ul>
			<?php endif;?>
            <div class="center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/arrow_01.png" alt="arrow">
            </div>
        </div>
    </section>

	<?php if(get_field('sec2_title')) : ?>
        <section class="section-2">
            <div class="container clearfix">
                <h2><?php the_field('sec2_title'); ?></h2>
            </div>
        </section>
    <?php endif;?>

        <section class="section-3" id="link1">
            <div class="container">
                <h2 class="sec-title"><span><?php the_field('sec3_sub_title'); ?></span><?php the_field('sec3_title'); ?></h2>
                <div class="box-wrap">
                    <?php the_field('sec3_content'); ?>
                </div>
            </div>
        </section>

        <section class="section-4" id="link2">
            <h2 class="sec-title"><span><?php the_field('sec4_sub_title'); ?></span><?php the_field('sec4_title'); ?></h2>
            <div class="container">
                <div class="box-wrap clearfix">

					<?php if( have_rows('sec4_repeater') ): ?>
						<?php while( have_rows('sec4_repeater') ): the_row(); 
						$icon = get_sub_field('icon');
						$title = get_sub_field('title');
						?>
							<div class="item">
								<h3>
									<img src="<?php echo $icon['url']; ?>" alt="<?php echo $title; ?>" />
									<span><?php echo $title; ?></span>
								</h3>
								<?php if( have_rows('text_repeater') ): ?>
									<ul>
										<?php while( have_rows('text_repeater') ): the_row(); 
										$text = get_sub_field('text');
										?>
											<li><?php echo $text; ?></li>
										<?php endwhile; ?>
									</ul>
							    <?php endif; ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

                </div>
                <div class="button sp-none center">
                    <a href="/mailform/" target="_blank"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button/sec4_button.png"
                                alt="Đăng ký tại đây"></a>
                </div>
            </div>
        </section>

        <section class="section-5" id="link3">
            <h2 class="sec-title"><span><?php the_field('sec5_sub_title'); ?></span><?php the_field('sec5_title'); ?></h2>
            <div class="box-wrap">

               <?php if( have_rows('sec5_repeater') ): ?>
					<?php while( have_rows('sec5_repeater') ): the_row(); 
					$icon = get_sub_field('icon');
					$title = get_sub_field('title');
					$text = get_sub_field('text');
					$image = get_sub_field('image');
					?>
						<div class="item">
							<div class="container">
								<h3><img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" />
									<span><?php echo $title; ?></span>
								</h3>
								<div class="clearfix">
	                                <div class="img">
	                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
	                                </div>
	                                <div class="txt">
	                                    <?php echo $text; ?>
	                                </div>
	                            </div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

            </div>

        </section>


        <section class="section-7" id="link4">
            <h2 class="sec-title"><span><?php the_field('sec7_sub_title'); ?></span><?php the_field('sec7_title'); ?></h2>
            <div class="container">

                <?php if( have_rows('sec7_repeater') ): ?>
					<?php while( have_rows('sec7_repeater') ): the_row(); 
					$image = get_sub_field('image');
					$title = get_sub_field('title');
					$text = get_sub_field('text');
					
					?>
						<div class="item">
                            <div class="img">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                            </div>
                            <div class="txt">
                            	<h3><?php echo $title; ?></h3>
                                <?php echo $text; ?>
                            </div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

            </div>
            <div class="button sp-none center">
                <a href="/mailform/" target="_blank"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button/sec4_button.png"
                            alt="Đăng ký tại đây"></a>
            </div>
        </section>


        <section class="section-8" id="link5">
            <h2 class="sec-title"><span><?php the_field('sec8_sub_title'); ?></span><?php the_field('sec8_title'); ?></h2>
            <div class="container">
                <?php if( have_rows('sec8_repeater') ): ?>
					<?php while( have_rows('sec8_repeater') ): the_row(); 
					$question = get_sub_field('question');
					$answer = get_sub_field('answer');
					
					?>
						<dl>
							<dt><?php echo $question; ?></dt>
							<dd><?php echo $answer; ?></dd>
						</dl>  
					<?php endwhile; ?>
				<?php endif; ?>


                <div class="button sp-none">
                    <a href="/mailform/" target="_blank"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button/sec4_button.png"
                                alt="Đăng ký tại đây"></a>
                </div>
            </div>
        </section>


        <section class="section-9" id="link6">
            <h2 class="sec-title"><span><?php the_field('sec9_sub_title'); ?></span><?php the_field('sec9_title'); ?></h2>
            <div class="container">
            	<?php the_field('sec9_content'); ?>
            </div>
        </section>

</div>

<?php get_footer(); ?>
