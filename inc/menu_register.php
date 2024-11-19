<?php
register_nav_menu( 'main_menu', __('Main Menu', 'kitbase') );
//walker Menu Position
function kitbase_nav_description( $item_output, $item, $args ) {
  if ( ! empty( $item->description ) ) {
      $item_output = str_replace(
          '</a>',
          '<span class="walker_nav">' . $item->description . '</span></a>',
          $item_output
      );
  }
  return $item_output;
}
add_filter( 'nav_menu_item_output', 'kitbase_nav_description', 10, 3 );