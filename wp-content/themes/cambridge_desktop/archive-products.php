<?php get_header(); ?>

<div class="container">

	<div id="content" class="clearfix row">

		<div id="main" class="col-md-12 clearfix" role="main">

				<div class="row">
					<?php if (have_posts()) : while (have_posts()) : the_post(); $i = $wp_query->post_count;?>
						<div class="col-md-4 ">
							<div class="products-collection">
								<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
									<div class="product-title">
										<?php the_title(); ?>
									</div>
									<?php if ( has_post_thumbnail() ) : ?>
										<div class="product-images">
											<?php the_post_thumbnail('medium'); ?>
										</div>
									<?php endif; ?>
								</a>
							</div>
						</div>
					<?php endwhile; ?>
				</div>

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

<?php get_footer(); ?>
