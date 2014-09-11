<?php get_header(); ?>

<div class="container">

	<div id="single-content" class="clearfix row">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php $singleTerms = get_the_terms( $post->ID, 'collections' ); $singleTerm = array_pop($singleTerms);?>

			<div class="row">
				<div class="col-md-12">
					<div id="collections-menu">
						<ul class="list-inline">

							<?php

							$collections = get_terms(
								'collections', array(
									'hide_empty' => 1
									) );
							foreach ($collections as $collection) {
								if ($singleTerm->slug == $collection->slug) {
									$active = 'hoverActive';
								}else{
									$active = '';
								}
								?>
								<li>
									<a href="/<?php echo $collection->slug;?>" class="<?php echo $active;?>"><?php echo $collection->name;?></a> |
								</li>

								<?php }?>
							</ul>

						</div>
					</div>
				</div>

				<?php
				$productSliderImages = array(
					wp_get_attachment_url(get_post_thumbnail_id($post->ID)),
					types_render_field("image-2", array("output"=>"raw")),
					types_render_field("image-3", array("output"=>"raw")),
					types_render_field("image-4", array("output"=>"raw")),
					types_render_field("image-5", array("output"=>"raw"))
					);
					?>
					<div class="row">
						<div class="col-md-7">

							<!-- main slider carousel -->

							<div class="carousel slide article-slide" id="myCarousel">
								<div class="carousel-inner cont-slider">
									<?php
									$i=0;
									foreach ($productSliderImages as $key => $image) {
										if (!empty($image)) {
											$product_path = cc_image_resize(array('image_to_resize'=>$image,'image_size'=>'product-images'));
											?>
											<div class="item <?php if ($i===0){echo 'active';} ?>"><img src="<?php echo $product_path; ?>" /></div>
											<?php

											$i++;
										}
									}
									?>
								</div>
								<!-- Indicators -->
								<ul class="carousel-indicators">
									<?php
									$i=0;
									foreach ($productSliderImages as $key => $image) {
										if (!empty($image)) {
											$image_path1 = cc_image_resize(array('image_to_resize'=>$image,'image_size'=>'thumb-slider'));
											?>
											<li class="<?php if ($i===0){echo 'active';} ?>" data-slide-to="<?php echo $i; ?>" data-target="#myCarousel"><img src="<?php echo $image_path1; ?>" /></li>
											<?php

											$i++;
										}
									}
									?>
								</ul>
							</div>

						</div><!-- col-7 -->

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
									<div class="single-collection-title"><?php echo $singleTerm->name;?> COLLECTION</div>
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
												$image_material= cc_image_resize(array(
													'image_to_resize' => $color,
													'image_size' => 'small-thumbnail'
													));

												$image_material_big= cc_image_resize(array(
													'image_to_resize' => $color,
													'image_size' => 'big-thumbnail'
													));

												$imgIDc = get_attachment_id_from_src ($color);
												$imgAltc = get_post_meta($imgIDc , '_wp_attachment_image_alt', true);

												?>

												<!-- Button trigger modal -->
												<a href="#" data-toggle="modal" data-target="#<?php echo $imgIDc ;?>">
													<img src="<?php echo $image_material;?>" />
												</a>

												<!-- Modal -->
												<div class="modal fade" id="<?php echo $imgIDc ;?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $imgAltc;?>" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
																<h4 class="modal-title" id="myModalLabel"><?php echo $imgAltc;?></h4>
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
												<?php foreach ($materials as $material) { ?>
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

													$imgID = get_attachment_id_from_src ($material);
													$imgAlt = get_post_meta($imgID , '_wp_attachment_image_alt', true);

													?>

													<!-- Button trigger modal -->
													<a href="#" data-toggle="modal" data-target="#<?php echo $imgID ;?>">
														<img src="<?php echo $image_material;?>" />
													</a>

													<!-- Modal -->
													<div class="modal fade" id="<?php echo $imgID ;?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $imgAlt;?>" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
																	<h4 class="modal-title" id="myModalLabel"><?php echo $imgAlt;?></h4>
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
											<div class="back-to-collections">
												<a href="/<?php echo $term->slug;?>">BACK TO THE COLLECTIONS</a>
											</div>
										</div><!-- .col-md-12-->
									</div><!-- .row -->


								</div><!-- .col-md-5 -->
							</div><!-- .row -->

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
	// $('[id^=carousel-selector-]').click( function(){
	// 	var id_selector = $(this).attr("id");
	// 	var id = id_selector.substr(id_selector.length -1);
	// 	id = parseInt(id);
	// 	$('#myCarousel').carousel(id);
	// 	$('[id^=carousel-selector-]').removeClass('selected');
	// 	$(this).addClass('selected');
	// });

	// when the carousel slides, auto update
	// $('#myCarousel').on('slid', function (e) {
	// 	var id = $('.item.active').data('slide-number');
	// 	id = parseInt(id);
	// 	$('[id^=carousel-selector-]').removeClass('selected');
	// 	$('[id^=carousel-selector-'+id+']').addClass('selected');
	// });

			});



			</script>

			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54081f8a4a05f215"></script>

			<?php get_footer(); ?>
