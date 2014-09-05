<?php get_header(); ?>
<?php get_sidebar('collections'); ?>

<div class="container">

	<div id="single-content" class="clearfix row">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php
				$image1 = types_render_field( "image-1", array("output" => "raw") );
				$image2 = types_render_field( "image-2", array("output" => "raw") );
				$image3 = types_render_field( "image-3", array("output" => "raw") );
				$image4 = types_render_field( "image-4", array("output" => "raw") );
				$image5 = types_render_field( "image-5", array("output" => "raw") );
			?>

			<div class="col-md-7">

				<!-- main slider carousel -->
				<div class="row">
					<div class="col-md-12" id="slider">

						<div class="col-md-12" id="carousel-bounding-box">
							<div id="myCarousel" class="carousel slide">
								<!-- main slider carousel items -->
								<div class="carousel-inner">

								<?php if ($image1 != ''){
									$product_path1 = cc_image_resize(array(
										'image_to_resize' => $image1,
										'image_size' => 'product-images'
									));
								?>
									<div class="active item" data-slide-number="0">
										<img src="<?php echo $product_path1;?>" class="img-responsive">
									</div>
								<?php } ?>

								<?php if ($image2 != ''){
									$product_path2 = cc_image_resize(array(
										'image_to_resize' => $image2,
										'image_size' => 'product-images'
									));
								?>
									<div class="item" data-slide-number="1">
										<img src="<?php echo $product_path2;?>" class="img-responsive">
									</div>
								<?php } ?>

								<?php if ($image3 != ''){
									$product_path3 = cc_image_resize(array(
										'image_to_resize' => $image3,
										'image_size' => 'product-images'
									));
								?>
									<div class="item" data-slide-number="2">
										<img src="<?php echo $product_path3;?>" class="img-responsive">
									</div>
								<?php } ?>

								<?php if ($image4 != ''){
									$product_path4 = cc_image_resize(array(
										'image_to_resize' => $image4,
										'image_size' => 'product-images'
									));
								?>
									<div class="item" data-slide-number="3">
										<img src="<?php echo $product_path4;?>" class="img-responsive">
									</div>
								<?php } ?>

								<?php if ($image5 != ''){
									$product_path5 = cc_image_resize(array(
										'image_to_resize' => $image5,
										'image_size' => 'product-images'
									));
								?>
									<div class="active item" data-slide-number="4">
										<img src="<?php echo $product_path5;?>" class="img-responsive">
									</div>
								<?php } ?>

								</div>
							</div>
						</div>

					</div>
				</div>
				<!--/main slider carousel-->

				<?php $terms = get_the_terms( $post->ID, 'collections' ); $term = array_pop($terms);?>

				<!-- thumb navigation carousel -->
				<div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">

					<!-- thumb navigation carousel items -->
					<ul class="list-inline">

						<?php if ($image1 != ''){?>

							<li>
								<a id="carousel-selector-0" class="selected">
									<?php
										$image_path1 = cc_image_resize(array(
											'image_to_resize' => $image1,
											'image_size' => 'thumb-slider'
										));
									?>
									<img src="<?php echo $image_path1;?>">
								</a>
							</li>

						<?php } ?>

						<?php if ($image2 != ''){?>

							<li>
								<a id="carousel-selector-1" class="">
									<?php
									$image_path2 = cc_image_resize(array(
										'image_to_resize' => $image2,
										'image_size' => 'thumb-slider'
										));
										?>
									<img src="<?php echo $image_path2;?>">
								</a>
							</li>

						<?php } ?>


						<?php if ($image3 != ''){?>

							<li>
								<a id="carousel-selector-2" class="">
									<?php
										$image_path3 = cc_image_resize(array(
											'image_to_resize' => $image3,
											'image_size' => 'thumb-slider'
											));
									?>
									<img src="<?php echo $image_path3;?>">
								</a>
							</li>

						<?php } ?>

						<?php if ($image4 != ''){?>

							<li>
								<a id="carousel-selector-3" class="">
									<?php
										$image_path4 = cc_image_resize(array(
											'image_to_resize' => $image4,
											'image_size' => 'thumb-slider'
											));
									?>
									<img src="<?php echo $image_path4;?>">
								</a>
							</li>

						<?php } ?>

						<?php if ($image5 != ''){?>

							<li>
								<a id="carousel-selector-4" class="">
									<?php
									$image_path5 = cc_image_resize(array(
										'image_to_resize' => $image5,
										'image_size' => 'thumb-slider'
										));
										?>
									<img src="<?php echo $image_path5;?>">
								</a>
							</li>

						<?php } ?>


					</ul>

				</div>



				</div>

				<div class="col-md-5">
					<div class="row">
						<div class="col-md-12">
							<h2 class="single-product-title"><?php the_title();?></h2>
						</div><!-- .col-md-12-->
					</div><!-- .row -->
					<div class="row">
						<div class="col-md-12">
							<div class="single-title-border"></div>
						</div><!-- .col-md-12-->
					</div><!-- .row -->

					<div class="row">
						<div class="col-md-12">
							<div class="single-collection-title"><?php echo $term->name;?> COLLECTION</div>
						</div><!-- .col-md-12-->
					</div><!-- .row -->

					<div class="row">
						<div class="col-md-12">
							<div class="single-title-border"></div>
						</div><!-- .col-md-12-->
					</div><!-- .row -->

					<?php if ($post->post_content != '') {?>

						<div class="row">
							<div class="col-md-12">
								<div class="single-collection-content"><?php the_content();?> </div>
							</div><!-- .col-md-12-->
						</div><!-- .row -->

						<div class="row">
							<div class="col-md-12">
								<div class="single-title-border"></div>
							</div><!-- .col-md-12-->
						</div><!-- .row -->

					<?php }?>


					<div class="row">
						<div class="col-md-12">
							<div class="single-dimension-title">DIMENSION</div>
						</div><!-- .col-md-12-->
					</div><!-- .row -->

					<?php
						$width = types_render_field( "width", array( ) );
						$height =  types_render_field( "height", array( ) );
						$depth = types_render_field( "depth", array( ) );
						$weight = types_render_field( "weight", array( ) );
						$diameter = types_render_field( "diameter", array( ) );
					?>

					<div class="row">
						<div class="col-md-12">
							<table class="table table-hover borderless spec">
								<?php if ($width !=''){?>
									<tr>
										<td>Width</td>
										<td><?php {echo $width;} ?>"</td>
										<td><?php echo convertToCentimeter($width)?> <small>cm</small> </td>
									</tr>
								<?php }?>

								<?php if ($height !=''){?>
									<tr>
										<td>Height</td>
										<td><?php {echo $height;} ?>"</td>
										<td><?php echo convertToCentimeter($height)?> <small>cm</small> </td>
									</tr>
								<?php }?>

								<?php if ($depth !=''){?>
									<tr>
										<td>Depth</td>
										<td><?php {echo $depth;} ?>"</td>
										<td><?php echo convertToCentimeter($depth)?> <small>cm</small> </td>
									</tr>
								<?php }?>

								<?php if ($diameter !=''){?>
									<tr>
										<td>Diameter</td>
										<td><?php {echo $diameter;} ?>"</td>
										<td><?php echo convertToCentimeter($diameter)?> <small>cm</small> </td>
									</tr>
								<?php }?>
							</table>
						</div>
					</div><!-- .row -->


					<div class="row">
						<div class="col-md-12">
							<div class="single-title-border"></div>
						</div><!-- .col-md-12-->
					</div><!-- .row -->

					<?php if ($weight !=''){?>
						<div class="row">
							<div class="col-md-12">
								<div class="single-dimension-title">WEIGHT CAPACITY</div>
							</div><!-- .col-md-12-->
						</div><!-- .row -->

						<div class="row">
							<div class="col-md-12">
								<table class="table table-hover borderless spec">
									<tr>
										<td>Weight</td>
										<td><?php echo $weight; ?> <small>lb</small></td>
										<td><?php echo convertToPound($weight);?> <small>kg</small></td>
									</tr>
								</table>
							</div><!-- .col-md-12-->
						</div><!-- .row -->
					<?php }?>

					<div class="row">
						<div class="col-md-12">
							<div class="single-title-border"></div>
						</div><!-- .col-md-12-->
					</div><!-- .row -->

					<?php
						$cushionColor = types_render_field( "cushion-color", array("output" => "raw") );
						$colors = explode(" ",$cushionColor);
						if ($cushionColor != '') {
					?>

					<div class="row">
						<div class="col-md-12">
							<div class="single-cushion-title">CUSHION COLOR</div>
						</div><!-- .col-md-12-->
					</div><!-- .row -->


					<div class="row">
						<div class="col-md-12">
						<ul class="list-inline">
							<?php foreach ($colors as $color) {?>
							<li>
								<?php
									$image_cushion= cc_image_resize(array(
										'image_to_resize' => $color,
										'image_size' => 'small-thumbnail'
									));
								?>
								<img src="<?php echo $image_cushion;?>" />
							</li>
							<?php }?>
						</ul>
						</div><!-- .col-md-12-->
					</div><!-- .row -->

					<div class="row">
						<div class="col-md-12">
							<div class="single-title-border"></div>
						</div><!-- .col-md-12-->
					</div><!-- .row -->

					<?php }?>

					<?php
						$materialColor = types_render_field( "material-color", array("output" => "raw") );
						$materials = explode(" ",$materialColor);
						if ($materialColor != '') {
					?>

						<div class="row">
							<div class="col-md-12">
								<div class="single-material-title">MATERIAL</div>
							</div><!-- .col-md-12-->
						</div><!-- .row -->

						<div class="row">
							<div class="col-md-12">
							<ul class="list-inline">
								<?php foreach ($materials as $material) {?>
								<li>
									<?php
										$image_material= cc_image_resize(array(
											'image_to_resize' => $material,
											'image_size' => 'small-thumbnail'
										));

										$image_material_big= cc_image_resize(array(
											'image_to_resize' => $material,
											'image_size' => 'big-thumbnail'
										));
									?>

									<!-- Button trigger modal -->
									<a href="#" data-toggle="modal" data-target="#myModal">
										<img src="<?php echo $image_material;?>" />
									</a>

									<!-- Modal -->
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
													<h4 class="modal-title" id="myModalLabel">Modal title</h4>
												</div>
												<div class="modal-body">
													<img src="<?php echo $image_material_big;?>" />
												</div>
											</div>
										</div>
									</div>

								</li>
								<?php }?>
							</ul>
							</div><!-- .col-md-12-->
						</div><!-- .row -->

						<div class="row">
							<div class="col-md-12">
								<div class="single-title-border"></div>
							</div><!-- .col-md-12-->
						</div><!-- .row -->

					<?php } ?>

					<div class="row">
						<div class="col-md-12">
							<div class="single-dimension-title">SHARE</div>
						</div><!-- .col-md-12-->
					</div><!-- .row -->

					<div class="row">
						<div class="col-md-12">
							<!-- Go to www.addthis.com/dashboard to customize your tools -->
							<div class="addthis_sharing_toolbox"></div>
						</div><!-- .col-md-12-->
					</div><!-- .row -->

					<div class="row">
						<div class="col-md-12">
							<div class="single-title-border"></div>
						</div><!-- .col-md-12-->
					</div><!-- .row -->


					<div class="row">
						<div class="col-md-12">
							<a href="/<?php echo $term->slug;?>">BACK TO THE COLLECTIONS</a>
						</div><!-- .col-md-12-->
					</div><!-- .row -->


				</div>

			<?php endwhile; ?>

		<?php else : ?>

			<article id="post-not-found" class="hentry clearfix">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
				</section>
				<footer class="article-footer">
					<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
				</footer>
			</article>

		<?php endif; ?>


	</div> <?php // end #content ?>

</div> <?php // end ./container ?>

<script type='text/javascript'>

	$(document).ready(function() {

		$('#myCarousel').carousel({
			pause: true,
			interval: false
		});

	// handles the carousel thumbnails
	$('[id^=carousel-selector-]').click( function(){
		var id_selector = $(this).attr("id");
		var id = id_selector.substr(id_selector.length -1);
		id = parseInt(id);
		$('#myCarousel').carousel(id);
		$('[id^=carousel-selector-]').removeClass('selected');
		$(this).addClass('selected');
	});

	// when the carousel slides, auto update
	$('#myCarousel').on('slid', function (e) {
		var id = $('.item.active').data('slide-number');
		id = parseInt(id);
		$('[id^=carousel-selector-]').removeClass('selected');
		$('[id^=carousel-selector-'+id+']').addClass('selected');
	});

});



</script>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54081f8a4a05f215"></script>

<?php get_footer(); ?>
