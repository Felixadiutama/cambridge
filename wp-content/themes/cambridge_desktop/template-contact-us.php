<?php
/*
Template Name: Template Contact Us
*/
?>

<?php get_header(); ?>

			<div class="container">

				<div id="content" class="clearfix row">

					<div id="main" class="col-md-12 clearfix" role="main">

						<div class="content-page-wrapper">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<div class="row">
									<div class="col-md-12">
										<div class="page-content-image">
											<img src="/wp-content/themes/cambridge_desktop/library/images/ContactUs.jpg" alt="Contact Us">
										</div>
									</div>
								</div>


								<div class="row">
									<div class="col-md-12">
										<div class="page-content-title">

										</div>
									</div>
								</div>

								<div class="row template-content">
									<div class="col-md-1"></div>
									<div class="col-md-5">
										<div class="page-content-header ralewayBold">
											<?php the_title();?>
										</div>
										<div class="page-content-info ralewayMedium">
											<?php the_content();?>
										</div>
									</div>
									<div class="col-md-6">
										<?php insert_cform('cambridge-form');?>
									</div>
								</div>

							<?php endwhile; ?>

							<?php else : ?>

							<article id="post-not-found">
									<header>
										<h1><?php _e("Not Found", "bonestheme"); ?></h1>
									</header>
									<section class="post_content">
										<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
									</section>
									<footer>
									</footer>
							</article>

							<?php endif; ?>

						</div>

					</div> <!-- end #main -->

				</div> <!-- end #content -->

			</div> <!-- end .container -->

<?php get_footer(); ?>
