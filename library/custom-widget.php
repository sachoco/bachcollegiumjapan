<?php
// Creating the widget
class BCJ_calendar_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
        // Base ID of your widget
        'bcj_calendar',

        // Widget name will appear in UI
        __('BCJ Calendar Widget', 'bonestheme'),

        // Widget description
        array( 'description' => __( 'Shows BCJ schedule calendar', 'bonestheme' ), )
        );
    }

    // Creating widget front-end
    // This is where the action happens
    public function widget( $args, $instance ) {
        $title = __('Calendar', 'bonestheme');
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];

        echo $args['before_title'] . $title . $args['after_title'];

        // This is where you run the code and display the output
        echo '<div id="eventCalendarDefault"></div>';
        ?>
<script type="text/javascript">

jQuery(document).ready(function($) {

  $("#eventCalendarDefault").eventCalendar({
    eventsjson: 'json/events.json.php' // link to events json
  });

});

</script>
<?php
        echo $args['after_widget'];
    }

    // Widget Backend
    public function form( $instance ) {

    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        return $instance;
     }
} // Class wpb_widget ends here

// Creating the widget
class BCJ_nextshow_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
        // Base ID of your widget
        'bcj_nextshow',

        // Widget name will appear in UI
        __('BCJ Next Show Widget', 'bonestheme'),

        // Widget description
        array( 'description' => __( 'Shows BCJ next concert', 'bonestheme' ), )
        );
    }

    // Creating widget front-end
    // This is where the action happens
    public function widget( $args, $instance ) {
        $title = __('Next Concert', 'bonestheme');
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];

        echo $args['before_title'] . $title . $args['after_title'];

                  $query_args = array(
                    'post_type' => 'schedule',
                    'post_status' => 'publish',
                    'meta_key' => 'date',
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC',
                    'posts_per_page' => 1
                  );
                  $the_query = new WP_Query( $query_args );
                  if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();

                ?>


                    <div class="thumb">
                      <?php the_post_thumbnail( 'bones-thumb-300'); ?>
                    </div>

                    <div class="title">
                      <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                    </div>
                    <div class="meta h2">
                      <div class="date_time"><?php the_field('date', $post->ID); ?> <?php $time = get_field('time', $post->ID); if($time) echo "START"." ".$time;   ?></div>
                      <div class="location"><?php the_field('location', $post->ID); ?></div>
                    </div>
                    <div class="excerpt"><?php the_excerpt(); ?></div>

                    <button class="buy_ticket">チケット購入</button>


                <?php
                    endwhile;
                  endif;
                  wp_reset_postdata();

        echo $args['after_widget'];
    }

    // Widget Backend
    public function form( $instance ) {

    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        return $instance;
     }
} // Class wpb_widget ends here


// Creating the widget
class BCJ_featuredshow_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
        // Base ID of your widget
        'bcj_featuredshow',

        // Widget name will appear in UI
        __('BCJ Featured Show Widget', 'bonestheme'),

        // Widget description
        array( 'description' => __( 'Shows BCJ featured concert', 'bonestheme' ), )
        );
    }

    // Creating widget front-end
    // This is where the action happens
    public function widget( $args, $instance ) {
        $title = __('Concert', 'bonestheme');
        // before and after widget arguments are defined by themes

       $query_args = array(
          'post_type' => 'schedule',
          'post_status' => 'publish',
          'meta_key' => 'date',
          'orderby' => 'meta_value_num',
          'order' => 'ASC'
        );
        $the_query = new WP_Query( $query_args );
        if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();


        echo $args['before_widget'];

        echo $args['before_title'] . $title . $args['after_title'];


                ?>


                    <div class="thumb">
                      <?php the_post_thumbnail( 'bones-thumb-300'); ?>
                    </div>

                    <div class="title">
                      <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                    </div>
                    <div class="meta h2">
                      <div class="date_time"><?php the_field('date', $post->ID); ?> <?php $time = get_field('time', $post->ID); if($time) echo "START"." ".$time;   ?></div>
                      <div class="location"><?php the_field('location', $post->ID); ?></div>
                    </div>
                    <div class="excerpt"><?php the_excerpt(); ?></div>

                    <button class="buy_ticket">チケット購入</button>


                <?php


        echo $args['after_widget'];
                    endwhile;
                  endif;
                  wp_reset_postdata();
    }

    // Widget Backend
    public function form( $instance ) {

    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        return $instance;
     }
} // Class wpb_widget ends here

// Register and load the widget
function bcj_load_widget() {
    register_widget( 'BCJ_calendar_widget' );
    register_widget( 'BCJ_nextshow_widget' );
    register_widget( 'BCJ_featuredshow_widget' );
}
add_action( 'widgets_init', 'bcj_load_widget' );
?>