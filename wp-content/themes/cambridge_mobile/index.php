<?php
	get_header();
	$homepage = get_page(32);
?>
<div class="slider">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

		<!-- Wrapper for slides -->
		<div class="carousel-inner">

			<?php
				$gallery = get_post_gallery( 215, false );
				$ids = explode( ",", $gallery['ids'] );

					$i = 1;
				foreach( $ids as $id ) {
				   $link   = wp_get_attachment_url( $id );
			?>

			<div class="item <?php if ($i == 1) {
				echo "active";}?>">
				<img src="<?php echo $link;?>">
			</div>

			<?php $i++;}?>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>
</div><!-- div .slider -->

<div class="container ralewayMedium">

	<div class="row homepage-wrapper">
		<div class="col-md-12">


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





</div> <!-- end ./container -->
			<a href="/story">
				<div class="homepage-button">
					Story
				</div>
			</a>


			<a href="/catalunya">
				<div class="homepage-button">
					Collection
				</div>
			</a>



			<a href="/contact-us">
				<div class="homepage-button">
					Contact
				</div>
			</a>

<script>
	$('.carousel').carousel({
	  interval: 1000
	})
</script>

<?php get_footer(); ?>
