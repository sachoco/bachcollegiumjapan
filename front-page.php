<?php get_header(); ?>
            <div id="feature-slider"  >

                <div class="wrap">
                    <div class="slick-slides">
                    <!-- Slide item 1 -->
                        <div class="slide-item">
                            <a href="<?php echo get_permalink(get_page_by_path('2015subscription')->ID); ?>">
                            <div class="slide-bg" style="width: 100%; height: 100%; opacity: 1; visibility: inherit; background-image: url(<?php echo bloginfo('template_directory' ); ?>/library/images/slideshow/teiki.jpg); background-color: rgba(0, 0, 0, 0); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;"></div>
                            <div class="slide-content overlay">
                                <div class="inner-content">
                                    <div>バッハ・コレギウム・ジャパン</div>
                                    <img class="divider" style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />

                                    <h1 >２０１５年度定期演奏会<br>公演ラインナップ発表</h1>
                                    <img class="divider" style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />

                                    <h1>定期会員募集中</h1>
                                    <img class="divider" style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />
                                    <div>詳細はこちら</div>
                                </div>
                            </div>
                            </a>
                            <div class="slide-overlay"></div>
                        </div>


                    </div>
                </div>

             </div>

            <div class="upcoming m-all t-all d-all" id="schedule">
                <h2 class="h-font row-header upcoming"><?php _e( '公演情報', 'bonestheme' ); ?></h2>
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
                                            'value' => date("Ymd"),
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

                            <div class="location"><span class="country"><?php the_field('location', $post->ID); ?></span> <br><span class="country">（<?php the_field('country', $post->ID); ?>）</span></div>
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
                                <!-- <div class="readmore"><a href="<?php the_permalink(); ?>">詳細はこちら</a></div> -->
                            </div>
                            </a>
                            <div class="buy-ticket-container">
                                <span class="buy-ticket "><span class="buy-text">チケット購入</span></span>
                                <span class="playguide">
                                <?php
                                    $pia = get_field('ticket_pia');
                                    $eplus = get_field('e+');
                                    if($pia||$eplus) :
                                ?>
                                <?php
                                    if($pia){
                                       echo '<span><a target="_blank" href="'. $pia .'"">チケットぴあ</a></span>'; 
                                   }else{
                                       echo '<span class="disabled">チケットぴあ</span>'; 
                                   }
                                    if($eplus){
                                       echo '<span><a target="_blank" href="'. $eplus .'"">イープラス</a></span>'; 
                                   }else{
                                       echo '<span class="disabled">イープラス</span>'; 
                                   }                                       
                                ?>
                                <?php
                                    else:

                                    echo 'バッハ・コレギウム・ジャパン チケットセンター <br>℡ 03-5301-0950';

                                    endif;
                                ?>
                                </span>
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
                        <div data-category=".tokyo" class="category-filter tokyo" >
                            <div class="title"><h3>東京定期演奏会</h3></div>
                            <img src="<?php echo bloginfo('template_directory' ); ?>/library/images/bcj-banner-tokyo-bg.jpg" />
                        </div>
                        <div data-category=".kobe" class="category-filter kobe" >
                            <div class="title"><h3>神戸定期演奏会</h3></div>
                            <img src="<?php echo bloginfo('template_directory' ); ?>/library/images/bcj-banner-kobe-bg.jpg" />
                        </div>
                        <!-- <div data-category=".christmas" class="category-filter christmas" >
                            <div class="title"><h3>BCJクリスマス公演</h3></div>
                            <img src="<?php echo bloginfo('template_directory' ); ?>/library/images/bcj-banner-christmas-bg.jpg" />
                        </div> -->
                    </div>
                </footer>

            </div>
            <div class="news-holder wrap-padding">
                <div class="m-all t-all d-all last-col" >
                    <div class="m-all t-all d-all news" >
                        <h3>お知らせ</h3>
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
                                        if($cat->slug!="uncategorized") echo $cat->name;
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
                <div id="about_bcj_1"><h2>バッハ・コレギウム・ジャパンと鈴木雅明</h2></div>
                <div id="about_bcj_2" >
                        <div class="h_iframe">
                            <img class="ratio" src="http://placehold.it/16x9"/>
                        <script src="//f.vimeocdn.com/js/froogaloop2.min.js"></script>
                        <iframe id="vimeo_player" src="//player.vimeo.com/video/61724704?api=1&amp;player_id=vimeo_player&amp;title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                </div>
                <div id="about_bcj_3" >
                    <p class="first">
                    バッハ・コレギウム・ジャパン（BCJ）は世界的なバッハ演奏家、オルガン・チェンバロ奏者、指揮者、また音楽研究者としてもその才能を高く評価されている鈴木雅明がオリジナル楽器のスペシャリストを擁し、1990年に結成したオーケストラと合唱団です。
                    </p>

                    <p class="second">
                    J.S.バッハの宗教作品を中心としたバロック音楽の理想的上演を目指し国内外で活発な演奏活動を展開してきました。1995年から時系列順で取り組んできた＜バッハ：教会カンタータ全曲シリーズ＞が2013年2月に全曲演奏・録音を完遂し、世界でもまれにみるこの偉業が国内外で大きな話題を呼びました。
                    </p>

                    <p class="third">
                    2014年にはバッハ・コレギウム・ジャパンと鈴木雅明に対して第45回サントリー音楽賞受賞、初のニュージーランド、メキシコ公演を果たすなど、その活動は国境の枠を越え、ますます注目されています。
                    </p>
                    <div class="clear"></div>
                </div>

                <div id="about_bcj_4"  class="wrap-padding" >
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
                </div>

                <div id="about_bcj_5" class="wrap-padding">
                    <h2 class="h-font row-header" >BCJ Recordings</h2>
                    <h2 style="margin-bottom: 50px">バッハ・コレギウム・ジャパン ディスコグラフィ</h2>

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
                         <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px">
                            <circle fill="#FFFFFF" cx="20" cy="20" r="20"/>
                            <polyline fill="none" stroke="#000000" stroke-miterlimit="10" points="11,24 20,12 29,24"/>
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
                    <h4 style="text-align: center;">フレンズ＆ソサエティのご案内</h4>
                    <div style=" text-align: left;">
                        バッハ・コレギウム・ジャパン（BCJ）は、日本から世界へと発信する有数のバロック・オーケストラおよび合唱団として、広く知られています。1990年に活動を開始して以来、15カ国、71都市で約1,000ものコンサートを行い、また80タイトル以上のCD録音（BISレーベル)を通して、世界の100万人以上の聴衆と共に、J.S.バッハの音楽のすばらしさを共有してきました。今後も、ますます多くの人々に、次世代を担う若い人々に、この宝を、伝えていきたいと願っています。J.S.バッハの音楽は、世界共通の言葉です。ヨーロッパ、アメリカ、さらにアジアの国々、至るところで、バッハを中心とする音楽の演奏・録音・教育活動を続けていくため、どうぞ、皆様のご支援をお願いいたします。<br><br><br>
                    </div>
                    <a href="<?php echo get_permalink(get_page_by_path('friends_society')->ID); ?>"><span class="bcj-btn invert">BCJフレンズ＆ソサエティ詳細はこちら</span></a>
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
                 <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px">
                    <circle fill="#000000" cx="20" cy="20" r="20"/>
                    <polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="11,24 20,12 29,24"/>
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
                <h4 style="text-align: center;">コンタクト</h4>
                <div style=" text-align: left;max-width:400px;margin:auto;padding:1em">
                    <?php echo do_shortcode('[contact-form-7 id="2888" title="BCJ Contact"]'); ?>
                </div>
                <div style="text-align:center;margin-bottom: 100px">
                    <a href="#" class="go-top invert">
                         <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px">
                            <circle fill="#000000" cx="20" cy="20" r="20"/>
                            <polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="11,24 20,12 29,24"/>
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
