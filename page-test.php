<?php get_header("test"); ?>
<div id="background">
    <div id="intro-background"><div class="overlay"></div></div>
    <div id="about-background" class="disable"><div class="overlay"></div></div>
</div>
<!-- Intro START -->
<section id="intro">
    <!-- <div class="background"><div class="overlay"></div></div> -->
    <div class="content">
        <div class="logo" >
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" />
        </div>
        <div >
            <div class="roles">バッハの音楽を未来へ</div>
            <p class="short-profile">J.S.バッハの音楽は人類共通の財産です<br>私たちバッハ・コレギウム・ジャパンは創設以来、日本から世界へバッハ音楽を発信し続けてきました<br>この素晴らしい音楽を一人でも多くの人と共有したい<br>それが私たちの願いです
</p>
        </div>
        <a href="#home" id="scrolldownHome" class="svg">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px">
                <circle opacity="0.7" fill="#FFFFFF" cx="20" cy="19.647" r="20"/>
                <polyline fill="none" stroke="#000000" stroke-miterlimit="10" points="29,15.647 20,27.647 11,15.647     "/>
            </svg>
        </a>

    </div>
    <nav class="main-nav" role="navigation">
    <?php wp_nav_menu(array(
        'container' => false,                           // remove nav container
        'container_class' => 'menu cf',                 // class of container (should you choose to use it)
        'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
        'menu_class' => 'nav top-nav cf effect2',               // adding custom nav class
        'theme_location' => 'main-nav',                 // where it's located in the theme
        'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
        'depth' => 0,                                   // limit the depth of the nav
        'fallback_cb' => ''                             // fallback function (if there is one)
    )); ?>
    </nav>
    <!-- <div class="overlay"></div> -->
