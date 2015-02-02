<?php get_header(); ?>
            <div class="wrap">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
					<header class="article-header">
						<div class="leading">
						<?php //the_post_thumbnail("full" ); ?>
						</div>
						<div class="title">
							<h1><?php the_title( ); ?></h1>
						</div>
					</header>
					<section class="entry-content-page">
						<?php the_content(); ?>
						<?php if(get_post_type( get_the_ID() )=="schedule"): ?>
                        <div class="buy-ticket-container">
                            <span class="buy-ticket "><span class="buy-text"><?php _e("Buy Ticket","bonestheme"); ?></span></span>
                            <span class="playguide">
                            <?php
                                $pia = get_field('ticket_pia');
                                $eplus = get_field('e+');
                                // if($pia||$eplus) :
                            ?>
                                    <?php
                                        if($pia){
                                           echo '<span><a target="_blank" href="'. $pia .'"">'.__("Ticket Pia","bonestheme").'</a></span>'; 
                                       }else{
                                           echo '<span class="disabled">'.__("Ticket Pia","bonestheme").'</span>'; 
                                       }
                                        if($eplus){
                                           echo '<span><a target="_blank" href="'. $eplus .'"">'.__("e+","bonestheme").'</a></span>'; 
                                       }else{
                                           echo '<span class="disabled">'.__("e+","bonestheme").'</span>'; 
                                       }                                       
                                    ?>
                            <?php
                                // else:

                                // echo 'バッハ・コレギウム・ジャパン チケットセンター <br>℡ 03-5301-0950';

                                // endif;
                            ?>
                            </span>
                        </div>	
					</section>
                        <?php endif; ?>					
				</article>


			<?php endwhile; ?>

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
        </section>
        <!-- Main END -->


<?php get_footer(); ?>
