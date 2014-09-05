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
							<div class="content-wrapper raleway">
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
			<div class="row">
				<div class="col-md-12">
					<?php
					$args = array(
						'order'                  => 'ASC',
						'orderby'                => 'menu_order',
						'post_type'              => 'nav_menu_item',
						'post_status'            => 'publish',
						'output'                 => ARRAY_A,
						'output_key'             => 'menu_order',
						'nopaging'               => true,
						'update_post_term_cache' => false
					);

					$items = wp_get_nav_menu_items( 'homepageMenu', $args );
					// var_dump($items);
					foreach ($items as $key => $value) {
						if ($value->title != 'Home') {
							$slug = sanitize_title($value->title);
					?>
					<div class="homepageMenuItems">

						<a href="<?php echo $value->url; ?>" target="_self" >
							<div class="home-menu">
								<div class="home-menu-name">
									<div class="text">
										<?php echo $value->title; ?>
									</div>
								</div>

								<div class="home-menu-images">
									<img src="/wp-content/themes/cambridge_desktop/library/images/bkg_main_menu_<?php echo $slug; ?>.png" alt="<?php echo $value->title; ?>" />
								</div>

							</div>
						</a>

					</div>
					<?php
						}
					};
					?>
				</div>

			</div>

		</div><!-- end .col-md-12 -->
	</div><!-- end .row -->
</div> <!-- end ./container -->

<script>
$(document).ready( function() {

    $('a .home-menu').hover( function() {
        $(this).find('.home-menu-name').fadeIn(300);
    }, function() {
        $(this).find('.home-menu-name').fadeOut(100);
    });

});
</script>


<?php get_footer(); ?>
