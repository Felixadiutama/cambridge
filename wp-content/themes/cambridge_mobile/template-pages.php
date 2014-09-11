<?php
/*
Template Name: Page Template
*/
?>

<?php get_header(); ?>

<div class="container">

	<div id="content" class="clearfix row">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="page-content-image">
				<?php
					$headerImageURL = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
				?>
				<img src="<?php echo $headerImageURL;?>" class="img-responsive"/>
			</div>
			<div class="page-content-title"></div>

			<div id="main" class="col-md-12 clearfix" role="main">

				<div class="content-page-wrapper">

					<div class="row template-content">
						<div class="col-md-1"></div>
						<div class="col-md-3">

						</div>
						<div class="col-md-7">

							<div class="ralewayBold page-content-header">
								<?php the_title();?>
							</div>
							<div class="page-content ralewayMedium">
								<?php the_content();?>
							</div>

						</div>
						<div class="col-md-1"></div>
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