</section>
<!-- Intro END -->
<!-- Main START -->
<section id="main"  role="main">
    <div class="wrap">
        <header class="header" role="banner">
            <a href="<?php echo home_url(); ?>" rel="nofollow" class="svg">
                <object data="<?php echo get_template_directory_uri(); ?>/library/images/bachcollegiumjapan-title.svg" type="image/svg+xml" class="mailicon">
                </object>
            </a>
        </header>
    </div>

    <nav class="main-nav" role="navigation" style="margin:0;">
    <?php wp_nav_menu(array(
    'container' => false,                           // remove nav container
    'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    'menu_class' => 'nav top-nav cf effect2',               // adding custom nav class
    'theme_location' => 'main-nav',                 // where it's located in the theme
    'before' => '',                                 // before the menu
    'after' => '',                                  // after the menu
    'link_before' => '',                            // before each link
    'link_after' => '',                             // after each link
    'depth' => 0,                                   // limit the depth of the nav
    'fallback_cb' => ''                             // fallback function (if there is one)
    )); ?>
    <?php do_action('icl_language_selector'); ?>
    </nav>

    <div id="feature-slider"  >

        <div class="wrap">
            <div class="slick-slides">
                <div class="slide-item">
                    <div class="slide-bg" style="width: 100%; height: 100%; opacity: 1; visibility: inherit; background-image: url(<?php echo bloginfo('template_directory' ); ?>/library/images/discography.jpg); background-color: rgba(0, 0, 0, 0); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;"></div>
                    <div class="slide-content overlay">
                        <div>次回BCJ定期公演</div>
                        <img style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />

                        <h1 >J.S. バッハ<br>教会カンタータ vol.68</h1>
                        <img style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />

                        <h1>6.22</h1>
                        <div>（水）14時</div>
                        <img style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />

                        <div>神戸松蔭チャペル</div>
                    </div>
                    <div class="slide-overlay"></div>
                    <!-- <img src="<?php echo bloginfo('template_directory' ); ?>/library/images/discography.jpg" /> -->
                </div>
                <div class="slide-item">
                    <div class="slide-bg" style="width: 100%; height: 100%; opacity: 1; visibility: inherit; background-image: url(<?php echo bloginfo('template_directory' ); ?>/library/images/gallery.jpg); background-color: rgba(0, 0, 0, 0); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;"></div>
                    <div class="slide-content">
                        <div>次回BCJ定期公演</div>
                        <img style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />
                        <h1 >J.S. バッハ<br>教会カンタータ vol.68</h1>
                        <img style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />
                        <h1 >6.22</h1>
                        <div>（水）14時</div>
                        <img style="display: block;margin:auto;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAERJREFUeNpiYEAD////V2DABoAS64H4PzaJgP8IUAASY4RKvAdSAmjqLzBBGROB+AOa5AdkYx2QjE3AZu9+qBVgABBgAL2WNvKVGTq0AAAAAElFTkSuQmCC" />
                        <div>神戸松蔭チャペル</div>
                    </div>
                    <div class="slide-overlay"></div>
                    <!-- <img src="<?php echo bloginfo('template_directory' ); ?>/library/images/gallery.jpg" /> -->
                </div>
                <div class="slide-item">
                    <div class="slide-bg" style="width: 100%; height: 100%; opacity: 1; visibility: inherit; background-image: url(<?php echo bloginfo('template_directory' ); ?>/library/images/background2.jpg); background-color: rgba(0, 0, 0, 0); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;"></div>
                    <div class="slide-content overlay">
                        <div>次回BCJ定期公演</div>
                        <h1>J.S. バッハ<br>教会カンタータ vol.68</h1>
                        <h1>6.22</h1>
                        <div>（水）14時</div>
                        <div>神戸松蔭チャペル</div>
                    </div>
                    <div class="slide-overlay"></div>
                    <!-- <img src="<?php echo bloginfo('template_directory' ); ?>/library/images/background2.jpg" /> -->
                </div>
            </div>
        </div>

     </div>

    <div class="upcoming m-all t-all d-all">
        <h2 class="h-font row-header upcoming"><?php _e( '公演情報', 'bonestheme' ); ?></h2>
        <div class="" style="max-width: 1000px; margin:auto;">
            <div id="eventCalendarCalendarLine"></div>
            <script>
                jQuery(document).ready(function($) {
                    $("#eventCalendarCalendarLine").eventCalendar({
                        eventsjson: '<?php echo bloginfo("template_directory"); ?>/library/json/events.json.php',
                        showDayAsWeeks: false,
                        txt_prev: '<svg width="13.708px" height="19px"><polyline fill="none" stroke="#000000" points="13.417,18.5 1.416,9.5 13.417,0.5 "/></svg>',
                        txt_next: '<svg width="13.708px" height="19px"><polyline fill="none" stroke="#000000" points="0.417,0.5 12.417,9.5 0.417,18.5 "/></svg>',
                    });
                });
            </script>
        </div>


        <div class="overview-holder-carousel" >
        <?php
            $args = array(
              'post_type' => 'schedule',
              'post_status' => 'publish',
              'meta_key' => 'date',
              'orderby' => 'meta_value_num',
              'order'   => 'ASC'
            );
            $the_query = new WP_Query( $args );
            $col_count = 1;
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $dateformatstring = "D d F, Y";
                $unixtimestamp = strtotime(get_field('date'));
                $month = date_i18n("n", $unixtimestamp);
                $day = date_i18n("d", $unixtimestamp);
                $dayofweek = date_i18n("D", $unixtimestamp);
        ?>

            <div class="overview" data-month="<?php echo $month;?>">
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
                            printf( '<img src="http://placehold.it/300x170" data-lazy="%s"/>', esc_url( $thumbnail_src[0] ) );
                        ?>
                        <?php //the_post_thumbnail( "bcj-thumb-300"); ?>
                    </div>
                    <div class="title">
                        <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                    </div>
                    <div class="description">
                        <div class="detail"><?php the_excerpt(); ?></div>
                        <div class="readmore">詳細はこちら</div>
                        <span class="buy-ticket "><span class="buy-text">チケット購入</span><span class="playguide">チケットぴあ　イープラス</span></span>
                    </div>
                </section>
            </article>
            </div>


            <?php
                    endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </div>



        <footer class="article-footer cf">
            <div class="specials">
                <img src="<?php echo bloginfo('template_directory' ); ?>/library/images/bcj-banner-tokyo.jpg" />
                <img src="<?php echo bloginfo('template_directory' ); ?>/library/images/bcj-banner-nagoya.jpg" />
                <img src="<?php echo bloginfo('template_directory' ); ?>/library/images/bcj-banner-karuizawa.jpg" />
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
              'posts_per_page' => 4
            );
            $the_query = new WP_Query( $args );
            $col_count = 1;
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $dateformatstring = "D d F, Y";
        ?>
                <article class="news-item m-1of4 t-1of4 d-1of4">
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

            <div class="banner m-all t-all d-all" style="text-align: center">
                <img src="<?php echo bloginfo('template_directory' ); ?>/library/images/bcj-banner-friends.jpg" />
            </div>
        </div>
        <div class="clear"></div>

    </div>
    <div class="clear"></div>

