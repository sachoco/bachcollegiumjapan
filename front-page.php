<?php get_header(); ?>
            <div id="feature-slider"  >

                <div class="wrap">
                    <div class="slick-slides">
                    <!-- Slide item 1 -->
                        <div class="slide-item">
                            <a href="<?php $icl_object_id = icl_object_id(2868, 'post', true); echo get_permalink($icl_object_id); ?>">
                            <div class="slide-bg" style="width: 100%; height: 100%; opacity: 1; visibility: inherit; background-image: url(<?php echo bloginfo('template_directory' ); ?>/library/images/slideshow/teiki.jpg); background-color: rgba(0, 0, 0, 0); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;"></div>
                            <div class="slide-content overlay">
                                <div class="inner-content">
                                    <div><?php _e("Bach Collegium Japan","bonestheme"); ?></div>
                                    <img class="divider" style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />

                                    <h1 ><?php _e("Subscription concerts in 2015<br>have been announced","bonestheme"); ?></h1>
                                    <img class="divider" style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />

                                    <h1><?php _e("Call for new subscribers","bonestheme"); ?></h1>
                                    <img class="divider" style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />
                                    <div><?php _e("Read more","bonestheme"); ?></div>
                                </div>
                            </div>
                            </a>
                            <div class="slide-overlay"></div>
                        </div>

                     <!-- Slide item 2 -->
