<?php get_header(); ?>
<?php get_sidebar('collections'); ?>

    <div class="container">

			<div id="single-content" class="clearfix row">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div class="col-md-7">

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
									<?php echo $term->name;?> COLLECTIONS
								</div><!-- .col-md-12-->
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

<?php get_footer(); ?>
