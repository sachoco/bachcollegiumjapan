<?php

class BCJ_Nav_Menu extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth, $args) {
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

    $class_names = $value = '';

    $classes = empty( $item->classes ) ? array() : (array) $item->classes;

    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
    $class_names = ' class="' . esc_attr( $class_names ) . '"';

    $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

    $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
    $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
    $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';

    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '<br /><span class="sub">' . $item->description . '</span>';
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}



    // public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    //     $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

    //     $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    //     $classes[] = 'menu-item-' . $item->ID;

    //     $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    //     $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';


    //     $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    //     $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

    //     $output .= $indent . '<li' . $id . $class_names .'>';

    //     $atts = array();
    //     $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
    //     $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
    //     $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
    //     $atts['href']   = ! empty( $item->url )        ? $item->url        : '';


    //     $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

    //     $attributes = '';
    //     foreach ( $atts as $attr => $value ) {
    //         if ( ! empty( $value ) ) {
    //             $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
    //             $attributes .= ' ' . $attr . '="' . $value . '"';
    //         }
    //     }

    //     $item_output = $args->before;
    //     $item_output .= '<a'. $attributes .'>';
    //     /** This filter is documented in wp-includes/post-template.php */
    //     $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    //     $item_output .= '</a>';
    //     $item_output .= $args->after;

    //     $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    // }