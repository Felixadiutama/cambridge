<?php
	get_header();
	$homepage = get_page(32);
?>

<div class="container ralewayMedium">
	<div class="row homepage-wrapper">
		<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<div class="slider">
						</div><!-- div .slider -->
					</div><!-- end .col-md-12 -->
				</div><!-- end .row -->

				<div class="homepage-wrapper">
					<div class="borderline"></div>
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="content-wrapper">
								<div class="content-homepage-title baskervilleNormal">
									<?php echo $homepage->post_title;?>
								</div>
								<div class="content-homepage ralewayMedium">
									<?php echo $homepage->post_content;?>
								</div>

							</div><!-- end .content-homepage -->
						</div><!-- end .col-md-6-->
						<div class="col-md-3"></div>
					</div><!-- end .row -->
					<div class="borderline"></div>
				</div>




		</div><!-- end .col-md-12 -->
	</div><!-- end .row -->

	<div class="row">
		<div class="col-md-12">
			<a href="/story">
				<div class="homepage-button">
					Story
				</div>
			</a>
		</div><!-- end .col-md-12 -->
	</div><!-- end .row -->

	<div class="row">
		<div class="col-md-12">
			<a href="/catalunya">
				<div class="homepage-button">
					Collection
				</div>
			</a>
		</div><!-- end .col-md-12 -->
	</div><!-- end .row -->

	<div class="row">
		<div class="col-md-12">
			<a href="/story">
				<div class="homepage-button">
					Contact
				</div>
			</a>
		</div><!-- end .col-md-12 -->
	</div><!-- end .row -->


</div> <!-- end ./container -->

<?php get_footer(); ?>
