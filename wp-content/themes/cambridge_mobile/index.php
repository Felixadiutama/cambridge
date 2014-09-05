<?php
	get_header();
	$homepage = get_page(32);
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<div class="slider">
							<?php the_slideshow();?>
						</div><!-- div .slider -->
					</div><!-- end .col-md-12 -->
				</div><!-- end .row -->
			<div class="homepage-wrapper">
				<div class="row">
					<div class="col-md-12">
						<div class="borderline"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="content-wrapper">
							<div class="content-homepage-title">
								<?php echo $homepage->post_title;?>
							</div>
							<div class="content-homepage">
								<?php echo $homepage->post_content;?>
							</div>

						</div><!-- end .content-homepage -->
					</div><!-- end .col-md-6-->
					<div class="col-md-3"></div>
				</div><!-- end .row -->
				<div class="row">
					<div class="col-md-12">
						<div class="borderline"></div>
					</div>
				</div>
			</div>
		</div><!-- end .col-md-12 -->
	</div><!-- end .row -->
</div> <!-- end ./container -->

<?php get_footer(); ?>
