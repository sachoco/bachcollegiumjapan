<?php get_header(); ?>
			<div class="content">
			<article >

			<header class="article-header">
				<div class="title">
					<h1>Discography</h1>
				</div>
				<div class="filter">
					<span class="label">フィルター</span>
					<ul class="option">
						<li class="composer">
							<span class="label">作曲家</span>
							<span class="arrow"><svg width="20px" height="14px" ><polyline fill="none" stroke="#000" stroke-miterlimit="10" points="15,2 8,10 1,2 "/></svg></span>
							<span class="dismiss"><svg x="0px" y="0px" width="15px" height="15px"><line fill="none" stroke="#000" x1="14" y1="1" x2="1" y2="14"/><line fill="none" stroke="#000" x1="14" y1="14" x2="1" y2="1"/></svg></span>

							<ul class="choices">
								<?php
									$args = array(
									    'orderby'           => 'name', 
									    'order'             => 'ASC',
									    'hide_empty'        => true, 
									    'exclude'           => array(), 
									    'exclude_tree'      => array(), 
									    'include'           => array(),
									    'number'            => '', 
									    'fields'            => 'all', 
									    'slug'              => '',
									    'parent'            => 0,
									    'hierarchical'      => true, 
									    'child_of'          => 0, 
									    'get'               => '', 
									    'name__like'        => '',
									    'description__like' => '',
									    'pad_counts'        => false, 
									    'offset'            => '', 
									    'search'            => '', 
									    'cache_domain'      => 'core'
									); 
									$taxonomy = "discography_category";
									$terms = get_terms($taxonomy, $args);
									foreach($terms as $term){
										echo '<li data-tax="'.$taxonomy.'" data-id="'.$term->term_id.'">'.$term->name.'</li>';
									}
								?>
								<!-- <li data-tax="category" data-id="118">東京定期演奏会</li>
								<li data-tax="category" data-id="9">神戸定期演奏会</li> -->
							</ul>
						</li>
					</ul>
					<div class="clear"></div>
				</div>
			</header>

			</article>
			<div class="discography-wrapper">
            <div class="wrap">
				<div class="artists" id="discography">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


				<!-- <div class="artists js-packery" data-packery-options='{ "itemSelector": ".item", "gutter": 0, "stamp": ".stamp" }' > -->
					<?php 
						// $args = array( 'posts_per_page' => -1, 'post_type'=> 'discography' );
						// $artists = get_posts($args); 
	
						// foreach($artists as $post):
						// 	setup_postdata( $post );
					?>
						<article class="item thumb m-1of3 t-1of4 d-1of6" data-id="<?php the_ID(); ?>">
							<section>
								<div class="image"><?php the_post_thumbnail(); ?></div>
								<div class="title"><?php the_title(); ?></div>
<!-- 								<div class="category"><?php the_terms($artist->ID,'artist_category'); ?></div>
 -->							</section>
						</article>
					<?php
						// endforeach;
						// wp_reset_postdata();
					?>
			<?php endwhile; ?>

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


			</div>
        </section>
        <!-- Main END -->


<?php get_footer(); ?>