<!--                         <div class="slide-item">
                            <div class="slide-bg" style="width: 100%; height: 100%; opacity: 1; visibility: inherit; background-image: url(<?php echo bloginfo('template_directory' ); ?>/library/images/slideshow/next-concert.jpg); background-color: rgba(0, 0, 0, 0); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;"></div>
                            <div class="slide-content overlay">
                                <div class="inner-content">
                                    <div>次回BCJ定期公演</div>
                                    <img class="divider" style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />
                                    <h1 >H.シュッツの世界</h1>
                                    <div class="subtitle">主に感謝せよ、その慈しみはとこしえに 〜ダビデ詩編（抄）〜</div>
                                    <img class="divider" style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />
                                    <h1 >11.22（神戸）<div class="small">（土）15時</div></h1>
                                    <div><a href="<?php echo get_home_url().'/schedule/h-シュッツの世界' ?>">神戸公演詳細はこちら</a></div>
                                     <img class="divider" style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />
                                    <h1>11.24（東京）<div class="small">（月・休）15時</div></h1>
                                    <div><a href="<?php echo get_home_url().'/schedule/h-シュッツの世界-2' ?>">東京公演詳細はこちら</a></div>
                                </div>
                            </div>
                            <div class="slide-overlay"></div>
                        </div> -->

                    <!-- Slide item 3 -->
                        <div class="slide-item">
                            <a href="<?php $icl_object_id = icl_object_id(2889, 'post', true); echo get_permalink($icl_object_id); ?>">
                            <div class="slide-bg" style="width: 100%; height: 100%; opacity: 1; visibility: inherit; background-image: url(<?php echo bloginfo('template_directory' ); ?>/library/images/slideshow/suntory.jpg); background-color: rgba(0, 0, 0, 0); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;"></div>
                            <div class="slide-content">
                                <div class="inner-content">
                                    <div><?php _e("News","bonestheme"); ?></div>
                                    <img class="divider" style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />
                                    <h2><?php _e("Masaaki Suzuki & Bach Collegium Japan","bonestheme"); ?></h2>
                                    <h1><?php _e("awarded the 45th Suntory Music Prize","bonestheme"); ?></h1>
                                </div>
                            </div>
                            </a>
                            <div class="slide-overlay"></div>
                        </div>

                    <!-- Slide item 4 -->
                        <div class="slide-item">
                            <a href="<?php $icl_object_id = icl_object_id(181, 'post', true); echo get_permalink($icl_object_id); ?>">
                            <div class="slide-bg" style="width: 100%; height: 100%; opacity: 1; visibility: inherit; background-image: url(<?php echo bloginfo('template_directory' ); ?>/library/images/slideshow/echo.jpg); background-color: rgba(0, 0, 0, 0); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;"></div>
                            <div class="slide-content overlay">
                                <div class="inner-content"><div><?php _e("Echo Klassik Prize","bonestheme"); ?></div>
                                    <img class="divider" style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />
                                    <h1 ><?php _e("Completion of recordings<br>of all the church cantatas","bonestheme"); ?></h1>
                                    <img class="divider" style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />

                                    <div><?php _e("BIS Records receives the Editorial Achievement of the Year prize","bonestheme"); ?></div>
                                    <!--                                 <img class="divider" style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />
                                    <h1 >6.22</h1>
                                    <div>（水）14時</div>
                                    <img class="divider" style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />
                                    <div>神戸松蔭チャペル</div> --></div>
                            </div>
                            </a>
                            <div class="slide-overlay"></div>
                        </div>

                    <!-- Slide item 5 -->
                        <div class="slide-item">
                            <a href="<?php $icl_object_id = icl_object_id(2882, 'post', true); echo get_permalink($icl_object_id); ?>">
                            <div class="slide-bg" style="width: 100%; height: 100%; opacity: 1; visibility: inherit; background-image: url(<?php echo bloginfo('template_directory' ); ?>/library/images/slideshow/support.jpg); background-color: rgba(0, 0, 0, 0); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;"></div>
                            <div class="slide-content overlay">
                                <div class="inner-content">
                                    <?php if(ICL_LANGUAGE_CODE=="en"): ?>
                                    <div>Keep the legacy of Bach alive</div>
                                    <img class="divider" style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />
                                    <h1 >SUPPORT BCJ<br>Call for new member<br>of the BCJ Friends & Society</h1>
                                    <?php else: ?>
                                    <div>更にワンランク上のご支援を</div>
                                    <img class="divider" style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />
                                    <h1 >SUPPORT BCJ<br>BCJソサエティ・フレンズ<br>会員募集中</h1>
                                    <?php endif; ?>
                                    
                                    
                                </div>
                            </div>
                            </a>
                            <div class="slide-overlay"></div>
                        </div>
                    </div>
                </div>

             </div>

            <div class="upcoming m-all t-all d-all" id="schedule">
                <h2 class="h-font row-header upcoming"><?php _e( 'Concerts', 'bonestheme' ); ?></h2>
                <div class="" style="max-width: 1000px; margin:auto;">
                    <div id="eventCalendarCalendarLine"></div>

                </div>


                <div class="overview-holder-carousel inactive" >
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
                                            'value' => date("Ymd", strtotime("-1 days")),
                                            'type' => 'NUMERIC',
                                            'compare' => '>'
                                        )
                                    )
                    );
                    /*
function filter_where( $where = '' ) {
                        $where .= " AND post_date >= date('Y-m-d')";
                        return $where;
                    }
*/

                    // add_filter( 'posts_where', 'filter_where' );
                    $the_query = new WP_Query( $args );
                    // remove_filter( 'posts_where', 'filter_where' );
                    $col_count = 1;
                    $dates = [];
                    if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post();

                        //$month = strtotime('month',$startDate);

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

                    <div class="overview <?php echo($cats ? $cats: ""); ?>" data-month="<?php echo $month;?>">
                    
                    <article>
                        <header>

                            <div class="date_time">
                                <div><span class="bigger"><?php echo $month; ?>.</span><span class="bigger"><?php echo $day; ?></span>（<?php echo $dayofweek; ?>）<span class="bigger2"><?php the_field('time', $post->ID); ?></span> </div>

                            </div>

                            <div class="location"><span class="country"><?php the_field('location', $post->ID); ?></span><span class="country">（<?php the_field('country', $post->ID); ?>）</span></div>
                        </header>
                        <section>
                            <div class="thumb">
                                <?php
                                    $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "bcj-thumb-300" );
                                    // add more attributes if you need
                                    if($thumbnail_src){
                                        printf( '<img src="http://placehold.it/300x170&text=+" data-lazy="%s"/>', esc_url( $thumbnail_src[0] ) );

                                    }else{
                                        printf( '<img src="http://placehold.it/300x170&text=+" data-lazy="%s"/>', get_bloginfo(template_directory).'/library/images/nothumb.jpg' );
                                    }
                                ?>
                                <?php //the_post_thumbnail( "bcj-thumb-300"); ?>
                            </div>
                            <div class="title">
                                <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                            </div>
                            <a href="<?php the_permalink(); ?>">
                            <div class="description">
                                <div class="detail"><?php the_excerpt(); ?></div>
                                <div class="overlay"></div>
                                <!-- <div class="readmore"><a href="<?php the_permalink(); ?>">詳細はこちら</a></div> -->
                            </div>
                            </a>
                            <div class="buy-ticket-container">

                                <div class="ticket-info">
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
                                </div>
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
                        </section>
                    </article>
                    </div>


                    <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                     <script>
                        jQuery(document).ready(function($) {
                            var eventsInline = [<?php
                                $i = 0;
                              foreach($dates as $date ){
                                if($i!=0) echo ',';
                                echo  '{ "date": "' . $date . '", "type": "", "title": "", "description": "","url":"" }';
                                $i++;
                              }
                            ?>];

                            $("#eventCalendarCalendarLine").eventCalendar({
                                // eventsjson: '<?php echo bloginfo("template_directory"); ?>/library/json/events.json.php',
                                // jsonDateFormat: 'human',
                                jsonData: eventsInline,
                                showDayAsWeeks: false,
                                txt_prev: '<svg width="13.708px" height="19px"><polyline fill="none" stroke="#000000" points="13.417,18.5 1.416,9.5 13.417,0.5 "/></svg>',
                                txt_next: '<svg width="13.708px" height="19px"><polyline fill="none" stroke="#000000" points="0.417,0.5 12.417,9.5 0.417,18.5 "/></svg>',
                            });
                        });
                    </script>
                </div>



                <footer class="article-footer cf">

                    <div class="specials">
                        <div data-category="<?php echo(ICL_LANGUAGE_CODE=='en' ? '.tokyo-en' : '.tokyo'); ?>" class="category-filter tokyo" >
                            <div class="title"><h3><?php _e("Subscription Concert<br>in Tokyo","bonestheme"); ?></h3></div>
                            <img src="<?php echo bloginfo('template_directory' ); ?>/library/images/bcj-banner-tokyo-bg.jpg" />
                        </div>
                        <div data-category="<?php echo(ICL_LANGUAGE_CODE=='en' ? '.kobe-en' : '.kobe'); ?>" class="category-filter kobe" >
                            <div class="title"><h3><?php _e("Subscription Concert<br>in Kobe","bonestheme"); ?></h3></div>
                            <img src="<?php echo bloginfo('template_directory' ); ?>/library/images/bcj-banner-kobe-bg.jpg" />
                        </div>
                        <!-- <div data-category=".christmas" class="category-filter christmas" >
                            <div class="title"><h3>BCJクリスマス公演</h3></div>
                            <img src="<?php echo bloginfo('template_directory' ); ?>/library/images/bcj-banner-christmas-bg.jpg" />
                        </div> -->
                    </div>
                    <p>
                    <?php if(ICL_LANGUAGE_CODE=="en"): ?>
                    &lt;GENERAL TICKET INFORMATION&gt;<br>
                    Bach Collegium Japan Ticket Center<br>
                    <?php else: ?>
                    ＜チケットに関するお問い合わせ＞<br>
                    バッハ・コレギウム・ジャパン チケットセンター<br> 
                    <?php endif; ?>
                     <?php
                        if(ICL_LANGUAGE_CODE=="en"){
                            echo '℡ +81-3-5301-0950';    
                        }else{
                            echo '℡ 03-5301-0950'; 
                        }
                     ?>

                    </p>
                </footer>

            </div>
            <div class="news-holder wrap-padding">
                <div class="m-all t-all d-all last-col" >
                    <div class="m-all t-all d-all news" >
                        <h3><?php _e("Latest News","bonestheme"); ?></h3>
                <?php
                    $args = array(
                      'post_type' => 'post',
                      'post_status' => 'publish',
                      'orderby' => 'date',
                      'order'   => 'DESC',
                      'posts_per_page' => 4,
                      'meta_query' => array(
                            'relation' => 'OR',
                            array(
                                'key' => 'hide-on-top',
                                'value' => true,
                                'type' => 'BOOLEAN',
                                'compare' => '!='
                            ),
                            array(
                                'key' => 'hide-on-top',
                                'compare' => 'NOT EXISTS'
                            )
                        )
                    );
                    $the_query = new WP_Query( $args );
                    $col_count = 1;
                    if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                        $dateformatstring = "D d F, Y";
                ?>
                        <article class="news-item m-all t-1of2 d-1of4" data-link="<?php the_permalink(); ?>">
                            <header>
                            <span class="category">
                                <?php
                                    $cats = get_the_category( );
                                    $i = 0;
                                    foreach ($cats as $cat){
                                        if($cat->slug!="uncategorized"&&$cat->slug!="uncategorized-en") echo $cat->name;
                                        $i++;
                                    }

                                ?>
                            </span>
                            <div class="title">
                                <?php the_title( );?>
                            </div>
                            <span class="date"><?php the_date( );?></span></header>
                            <section><?php the_excerpt( );?></section>
                            <!-- <footer>続きを読む</footer> -->
                        </article>
                    <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>

                    </div>
                    <br><br><br>

                    <!-- <div class="banner m-all t-all d-all" style="text-align: center">
                        <img src="<?php echo bloginfo('template_directory' ); ?>/library/images/bcj-banner-friends.jpg" />
                    </div> -->
                </div>
                <div class="clear"></div>

            </div>
            <div class="clear"></div>

        </section>
        <!-- Main END -->
        <!-- About START -->
        <section id="about" >
            <div class="overlay"></div>
            <div class="wrap cf" >
            <div class="wrap-inner">
                <h2 class="h-font row-header" >About BCJ</h2>
                <div id="about_bcj_1"><h2><?php _e("Bach Collegium Japan and Masaaki Suzuki","bonestheme"); ?></h2></div>
                <div id="about_bcj_2" >
                        <div class="h_iframe">
                            <img class="ratio" src="http://placehold.it/16x9"/>
                        <script src="//f.vimeocdn.com/js/froogaloop2.min.js"></script>
                        <iframe id="vimeo_player" src="//player.vimeo.com/video/61724704?api=1&amp;player_id=vimeo_player&amp;title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                </div>
                <div id="about_bcj_3" >
                    <?php if(ICL_LANGUAGE_CODE=="en"): ?>
                    <p class="first">
                    Bach Collegium Japan is an ensemble consisting of performers of original instruments and choir formed in 1990 by Masaaki Suzuki, the internationally renowned and highly reputed Bach performer, organist, harpsichordist, conductor and musicologist.
                    </p>

                    <p class="second">
                    Bach Collegium Japan performs frequently in Japan and overseas with the aim of presenting ideal interpretations of Baroque music centring on the religious works of J.S. Bach. In 1995 the ensemble embarked on a project aimed at recording Bach’s complete church cantatas in chronological order. This project was eventually completed in February 2013 and has met with lavish praise in Japan and overseas as an internationally outstanding and exceptional achievement of the first order.
                    </p>

                    <p class="third">
                    Bach Collegium Japan and Masaaki Suzuki were awarded the 45th Suntory Music Prize in 2014. This was also the year when they performed for the first time as far afield as New Zealand and Mexico. The activities of the ensemble are thus increasingly overstepping national borders to win the ensemble a high degree of international recognition.
                    </p>                    
                    <?php else: ?>
                    <p class="first">
                    バッハ・コレギウム・ジャパン（BCJ）は世界的なバッハ演奏家、オルガン・チェンバロ奏者、指揮者、また音楽研究者としてもその才能を高く評価されている鈴木雅明がオリジナル楽器のスペシャリストを擁し、1990年に結成したオーケストラと合唱団です。
                    </p>

                    <p class="second">
                    J.S.バッハの宗教作品を中心としたバロック音楽の理想的上演を目指し国内外で活発な演奏活動を展開してきました。1995年から時系列順で取り組んできた＜バッハ：教会カンタータ全曲シリーズ＞が2013年2月に全曲演奏・録音を完遂し、世界でもまれにみるこの偉業が国内外で大きな話題を呼びました。
                    </p>

                    <p class="third">
                    2014年にはバッハ・コレギウム・ジャパンと鈴木雅明に対して第45回サントリー音楽賞受賞、初のニュージーランド、メキシコ公演を果たすなど、その活動は国境の枠を越え、ますます注目されています。
                    </p>
                    <?php endif; ?> 

                    <div class="clear"></div>
                </div>

                <div id="about_bcj_4"  class="wrap-padding" >
                    <?php if(ICL_LANGUAGE_CODE=="en"): ?>
                    <div class="award_activitity">
                        <h2 class="" >Principal activities:</h2>
                        <ul>
                            <li>Regular concerts in Tokyo, Kobe and Nagoya</li>
                            <li>Overseas performances</li>
                        </ul>
                    </div>
                    <div  class="award_activitity">
                        <h2 class="" >Major awards:</h2>
                        <ul>
                            <li>45th Suntory Music Prize <br>(Masaaki Suzuki and Bach Collegium Japan)</li>
                            <li>Echo Classical Music Prize 2014 <br>(Bach Collegium Japan)</li>
                            <li>Medal with Purple Ribbon, 2011 <br>(Masaaki Suzuki)</li>
                            <li>2008 Arts Award sponsored by the Agency for Cultural Affairs (Prize of the Minister of Education, Culture, Sports, Science and Technology) <br>(Masaaki Suzuki)</li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <div style="display:inline-block;padding: 2%;width:46%; max-width:300px"><a href="<?php echo get_permalink(10); ?>">BCJ profile<br><img style="width:100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner_bcj_profile.jpg" /></a></div>
                    <div style="display:inline-block;padding: 2%;width:46%; max-width:300px"><a href="<?php echo get_permalink(3377); ?>">Masaaki Suzuki profile<br><img style="width:100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner_masaaki_profile.jpg" /></a></div>
                    <div class="clear"></div>
                    <?php else: ?>
                    <div class="award_activitity">
                        <h2 class="" >主な活動</h2>
                        <ul>
                            <li>東京・神戸・名古屋における定期演奏会</li>
                            <li>海外公演</li>
                        </ul>
                    </div>
                    <div  class="award_activitity">
                        <h2 class="" >主な受賞</h2>
                        <ul>
                            <li>第45回サントリー音楽賞<br>（鈴木雅明とバッハ・コレギウム・ジャパン）</li>
                            <li>エコー・クラシック賞2014<br>（バッハ・コレギウム・ジャパン）</li>
                            <li>平成23年紫綬褒章<br>（鈴木雅明）</li>
                            <li>平成20年度芸術推薦文部科学大臣賞<br>（鈴木雅明）</li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <div style="display:inline-block;padding: 2%;width:46%; max-width:300px"><a href="<?php echo get_permalink(get_page_by_path('bcj')->ID); ?>">BCJプロフィール詳細はこちら<br><img style="width:100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner_bcj_profile.jpg" /></a></div>
                    <div style="display:inline-block;padding: 2%;width:46%; max-width:300px"><a href="<?php echo get_permalink(get_page_by_path('masaaki_suzuki')->ID); ?>">鈴木雅明プロフィール詳細はこちら<br><img style="width:100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner_masaaki_profile.jpg" /></a></div>
                    <div class="clear"></div> 
                    <?php endif; ?> 
                    
                </div>

                <div id="about_bcj_5" class="wrap-padding">
                    <h2 class="h-font row-header" >BCJ Recordings</h2>
                    <?php if(ICL_LANGUAGE_CODE!="en"): ?>
                    <h2 style="margin-bottom: 50px">バッハ・コレギウム・ジャパン ディスコグラフィ</h2>
                    <?php endif; ?>
                    <div class="cd-holder-carousel">
                    <?php 
                        $args = array(
                          'post_type' => 'discography',
                          'post_status' => 'publish',
                          'orderby'   => 'rand',
                          'force_no_custom_order' => TRUE,
                          // 'order'     => 'ASC',
                          'posts_per_page' => -1
                        ); 
                        $the_query = new WP_Query( $args );
                        if ( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                                $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "thumbnail" );
                                printf( '<div><img data-lazy="%s"/></div>', esc_url( $thumbnail_src[0] ) );
                            endwhile;
                        endif;
                        wp_reset_postdata();

                    ?>
                        
                    </div>


                    <!-- <span class="bcj-btn ">BCJディスコグラフィ詳細はこちら</span> -->
                    <a href="#" class="go-top">
                         <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px" class="bcj-btn-white">
                            <circle fill="none" stroke="#FFFFFF" cx="20" cy="20" r="19.5"/>
                            <polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="11,24 20,12 29,24"/>
                        </svg>
                        <span>TO THE TOP</span>
                    </a>
                </div>
            </div>
            </div>

        </section>
        <!-- About END -->
        <!-- Support START -->
        <!-- <div class="row"><div class="hr"></div></div> -->
        <!-- <section id="support"  data-stellar-background-ratio="0.5"> -->
        <section id="support"  >
            <!-- <div class="background" data-stellar-ratio="0.5"><div class="overlay"></div></div> -->
            <div class="background" ><div class="overlay"></div></div>
            <div class="wrap cf" style="padding-bottom:100px">
            <div class="wrap-inner" style="padding-bottom:50px">
                <h2 class="h-font row-header ">Support BCJ</h2>
                <div id="support_bcj_1">
                    <h4 style="text-align: center;"><?php _e( 'Introduction to the BCJ Friends and Society', 'bonestheme' ); ?></h4>
                    <div style=" text-align: left;">
                        <?php if(ICL_LANGUAGE_CODE=="en"): ?>
