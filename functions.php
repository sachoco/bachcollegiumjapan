<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

// LOAD BONES CORE (if you remove this, the theme will break)
require_once( 'library/bones.php' );

// USE THIS TEMPLATE TO CREATE CUSTOM POST TYPES EASILY
require_once( 'library/custom-post-type.php' );

//require_once( 'library/custom-widget.php' );
//require_once( 'library/class.bcj.inc.php' );
//require_once( 'library/bcj_functions.php' );
require_once( 'library/Mobile_Detect.php' );

// CUSTOMIZE THE WORDPRESS ADMIN (off by default)
// require_once( 'library/admin.php' );

/*********************
LAUNCH BONES
Let's get everything up and running.
*********************/

function bones_ahoy() {

  // let's get language support going, if you need it
  load_theme_textdomain( 'bonestheme', get_template_directory() . '/library/translation' );

  // launching operation cleanup
  add_action( 'init', 'bones_head_cleanup' );
  // A better title
  add_filter( 'wp_title', 'rw_title', 10, 3 );
  // remove WP version from RSS
  add_filter( 'the_generator', 'bones_rss_version' );
  // remove pesky injected css for recent comments widget
  add_filter( 'wp_head', 'bones_remove_wp_widget_recent_comments_style', 1 );
  // clean up comment styles in the head
  add_action( 'wp_head', 'bones_remove_recent_comments_style', 1 );
  // clean up gallery output in wp
  add_filter( 'gallery_style', 'bones_gallery_style' );

  // enqueue base scripts and styles
  add_action( 'wp_enqueue_scripts', 'bones_scripts_and_styles', 999 );
  // ie conditional wrapper

  // launching this stuff after theme setup
  bones_theme_support();

  // adding sidebars to Wordpress (these are created in functions.php)
  add_action( 'widgets_init', 'bones_register_sidebars' );

  // cleaning up random code around images
  add_filter( 'the_content', 'bones_filter_ptags_on_images' );
  // cleaning up excerpt
  add_filter( 'excerpt_more', 'bones_excerpt_more' );

} /* end bones ahoy */

// let's get this party started
add_action( 'after_setup_theme', 'bones_ahoy' );


/************* OEMBED SIZE OPTIONS *************/

if ( ! isset( $content_width ) ) {
	$content_width = 640;
}

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 300, true );
add_image_size( 'bones-thumb-300', 300, 150, true );
add_image_size( 'bcj-thumb-300', 300, 170, true );
add_image_size( 'bcj-disc', 150, 150, true );

/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

add_filter( 'image_size_names_choose', 'bones_custom_image_sizes' );

function bones_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'bones-thumb-600' => __('600px by 300px'),
        'bones-thumb-300' => __('300px by 150px'),
        'bcj-thumb-300' => __('300px by 170px'),
    ) );
}

/*
The function above adds the ability to use the dropdown menu to select
the new images sizes you have just created from within the media manager
when you add media to your content blocks. If you add more image sizes,
duplicate one of the lines in the array and name it according to your
new image size.
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Sidebar 1', 'bonestheme' ),
		'description' => __( 'The first (primary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget col span_1 %2$s"><div class="box-inner"',
		'after_widget' => '</div></div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

    register_sidebar(array(
      'id' => 'home_section',
      'name' => __( 'Home Section', 'bonestheme' ),
      'description' => __( 'Items for Home page', 'bonestheme' ),
      'before_widget' => '<div id="%1$s" class="widget col span_1 %2$s"><div class="box-inner"',
      'after_widget' => '</div></div>',
      'before_title' => '<h4 class="widgettitle">',
      'after_title' => '</h4>',
    ));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __( 'Sidebar 2', 'bonestheme' ),
		'description' => __( 'The second (secondary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!


/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>
  <div id="comment-<?php comment_ID(); ?>" <?php comment_class('cf'); ?>>
    <article  class="cf">
      <header class="comment-author vcard">
        <?php
        /*
          this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
          echo get_avatar($comment,$size='32',$default='<path_to_url>' );
        */
        ?>
        <?php // custom gravatar call ?>
        <?php
          // create variable
          $bgauthemail = get_comment_author_email();
        ?>
        <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=40" class="load-gravatar avatar avatar-48 photo" height="40" width="40" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
        <?php // end custom gravatar call ?>
        <?php printf(__( '<cite class="fn">%1$s</cite> %2$s', 'bonestheme' ), get_comment_author_link(), edit_comment_link(__( '(Edit)', 'bonestheme' ),'  ','') ) ?>
        <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'bonestheme' )); ?> </a></time>

      </header>
      <?php if ($comment->comment_approved == '0') : ?>
        <div class="alert alert-info">
          <p><?php _e( 'Your comment is awaiting moderation.', 'bonestheme' ) ?></p>
        </div>
      <?php endif; ?>
      <section class="comment_content cf">
        <?php comment_text() ?>
      </section>
      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </article>
  <?php // </li> is added by WordPress automatically ?>
