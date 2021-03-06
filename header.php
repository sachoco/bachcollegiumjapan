<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

    <head>
        <meta charset="utf-8">

        <?php // force Internet Explorer to use the latest rendering engine available ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php wp_title(''); ?></title>

        <?php // mobile meta (hooray!) ?>
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
        <!--[if IE]>
        	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <![endif]-->
        <?php // or, set /favicon.ico for IE10 win ?>
        <meta name="msapplication-TileColor" content="#f01d4f">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php // wordpress head functions ?>
        <?php wp_head(); ?>
        <?php // end of wordpress head ?>
          <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <?php 
            $detect = new Mobile_Detect;
            // Any mobile device (phones or tablets).
            if ( $detect->isMobile() ) {
        ?>
            <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/mobile.css">
        <?php
            }
        ?>
        <?php // drop Google Analytics Here ?>
        <?php // end analytics ?>

    </head>

    <body <?php body_class(); ?>>
<?php if( is_home() || is_front_page() ): ?>
        <!-- Background START -->
        <div id="background">
            <div id="intro-background"><div class="overlay"></div></div>
            <div id="about-background" class="disable"><div class="overlay"></div></div>
        </div>
        <!-- Background END -->
        <!-- Intro START -->
        <section id="intro" class="snap">
            <div class="overlay"></div>
            <div class="content">
                <div class="profile">
                    <div>
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" />
                        </div>
                        <?php if(ICL_LANGUAGE_CODE=="en"): ?>
                        <div class="roles">Bach’s music transmitted to the future</div>

                        <div class="short-profile">
                            The music of J.S. Bach is part of the joint patrimony of mankind.<br>
Ever since the formation of Bach Collegium Japan, we have continued to convey Bach’s music from Japan out to the wider world.<br>
Our desire is to enable as many people as possible to share with us the joy of this wonderful music.
                        </div> 
                        <?php else: ?>
                        <div class="roles">バッハの音楽を未来へ</div>

                        <div class="short-profile">
                            J.S.バッハの音楽は人類共通の財産です<br>私たちバッハ・コレギウム・ジャパンは創設以来、日本から世界へバッハ音楽を発信し続けてきました。<br>この素晴らしい音楽を一人でも多くの人と共有したい<br>それが私たちの願いです。
                        </div>  
                        <?php endif; ?>      
                    </div>
                </div>
                <div class="start">
                    <a href="#home" id="scrolldownHome" class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px">
                            <circle fill="#FFFFFF" stroke="#FFFFFF" stroke-miterlimit="10" cx="20" cy="20" r="19.5"/>
                            <polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="29,15.647 20,27.647 11,15.647" />
                        </svg>
                        <br><span>SCROLL DOWN</span>
                    </a>        
                </div>
                <div class="navigation">
                        <nav style="position:relative;transform:none;left:auto;bottom:auto">
                        <?php wp_nav_menu(array(
                            'container' => false,                           // remove nav container
                            'container_class' => 'menu cf',                 // class of container (should you choose to use it)
                            'menu' => __( 'The Top Menu', 'bonestheme' ),  // nav name
                            'menu_class' => 'nav',               // adding custom nav class
                            'theme_location' => 'top-nav',                 // where it's located in the theme
                            'before' => '',                                 // before the menu
                            'after' => '',                                  // after the menu
                            'link_before' => '',                            // before each link
                            'link_after' => '',                             // after each link
                            'depth' => 1,                                   // limit the depth of the nav
                            'fallback_cb' => ''                             // fallback function (if there is one)
                        )); ?>
                        </nav>  
                        <div style="padding-top: 30px;font-size:1.2em"><?php do_action('icl_language_selector'); ?></div>      
                        <!-- <div style="padding-top: 30px;font-size:1.2em">English content will be published soon. Please visit <a style="color:white;" href="http://bcj2014.bachcollegiumjapan.org/en">our old site</a> for the time being.</div>       -->
                </div>
            </div>
        </section>
        <!-- Intro END -->
<?php elseif(is_page()): ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- Background START -->
<!--         <div id="background">
            <div id="page-background" ><div class="overlay"></div></div>
            <div id="page-background" style="background-image:url(<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); echo $image[0]; ?>);" ><div class="overlay"></div></div>
        </div> -->
        <!-- Background END -->
    <?php endwhile; endif; ?>
<?php endif; ?>
        <!-- Main START -->
        <section id="main" class="snap" role="main">
<?php //if( is_home() || is_front_page() ): ?>
        <header>
            <div class="wrap">
                <header class="header" role="banner">
                    <a href="<?php echo home_url(); ?>#main" rel="nofollow" class="svg">
                        <!-- <object data="<?php echo get_template_directory_uri(); ?>/library/images/bachcollegiumjapan-title.svg" type="image/svg+xml" class="mailicon">
                        </object> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/bachcollegiumjapan-title.svg" >
                    </a>
                </header>
            </div>
<?php //endif; ?>
<!--             <nav class="main-nav <?php //if( !is_home() && !is_front_page() ) echo 'inverse'  ?>" role="navigation" style="margin:0;">
 -->            <nav class="main-nav <?php if( !is_home() && !is_front_page() ) echo 'page'  ?>" role="navigation" style="margin:0;">
            <div id="menu-icon" class="mobile-button"><span>Menu</span></div>
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
       </header> 