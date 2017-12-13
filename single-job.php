<?php get_header(); ?>

<div class="page-wrap">
	<div class="container">
		<article id="single-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="single-job-wrap">
				<div class="job-detail-header">
			        <h2><?php the_title()?></h2>
			        <p class="job-number">Job No, <?php the_ID()?></p>
			    </div>
			    <div class="job-detail-body">
			        <p class="job-place">Place: <?php echo get_post_meta(get_the_ID(), 'job_place', true ) ?></p>
			        <p class="job-salary">Salary: <?php echo get_post_meta(get_the_ID(), 'job_salary', true ) ?></p>
			        <p class="job-position">position: <?php echo get_post_meta(get_the_ID(), 'job_salary', true ) ?></p>
			        <?php echo jaficofw_get_template_part('job/button', 'apply');?>

			        <div class="job-info">
			            <h2>Jobs （仕事の詳細）</h2>
			            <?php echo get_post_meta(get_the_ID(), 'job_information', true ) ?>
			        </div>

			        <div class="job-company-info">
			            <h2>Company info （会社概要）</h2>
			            <?php echo get_post_meta(get_the_ID(), 'job_company', true ) ?>
			        </div>

			        <div class="job-message">
			            <h2>Message （採用メッセージ）</h2>
			            <?php echo get_post_meta(get_the_ID(), 'job_message', true ) ?>
			        </div>

			        <div class="job-place">
			            <h2>Place （勤務地）</h2>
			            <?php echo get_post_meta(get_the_ID(), 'job_map', true ) ?><br>
			            <?php echo get_post_meta(get_the_ID(), 'job_location', true ) ?>
			        </div>
			    </div>
			</div>
		</article><!-- #post-## -->
	</div>
</div><!-- .wrap -->

<?php get_footer();