<?php
} // don't remove this bracket!


/*
This is a modification of a function found in the
twentythirteen theme where we can declare some
external fonts. If you're using Google Fonts, you
can replace these fonts, change it in your scss files
and be up and running in seconds.
*/
function bones_fonts() {
  wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Josefin+Slab:300,400|Cinzel|Playfair+Display|Alegreya');
  wp_enqueue_style( 'googleFonts');
}

add_action('wp_print_styles', 'bones_fonts');

/*-------------------------------------------------------------------------------
  Custom Columns
-------------------------------------------------------------------------------*/

function schedule_columns($columns)
{
  $columns = array(
    'cb'    => '<input type="checkbox" />',
    'thumbnail' =>  __('Thumbnail'),
    'title'   => __('Title'),
    "icl_translations" => $columns['icl_translations'],
    'schedule-date'   => __('Schedule Date'),
    'categories'  => __('Categories'),
    'author'  =>  __('Author'),
    'date'  => __('Date')
  );
  return $columns;
}

function manage_schedule_columns($column)
{
  global $post;
  if($column == 'thumbnail')
  {
    echo the_post_thumbnail( array(80, 80) );
  }
  elseif($column == 'schedule-date')
  {
    if(get_field('schedule-date'))
    {
      $unixtimestamp = strtotime(get_field('schedule-date'));
            $date = date_i18n(get_option( 'date_format' ), $unixtimestamp);
      echo $date;
    }
    else
    {
      echo '';
    }
  }
}

add_action("manage_schedule_posts_custom_column", "manage_schedule_columns", 10, 2);
add_filter("manage_edit-schedule_columns", "schedule_columns");

/*-------------------------------------------------------------------------------
  Sortable Columns
-------------------------------------------------------------------------------*/

function schedule_register_sortable( $columns )
{
  $columns['schedule-date'] = 'schedule-date';
  return $columns;
}

add_filter("manage_edit-schedule_sortable_columns", "schedule_register_sortable" );

// add_filter( 'posts_clauses', 'manage_wp_posts_be_qe_posts_clauses', 1, 2 );
function manage_wp_posts_be_qe_posts_clauses( $pieces, $query ) {
   global $wpdb;

   /**
    * We only want our code to run in the main WP query
    * AND if an orderby query variable is designated.
    */
   if ( $query->is_main_query() && ( $orderby = $query->get( 'orderby' ) ) ) {

      // Get the order query variable - ASC or DESC
      $order = strtoupper( $query->get( 'order' ) );

      // Make sure the order setting qualifies. If not, set default as ASC
      if ( ! in_array( $order, array( 'ASC', 'DESC' ) ) )
         $order = 'ASC';

      switch( $orderby ) {
  
         // If we're ordering by release_date
         case 'schedule-date':
      
            /**
             * We have to join the postmeta table to
             * include our release date in the query.
             */
            $pieces[ 'join' ] .= " LEFT JOIN $wpdb->postmeta wp_rd ON wp_rd.post_id = {$wpdb->posts}.ID AND wp_rd.meta_key = 'schedule-date'";
        
            // Then tell the query to order by our custom field.
            // The STR_TO_DATE function converts the custom field
            // to a DATE type from a string type for
            // comparison purposes. '%m/%d/%Y' tells the query
            // the string is in a month/day/year format.
            $pieces[ 'orderby' ] = "STR_TO_DATE( wp_rd.meta_value,'%m/%d/%Y' ) $order, " . $pieces[ 'orderby' ];
        
         break;
    
      }
  
   }

   return $pieces;

}

