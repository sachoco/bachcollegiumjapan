<?php
/*
Template Name: Profile Gurst Artist
*/
?>
<?php get_header(); ?>
			<div class="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

			<header class="article-header">
				<div class="leading">
				<?php //the_post_thumbnail("full" ); ?>
				</div>
				<div class="title">
					<h1>Guest Artist</h1>
				</div>
			</header>
			</article>

			<?php endwhile; ?>
            <div class="wrap">
				<div class="artists">
				<!-- <div class="artists js-packery" data-packery-options='{ "itemSelector": ".item", "gutter": 0, "stamp": ".stamp" }' > -->
					<?php 
						$args = array( 'posts_per_page' => -1, 'post_type'=> 'artist' );
						$artists = get_posts($args); 
	
						foreach($artists as $post):
							setup_postdata( $post );
					?>
						<article class="item thumb m-1of3 t-1of4 d-1of6 <?php if($i==3) echo 'active' ?>" data-id="<?php the_ID(); ?>">
							<section>
								<div class="image"><?php the_post_thumbnail(); ?></div>
								<div class="title"><?php the_title(); ?></div>
								<div class="category"><?php the_terms($artist->ID,'artist_category'); ?></div>
							</section>
						</article>
					<?php
						endforeach;
						wp_reset_postdata();
					?>
					<div class="clear"></div>

				</div>
					<?php bones_page_navi(); ?>

			<?php else : ?>

				<article id="post-not-found" class="hentry cf">
					<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="article-footer">
							<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>

			<?php endif; ?>			
			</div>


			</div>
        </section>
        <!-- Main END -->


<?php get_footer(); ?>