</section>
<!-- Main END -->
<!-- About START -->
<section id="about" >
    <!-- <div class="background" data-stellar-ratio="0.5"><div class="overlay"></div></div> -->
    <div class="wrap cf" >
    <div class="wrap-inner">
        <h2 class="h-font row-header" >About BCJ</h2>
        <div id="about_bcj_1"><h2>バッハ・コレギウム・ジャパンと鈴木雅明</h2></div>
        <div id="about_bcj_2" >
                <div class="h_iframe">
                    <img class="ratio" src="http://placehold.it/16x9"/>
                <iframe src="//player.vimeo.com/video/61724704?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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

        <div id="about_bcj_4"  class="wrap-padding animated-element" data-on="1200">
            <div style="display:inline-block;padding: 2%;width:46%; max-width:250px">
                <h2 class="" >主な活動</h2>
                <ul>
                    <li>東京・神戸・名古屋における定期演奏会</li>
                    <li>海外公演</li>
                </ul>
            </div>
            <div style="display:inline-block;padding: 2%;width:46%; max-width:250px">
                <h2 class="" style="margin-top: 50px;">主な受賞</h2>
                <ul>
                    <li>第45回サントリー音楽賞（鈴木雅明とバッハ・コレギウム・ジャパン）</li>
                    <li>エコー・クラシック賞2014（バッハ・コレギウム・ジャパン）</li>
                    <li>平成23年紫綬褒章（鈴木雅明）</li>
                    <li>平成20年度芸術推薦文部科学大臣賞（鈴木雅明）</li>
                </ul>
            </div>
            <div class="clear"></div>
            <div style="display:inline-block;padding: 2%;width:46%; max-width:300px">BCJプロフィール詳細はこちら<br><img style="width:100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner_bcj_profile.jpg" /></div>
            <div style="display:inline-block;padding: 2%;width:46%; max-width:300px">鈴木雅明プロフィール詳細はこちら<br><img style="width:100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner_masaaki_profile.jpg" /></div>
            <div class="clear"></div>
        </div>

        <div id="about_bcj_5" class="wrap-padding animated-element" data-on="1600">
            <h2 class="h-font row-header" style="margin-bottom: 50px">BCJ Recordings</h2>

            <div class="cd-holder-carousel">
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></div>
                <div><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></div>
            </div>


            <span class="bcj-btn ">BCJディスコグラフィ詳細はこちら</span>
        </div>
    </div>
    </div>

</section>
<!-- About END -->
<!-- Support START -->
<div class="row"><div class="hr"></div></div>
<!-- <section id="support"  data-stellar-background-ratio="0.5"> -->
<section id="support"  >
    <div class="background" data-stellar-ratio="0.5"><div class="overlay"></div></div>
    <div class="wrap cf" >
    <div class="wrap-inner">
        <h2 class="h-font row-header ">Support BCJ</h2>
        <div id="support_bcj_1">
            <h4 style="text-align: center;">フレンズ＆ソサエティのご案内</h4>
            <div style=" text-align: left;">
                バッハ・コレギウム・ジャパン（BCJ）は、日本から世界へと発信する有数のバロック・オーケストラおよび合唱団として、広く知られています。1990年に活動を開始して以来、15カ国、71都市で約1,000ものコンサートを行い、また80タイトル以上のCD録音（BISレーベル)を通して、世界の100万人以上の聴衆と共に、J.S.バッハの音楽のすばらしさを共有してきました。今後も、ますます多くの人々に、次世代を担う若い人々に、この宝を、伝えていきたいと願っています。J.S.バッハの音楽は、世界共通の言葉です。ヨーロッパ、アメリカ、さらにアジアの国々、至るところで、バッハを中心とする音楽の演奏・録音・教育活動を続けていくため、どうぞ、皆様のご支援をお願いいたします。<br><br><br>
            </div>
                <div class="h_iframe">
                    <img class="ratio" src="http://placehold.it/16x9"/>
                <iframe width="853" height="480" src="//www.youtube.com/embed/J5bGxCWf0yM?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            <span class="bcj-btn ">BCJフレンズ＆ソサエティ詳細はこちら</span>
        </div>
    </div>
    </div>
    <!-- <div class="overlay"></div> -->
</section>


<footer class="footer" role="contentinfo">

  <div id="inner-footer" class="">

    <nav role="navigation" class="footer-links cf">
              <?php wp_nav_menu(array(
                'container' => '',                              // remove nav container
                'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
                'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
                'menu_class' => 'nav footer-nav cf',            // adding custom nav class
                'theme_location' => 'footer-links',             // where it's located in the theme
                'before' => '',                                 // before the menu
                'after' => '',                                  // after the menu
                'link_before' => '',                            // before each link
                'link_after' => '',                             // after each link
                'depth' => 0,                                   // limit the depth of the nav
                'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
              )); ?>
            </nav>
    <div id="footer-logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" /></a></div>

    <div class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</div>

  </div>

</footer>


<?php get_footer("test"); ?>