/*
 * ADMIN COLUMN - SORTING - ORDERBY
 * http://scribu.net/wordpress/custom-sortable-columns.html#comment-4732
 */
// add_filter( 'request', 'date_column_orderby' );
function date_column_orderby( $vars ) {
  if ( isset( $vars['orderby'] ) && 'schedule-date' == $vars['orderby'] ) {
    $vars = array_merge( $vars, array(
      'meta_key' => 'schedule-date',
      //'orderby' => 'meta_value_num', // does not work
      'orderby' => 'meta_value'
      //'order' => 'asc' // don't use this; blocks toggle UI
    ) );
  }
  return $vars;
}

add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

add_filter( 'tiny_mce_before_init', 'my_mce_before_init' );

function my_mce_before_init( $settings ) {

    $style_formats = array(
      array(
        'title' => 'Schedule Date',
        'inline' => 'span',
        'classes' => 'schedule-date',
        'wrapper' => true
      )
    );

    $settings['style_formats'] = json_encode( $style_formats );

    return $settings;

}

add_action( 'admin_init', 'add_my_editor_style' );

function add_my_editor_style() {
  add_editor_style();
}

add_filter('body_class', 'append_language_class');
function append_language_class($classes){
  $classes[] = ICL_LANGUAGE_CODE;  //or however you want to name your class based on the language code
  return $classes;
}

function translate_date_format($format) {
  if (function_exists('icl_translate'))
    $format = icl_translate('Formats', $format, $format);
return $format;
}
add_filter('option_date_format', 'translate_date_format');




add_action( 'wp_ajax_get_content', 'get_content_callback');
add_action( 'wp_ajax_nopriv_get_content', 'get_content_callback');
function get_content_callback(){
  global $post;
  if(isset($_REQUEST[id])) $id = $_REQUEST[id];
  $post = get_post($id);

  echo '<div class="item content" data-id="'.$id.'"><div class="wrap">';
  echo '<a href="#" class="close"><svg x="0px" y="0px" width="35px" height="35px" viewBox="0 0 35 35" ><line fill="none" stroke="#FFFFFF" x1="33.562" y1="0.746" x2="0.562" y2="33.746"/><line fill="none" stroke="#FFFFFF" x1="33.562" y1="33.746" x2="0.562" y2="0.746"/></svg></a>';
  echo '<div class="inner"><h2>'.$post->post_title.'</h2><div class="leadimage">'.get_the_post_thumbnail( $id, array( 400 ) ).'</div><div class="text">'.$post->post_content.'</div></div></div>';
?> 
      <div class="related-concerts">
        <h3>関連公演情報</h3>
        <div class="upcoming">
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

                    $the_query = new WP_Query( $args );
                    $col_count = 1;
                    $dates = [];
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
                     
                </div>  
              </div> 
    
      </div>
      <div class="footer">
              <a href="#" class="go-top">
                   <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px" class="bcj-btn-white">
                      <circle fill="none" stroke="#FFFFFF" cx="20" cy="20" r="19.5"/>
                      <polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="11,24 20,12 29,24"/>
                  </svg>
                  <span>TO THE TOP</span>
              </a>
      </div> 
<?php
  echo "</div>";
}



add_action( 'pre_get_posts', 'be_change_discography_posts_per_page' );
/**
 * Change Posts Per Page for Discography Archive
 * 
 *
 */
function be_change_discography_posts_per_page( $query ) {
  
  if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'discography' ) ) {
    $query->set( 'posts_per_page', '-1' );
  }

}

/* DON'T DELETE THIS CLOSING TAG */ ?>
