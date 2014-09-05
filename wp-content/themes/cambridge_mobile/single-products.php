<?php get_header(); ?>
<?php get_sidebar('collections'); ?>

    <div class="container">

			<div id="single-content" class="clearfix row">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div class="col-md-7">

							    <!-- main slider carousel -->
							    <div class="row">
							        <div class="col-md-12" id="slider">

							                <div class="col-md-12" id="carousel-bounding-box">
							                    <div id="myCarousel" class="carousel slide">
							                        <!-- main slider carousel items -->
							                        <div class="carousel-inner">
							                            <div class="active item" data-slide-number="0">
							                                <img src="http://placehold.it/1200x480&amp;text=one" class="img-responsive">
							                            </div>
							                            <div class="item" data-slide-number="1">
							                              <img src="http://placehold.it/1200x480/888/FFF" class="img-responsive">
							                            </div>
							                            <div class="item" data-slide-number="2">
							                                <img src="http://placehold.it/1200x480&amp;text=three" class="img-responsive">
							                            </div>
							                            <div class="item" data-slide-number="3">
							                                <img src="http://placehold.it/1200x480&amp;text=four" class="img-responsive">
							                            </div>
							                            <div class="item" data-slide-number="4">
							                                <img src="http://placehold.it/1200x480&amp;text=five" class="img-responsive">
							                            </div>
							                            <div class="item" data-slide-number="5">
							                                <img src="http://placehold.it/1200x480&amp;text=six" class="img-responsive">
							                            </div>
							                            <div class="item" data-slide-number="6">
							                                <img src="http://placehold.it/1200x480&amp;text=seven" class="img-responsive">
							                            </div>
							                            <div class="item" data-slide-number="7">
							                                <img src="http://placehold.it/1200x480&amp;text=eight" class="img-responsive">
							                            </div>
							                        </div>
							                    </div>
							                </div>

							        </div>
							    </div>
							    <!--/main slider carousel-->

							    	<!-- thumb navigation carousel -->
							        <div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">

							                <!-- thumb navigation carousel items -->
							              <ul class="list-inline">
							              <li> <a id="carousel-selector-0" class="selected">
							                <img src="http://placehold.it/80x60&amp;text=one" class="img-responsive">
							              </a></li>
							              <li> <a id="carousel-selector-1">
							                <img src="http://placehold.it/80x60&amp;text=two" class="img-responsive">
							              </a></li>
							              <li> <a id="carousel-selector-2">
							                <img src="http://placehold.it/80x60&amp;text=three" class="img-responsive">
							              </a></li>
							              <li> <a id="carousel-selector-3">
							                <img src="http://placehold.it/80x60&amp;text=four" class="img-responsive">
							              </a></li>
							                    <li> <a id="carousel-selector-4">
							                <img src="http://placehold.it/80x60&amp;text=five" class="img-responsive">
							              </a></li>
							              <li> <a id="carousel-selector-5">
							                <img src="http://placehold.it/80x60&amp;text=six" class="img-responsive">
							              </a></li>
							              <li> <a id="carousel-selector-6">
							                <img src="http://placehold.it/80x60&amp;text=seven" class="img-responsive">
							              </a></li>
							              <li> <a id="carousel-selector-7">
							                <img src="http://placehold.it/80x60&amp;text=eight" class="img-responsive">
							              </a></li>
							                </ul>

							        </div>



						</div>

						<div class="col-md-5">
							<?php $terms = get_the_terms( $post->ID, 'collections' ); $term = array_pop($terms);?>
							<div class="row">
								<div class="col-md-12">
									<a href="/<?php echo $term->slug;?>">BACK TO THE COLLECTIONS</a>
								</div><!-- .col-md-12-->
							</div><!-- .row -->
							<div class="row">
								<div class="col-md-12">
									<h2><?php the_title();?></h2>
								</div><!-- .col-md-12-->
							</div><!-- .row -->
							<div class="row">
								<div class="col-md-12">
									<div class="single-title-border"></div>
								</div><!-- .col-md-12-->
							</div><!-- .row -->

							<div class="row">
								<div class="col-md-12">
									<div class="single-collection-title"><?php echo $term->name;?> COLLECTIONS</div>
								</div><!-- .col-md-12-->
							</div><!-- .row -->

							<div class="row">
								<div class="col-md-12">
									<div class="single-title-border"></div>
								</div><!-- .col-md-12-->
							</div><!-- .row -->

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

							<div class="row">
								<div class="col-md-12">
									<div class="single-dimension-title">DIMENSION</div>
								</div><!-- .col-md-12-->
							</div><!-- .row -->

							<div class="row">
								<div class="col-md-4">
									<div class="single-dimension-width">W: <?php echo types_render_field( "width", array( ) );?>" / <?php echo convertToCentimeter(types_render_field( "width", array( ) ))?> cm</div>
								</div><!-- .col-md-4-->

								<div class="col-md-4">
									<div class="single-dimension-height">H: <?php echo types_render_field( "height", array( ) )?>" / <?php echo convertToCentimeter(types_render_field( "height", array( ) ))?> cm</div>
								</div><!-- .col-md-4-->

								<div class="col-md-4">
									<div class="single-dimension-dimension">D: <?php echo types_render_field( "depth", array( ) )?>" / <?php echo convertToCentimeter(types_render_field( "depth", array( ) ))?> cm</div>
								</div><!-- .col-md-4-->
							</div><!-- .row -->

							<div class="row">
								<div class="col-md-12">
									<div class="single-title-border"></div>
								</div><!-- .col-md-12-->
							</div><!-- .row -->

							<div class="row">
								<div class="col-md-12">
									<div class="single-dimension-width">W: <?php echo types_render_field( "weight", array( ) );?> kg - <?php echo convertToPound(types_render_field( "weight", array( ) ))?> pounds</div>
								</div><!-- .col-md-4-->
							</div><!-- .row -->

							<div class="row">
								<div class="col-md-12">
									<div class="single-title-border"></div>
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

<?php get_footer(); ?>