Bach Collegium Japan (BCJ) is widely known as a leading Baroque orchestra and chorus active in Japan but with a worldwide reach. Since its foundation in 1990, it has given around a thousand concerts in 71 cities in 15 countries and has issued more than 80 CDs on the BIS label, and has thus shared the wonders of the music of J.S. Bach with more than a million people all over the world. We aim to continue conveying this precious legacy to more and more people and especially to the young people with whom the future lies. The music of J.S. Bach is composed in a language shared by the whole of mankind. We would look forward to your support and patronage in enabling us to continue our performance, recording and educational activities centring on the music of Bach throughout Europe, America and Asia.
                        <?php else: ?>
                        バッハ・コレギウム・ジャパン（BCJ）は、日本から世界へと発信する有数のバロック・オーケストラおよび合唱団として、広く知られています。1990年に活動を開始して以来、15カ国、71都市で約1,000ものコンサートを行い、また80タイトル以上のCD録音（BISレーベル)を通して、世界の100万人以上の聴衆と共に、J.S.バッハの音楽のすばらしさを共有してきました。今後も、ますます多くの人々に、次世代を担う若い人々に、この宝を、伝えていきたいと願っています。J.S.バッハの音楽は、世界共通の言葉です。ヨーロッパ、アメリカ、さらにアジアの国々、至るところで、バッハを中心とする音楽の演奏・録音・教育活動を続けていくため、どうぞ、皆様のご支援をお願いいたします。
                        <?php endif; ?> 
                        <br><br><br>
                    </div>
                    <a href="<?php echo get_permalink(get_page_by_path('friends_society')->ID); ?>"><span class="bcj-btn invert"><?php _e( 'Read more about BCJ Friends & Society', 'bonestheme' ); ?></span></a>
                </div>
                <div class="h_iframe">
                    <img class="ratio" src="http://placehold.it/16x9"/>
                    <script src="http://www.youtube.com/player_api"></script>
                <!-- <iframe id="ytplayer" width="853" height="480" src="//www.youtube.com/embed/J5bGxCWf0yM?version=3&enablejsapi=1&playerapiid=ytplayer" frameborder="0" allowfullscreen></iframe> -->
    <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <div id="player"></div>

    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '480',
          width: '853',
          videoId: 'J5bGxCWf0yM',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        // event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        // console.log(event.data);
        if (event.data == YT.PlayerState.PLAYING && !done) {
            $.fullwidthAudioPlayer.pause();
        }
      }
 
    </script>
                </div>
            </div>

            <a href="#" class="go-top invert">
                 <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px" class="bcj-btn-black">
                    <circle fill="none" stroke="#000000" cx="20" cy="20" r="19.5"/>
                    <polyline fill="none" stroke="#000000" stroke-miterlimit="10" points="11,24 20,12 29,24"/>
                </svg>
                <span>TO THE TOP</span>
            </a>
            </div>
            <!-- <div class="overlay"></div> -->
        </section>
        <!-- Support END -->
        <section id="contact"  >
            <div class="wrap cf" >
            <div class="wrap-inner">
                <h2 class="h-font row-header ">Contact Us</h2>
                <?php if(ICL_LANGUAGE_CODE!="en"): ?>
                <h4 style="text-align: center;">コンタクト</h4>
                <?php endif; ?>
                <div style=" text-align: left;max-width:400px;margin:auto;padding:1em">
                    <?php if(ICL_LANGUAGE_CODE=="en"): ?>
                    <?php echo do_shortcode('[contact-form-7 id="3307" title="BCJ Contact (EN)"]'); ?>
                    <?php else: ?>
                    <?php echo do_shortcode('[contact-form-7 id="2888" title="BCJ Contact"]'); ?>
                    <?php endif; ?> 
                </div>
                <div style="text-align:center;margin-bottom: 100px">
                    <a href="#" class="go-top invert">
                         <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px" class="bcj-btn-black">
                            <circle fill="none" stroke="#000000" cx="20" cy="20" r="19.5"/>
                            <polyline fill="none" stroke="#000000" stroke-miterlimit="10" points="11,24 20,12 29,24"/>
                        </svg>
                        <span>TO THE TOP</span>
                    </a>
                </div>

            </div>
            </div>
            <!-- <div class="overlay"></div> -->
        </section>
        <!-- Support END -->
        

<?php get_footer(); ?>
