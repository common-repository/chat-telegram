<?php 
 /**
  * 
  * @package    Click to dial Wp plugin
  * @version    1.0
  * @author     ThemeAtelier
  * @Websites: https://themeatelier.net/
  *
  */

add_shortcode( 'cts' , 'cts_custom_buttons_shortcode' );
function cts_custom_buttons_shortcode( $atts ) {
		$atts = shortcode_atts( array(
        'style' => '1',
        'photo' => CTS_DIR_URL . 'assets/image/user.webp',
        'name' => esc_html__('Robert', 'chat-telegram'),
        'designation' => esc_html__('Sales Support', 'chat-telegram'),
        'label' => esc_html__('How can I help you?', 'chat-telegram'),
        'online' => esc_html__('I\'m avaiable', 'chat-telegram'),
        'offline'  => esc_html__('I\'m offline', 'chat-telegram'),
        'channel' => esc_html__('telegram', 'chat-telegram'),
        'visibility' => 'teleSupport-show-everywhere',
        'sizes' => 'tg-btn-md',
        'rounded' => 'tg-btn-rounded',
        'timezone' => '',
        'sunday' => esc_html__('00:00-23:59', 'chat-telegram'),
        'monday' => esc_html__('00:00-23:59', 'chat-telegram'),
        'tuesday' => esc_html__('00:00-23:59', 'chat-telegram'),
        'wednesday' => esc_html__('00:00-23:59', 'chat-telegram'),
        'thursday' => esc_html__('00:00-23:59', 'chat-telegram'),
        'friday' => esc_html__('00:00-23:59', 'chat-telegram'),
        'saturday' => esc_html__('00:00-23:59', 'chat-telegram'),
		), $atts );

	ob_start();

	cts_buttons_template_init( $atts );

return ob_get_clean();
}