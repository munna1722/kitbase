<?php

 // Theme Title
add_theme_support( 'title_tag' );


add_theme_support( 'post-thumbnails', array('page', 'post') );
add_image_size('post-thumbnails', 970, 350, true);


// Except to 40 Word

function kitbase_excerpt_more($more){
    global $post;
  return '<br> <br> <a class="redmore" href="'.get_permalink( $post->ID) . '">' . 'Read More' . '</a>';
}
add_filter('excerpt_more', 'kitbase_excerpt_more');

function kitbase_excerpt_lenght($length){
  return 40;
}
add_filter('excerpt_length', 'kitbase_excerpt_lenght', 999);


// Pagenav Function
function kitbase_pagenav() {
  global $wp_query;

  $max_pages = $wp_query->max_num_pages;

  $current_page = max(1, get_query_var('paged'));

  if ($max_pages <= 1) {
      return;
  }

  $args = array(
      'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
      'format'    => '?paged=%#%',
      'current'   => $current_page,
      'total'     => $max_pages,
      'prev_text' => __('Prev', 'kitbase'),
      'next_text' => __('Next', 'kitbase'),
      'type'      => 'list', // Creates list format pagination
  );

  // Display pagination
  echo '<div class="wp_pagenav">';
  echo paginate_links($args);
  echo '</div>';
}
