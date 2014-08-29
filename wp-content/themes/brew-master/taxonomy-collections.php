<?php get_header(); ?>

    <div class="container">

			<div id="content" class="clearfix row">

				<div id="main" class="col-md-12 clearfix" role="main">

							<?php
								$k = 1;
								if (have_posts()) : while (have_posts()) : the_post(); $j = $wp_query->post_count; $i = $wp_query->current_post; $i++;
								if ($k == 1) {echo '<div class="row">';}
							?>

								<div class="col-md-4">
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" id="<?php the_title_attribute(); ?>" >
										<div class="products-collection" id="<?php the_title_attribute(); ?>">

											<div class="products-name">
												<div class="text">
													<?php the_title(); ?>
												</div>
											</div>

											<div class="product-images">
												<?php if ( has_post_thumbnail() ){ ?>
													<?php the_post_thumbnail('medium'); ?>
												<?php }else{ ?>
													<img src="/wp-content/themes/brew-master/library/images/300x300.gif" alt="">
												<?php } ?>
											</div>

										</div>
									</a>
								</div>

							<?php
								if ($i == 3 || $j == $i) {
									echo '</div>'; $k=1;
								}else{
									$i++; $k++;
								};
								endwhile;
							?>

							<?php if (function_exists("emm_paginate")) { ?>
                  <?php emm_paginate(); ?>
							<?php } else { ?>
								<nav class="wp-prev-next">
									<ul class="clearfix">
										<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
										<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
									</ul>
								</nav>
							<?php } ?>

					<?php else : ?>

							<article id="post-not-found" class="hentry clearfix">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article>

					<?php endif; ?>

				</div> <?php // end #main ?>


			</div> <?php // end #content ?>

    </div> <?php // end ./container ?>

<script>
$(document).ready( function() {

    $('a .products-collection').hover( function() {
        $(this).find('.products-name').fadeIn(300);
    }, function() {
        $(this).find('.products-name').fadeOut(100);
    });

});
</script>

<?php get_footer(); ?>