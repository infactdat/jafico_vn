<?php get_header(); ?>
<div class="page-wrap">
	<div class="container">
		<article id="single-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="single-job-wrap">
				<div class="job-detail-header">
			        <p class="job-number">Job No, <?php the_ID()?></p>
			        <div class="table-info">
			        	<div class="info">
			        		<table>
			        			<tbody>
			        				<tr>
			        					<td>Job Title</td>
			        					<td><?php the_title()?></td>
			        				</tr>
			        				<tr>
			        					<td>Place</td>
			        					<td><?php echo get_post_meta(get_the_ID(), 'job_place', true ) ?></td>
			        				</tr>
			        				<tr>
			        					<td>Salary</td>
			        					<td><?php echo get_post_meta(get_the_ID(), 'job_salary', true ) ?></td>
			        				</tr>
			        				<tr>
			        					<td>Position</td>
			        					<td><?php echo get_post_meta(get_the_ID(), 'job_position', true ) ?></td>
			        				</tr>
			        			</tbody>
			        		</table>
			        	</div>
			        	<div class="btn">
			        		<a class="single-job-btn" href="<?php echo get_home_url();?>/mailform">Apply now<i class="fa fa-angle-right"></i></a>
			        	</div>
			        </div>
			    </div>
			    <div class="job-detail-body">

			        <div class="job-info">
			            <h2>Jobs （仕事の詳細）</h2>
			            <div class="txt-border"><?php echo get_post_meta(get_the_ID(), 'job_information', true ) ?></div>
			        </div>

			        <div class="job-company-info">
			            <h2>Company info （会社概要）</h2>
			            <div class="txt-border"><?php echo get_post_meta(get_the_ID(), 'job_company', true ) ?></div>
			        </div>

			        <div class="job-message">
			            <h2>Message （採用メッセージ）</h2>
			            <div class="clearfix">
							<div class="avatar">
								<?php 
								$avatar = get_post_meta(get_the_ID(), 'job_employer_avatar', true );
								if($avatar) {
									echo wp_get_attachment_image($avatar, 'thumbnail');
								}
								
								?>
							</div>
			            	<p><?php echo get_post_meta(get_the_ID(), 'job_employer_message', true ) ?></p>
			            </div>
			        </div>
			    </div>
			    <div class="job-detail-btn">
			    	<a class="single-job-btn" href="<?php echo get_home_url();?>/search-job">Other JOB<i class="fa fa-angle-right"></i></a>
			    </div>
			</div>
		</article><!-- #post-## -->
	</div>
</div><!-- .wrap -->

<?php get_footer(); ?>
