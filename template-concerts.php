<?php
/*
Template Name: Concerts
*/
?>
<?php get_header(); ?>
	<div class="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

	<header class="article-header">
		<div class="title">
			<h1>Concerts</h1>
		</div>
	</header>
	</article>

	<?php endwhile; ?>
		<div class="concerts">
			<?php 
                $args = array(
                      'post_type' => 'schedule',
                      'post_status' => 'publish',
                      'meta_key' => 'schedule-date',
                      'orderby' => 'meta_value_num',
                      'order'   => 'ASC',
                      'posts_per_page' => -1,
                      'meta_query' => array(
                                        array(
                                            'key' => 'schedule-date',
                                            'value' => date("Ymd"),
                                            'type' => 'NUMERIC',
                                            'compare' => '>'
                                        )
                                    )
                    );
				$the_query = new WP_Query( $args );

				if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post();
			
                        $unixtimestamp = strtotime(get_field('schedule-date'));

                        $month = date_i18n("n", $unixtimestamp);
                        $day = date_i18n("d", $unixtimestamp);
                        $dayofweek = date_i18n("D", $unixtimestamp);
                         array_push($dates, $unixtimestamp*1000);

                         $categories = wp_get_object_terms($post->ID, 'category');
                        $cats = [];

                         if($categories){
                            foreach($categories as $category){
                                array_push($cats, $category->slug);
                            }
                         }
                         // $categories = implode(" ", $categories);
                         if(!empty($cats)) $cats = implode(" ", $cats);

                         // var_dump($cats);

                ?>

                    <div class="overview item <?php echo($cats ? $cats: ""); ?>" data-month="<?php echo $month;?>" data-id="<?php the_ID(); ?>">
                    
                    <article>
                        <header>

                            <div class="date_time d-1of6">
                                <div><span class="bigger"><?php echo $month; ?>.</span><span class="bigger"><?php echo $day; ?></span></div>
                            </div>
							<div class="title  d-2of3">
                                <h1 class="h2 entry-title"><?php the_title(); ?></h1>
                            </div>
                            <div class="thumb d-1of6 last-col">
                                <?php
                                    $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "bcj-thumb-300" );
                                    // add more attributes if you need
                                    if($thumbnail_src){
                                        printf( '<img src="%s"/>', esc_url( $thumbnail_src[0] ) );

                                    }else{
                                        printf( '<img src="%s"/>', get_bloginfo(template_directory).'/library/images/nothumb.jpg' );
                                    }
                                ?>
                            </div>
							
                        </header>
                        <section>
                        	<div class="date_time d-1of6">
                                <div>（<?php echo $dayofweek; ?>）<span class="bigger2"><?php the_field('time', $post->ID); ?></span> </div>
                            </div>
                            <div class="location d-1of2"><span class="country"><?php the_field('location', $post->ID); ?></span><span class="country">（<?php the_field('country', $post->ID); ?>）</span></div>
                            <div class="d-1of3 last-col">
                            <div class="buy-ticket-container">

                                <!-- <div class="ticket-info">
                                     <?php
                                        $contact = get_field('contact_info');
                                        if($contact){ echo $contact; }else{ 
                                            echo '<span class="small">'.__("Bach Collegium Japan Ticket Center","bonestheme").' </span><br>'; 
                                            echo '<span class="number">℡ ';
                                            if(ICL_LANGUAGE_CODE=="en"){
                                                echo '+81-3-5301-0950';    
                                            }else{
                                                echo '03-5301-0950'; 
                                            }
                                            echo '</span>';

                                        }
                                     ?>
                                </div> -->
                                <div class="ticket-btn">
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
                                </div>
                            </div>
                        </section>
                    </article>
                    </div>
			<?php
				endwhile;
                endif;
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
</section>
<!-- Main END -->


<?php get_footer(); ?>
