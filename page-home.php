<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="home" role="main">

							<?php
								$posts = z_get_posts_in_zone('home', array(
									'posts_per_page' => 1,
									'post_type' => 'any',
									'post_status' => 'publish'
								), false);
								foreach ($posts as $post) :
							?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'home-hero clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<?php if (has_post_thumbnail()): ?>
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('awakening-976'); ?>
									</a>
								<?php else: ?>
									<header class="article-header">
										<a href="<?php the_permalink(); ?>">
											<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
										</a>
									</header>
									<section class="entry-content clearfix" itemprop="articleBody">
										<?php the_excerpt(); ?>
									</section> <?php // end article section ?>
								<?php endif; ?>
							</article> <?php // end article ?>

							<?php endforeach; wp_reset_postdata(); ?>

							<?php if (!count($posts)) : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Something went wrong.', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
									</article>

							<?php endif; ?>

							<div class="home-g">
								<?php
									$posts = z_get_posts_in_zone('home', array(
										'posts_per_page' => 4,
										'offset' => 1,
										'post_type' => 'any',
										'post_status' => 'publish'
									), false);
									foreach ($posts as $post) :
								?>
								<div class="home-u">
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'home-inner-u' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
										<?php if (has_post_thumbnail()): ?>
											<a href="<?php the_permalink(); ?>">
												<?php the_post_thumbnail('awakening-235'); ?>
											</a>
										<?php else: ?>
											<section class="entry-content clearfix" itemprop="articleBody">
												<a class="home-h2" href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a>
											</section> <?php // end article section ?>
										<?php endif; ?>
									</article> <?php // end article ?>
								</div>
								<?php endforeach; wp_reset_postdata(); ?>
							</div>

						</div> <?php // end #main ?>

						<?php get_sidebar(); ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
