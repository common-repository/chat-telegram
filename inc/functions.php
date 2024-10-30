<?php
 /**
  * 
  * @package    Chat Telegram- WordPress plugin
  * @version    1.0
  * @author     ThemeAtelier
  * @Websites: https://themeatelier.net/
  *
  */
  if( ! defined( 'ABSPATH' ) ) {
    die( CTS_ALERT_MSG );
  }

/**
 * Chat Telegram buttons init
 *
 *
 */

function cts_buttons_template_init( $args ) {
  $buttonObj = new Cts_Buttons_Template( $args );

    if( !empty( $args['style'] ) ) {

    // Style Switch
    switch ( $args['style'] ) {
        case '1':
            $buttonObj->cts_button_s1();
            break;
        case '2':
            $buttonObj->cts_button_s2();
            break;
        default:
            $buttonObj->cts_button_s1();
            break;
    }
  }
}

