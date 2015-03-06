        <footer id="page-footer" class="footer" role="contentinfo">

          <div id="inner-footer" class="">
                <div class="social-links">
                  <ul>
                    <li><a href="https://twitter.com/bach_collegium" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="https://www.facebook.com/bachcollegiumjapan" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCUTYpCDje-t80JivjsEmUoQ" target="_blank"><i class="fa fa-youtube fa-lg"></i></a></li>

                  </ul>
                </div>


<!--             <nav role="navigation" class="footer-links cf">
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
                    </nav> -->
            <div id="footer-logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" /></a></div>

            <div class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</div>

          </div>

        </footer>

    <?php // all js scripts are loaded in library/bones.php ?>
    <?php wp_footer(); ?>

  </body>

</html> <!-- end of site. what a ride! -->

