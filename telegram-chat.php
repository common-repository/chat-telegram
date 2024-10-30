<?php
/*
 *  Plugin Name:    Telegram Chat
 *  Plugin URI:     https://wpchatplugins.com/
 *  Description:    Can easily create Bubble & buttons for telegram chat in any WordPress site. Gutenberg, Elementor and shortcodes supported. 
 *  Author:         ThemeAtelier
 *  Author URI:     http://themeatelier.net/
 *  Requirements:   PHP 7.0 or above, WordPress 4.0 or above.
 *  Version:       1.1.1
 * Text Domain:  chat-telegram
 * Domain Path:  /languages
 */

// Block Direct access
if (!defined('ABSPATH')) {
    die('You should not access this file directly!.');
}

// Define Constants for direct access alert message.
if (!defined('CTS_ALERT_MSG'))
    define('CTS_ALERT_MSG', esc_html__('You should not access this file directly.!', 'chat-telegram'));

// Define constants for plugin directory path.
if (!defined('CTS_DIR_PATH'))
    define('CTS_DIR_PATH', plugin_dir_path(__FILE__));

// telegram chat support version

if (!defined('TELEGRAM_CHAT_SUPPORT_VERSION'))
    define('TELEGRAM_CHAT_SUPPORT_VERSION', '1.1.0');


// Define constants for view directory path.
if (!defined('CTS_VIEW_DIR_PATH'))
    define('CTS_VIEW_DIR_PATH', CTS_DIR_PATH . 'view/');

// Define constants for elementor widget directory path.
if (!defined('TELEGRAM_EW_DIR_PATH'))
    define('TELEGRAM_EW_DIR_PATH', CTS_VIEW_DIR_PATH . 'elementor-widgets/');

// Define constants for plugin directory path.
if (!defined('CTS_DIR_URL'))
    define('CTS_DIR_URL', plugin_dir_url(__FILE__));

// load text domain from plugin folder
function ctS_load_textdomain()
{
    load_plugin_textdomain('', false, dirname(__FILE__) . "/languages");
}
add_action("plugins_loaded", 'cts_load_textdomain');

// Plugin settings in plugin list
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'cts_settings_link');
function cts_settings_link(array $links)
{
    $url = get_admin_url() . "admin.php?page=cts";
    $settings_link = '<a href="' . esc_url($url) . '">' . esc_html__('Settings', 'chat-telegram') . '</a>';
    $links[] = $settings_link;
    return $links;
}

// Pro version link
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'telegram_pro_link');
function telegram_pro_link(array $links)
{
    $url = "https://1.envato.market/0Jbo4N";
    $settings_link = '<a style="color: #0088cc; font-weight: 700;" href="' . esc_url($url) . '">' . esc_html__('Go Pro!', 'chat-telegram') . '</a>';
    $links[] = $settings_link;
    return $links;
}

// Register block
function create_block_telegram_block_init()
{
    register_block_type_from_metadata(CTS_VIEW_DIR_PATH . 'blocks/');
}
add_action('init', 'create_block_telegram_block_init');


// Register block category 

function telegram_chat_plugin_block_categories($categories)
{
    return array_merge(
        $categories,
        [
            [
                'slug'  => 'telegram-block',
                'title' => __('telegram block', 'chat-telegram'),
            ],
        ]
    );
}
add_action('block_categories', 'telegram_chat_plugin_block_categories', 10, 2);

// Script enqueue class include
require_once CTS_DIR_PATH . 'inc/class-enqueue.php';

// View Shortcodes
require_once CTS_DIR_PATH . '/view/elementor-widgets/elementor-widget.php';
require_once CTS_DIR_PATH . 'view/shortcodes/custom-shortcode.php';

// buttons functions
require_once CTS_DIR_PATH . 'inc/functions.php';
// Button template class
require_once CTS_DIR_PATH . 'inc/class-custom-buttons-templates.php';

// single chat bubble template
require_once CTS_DIR_PATH . '/view/chat-bubbles/chat-bubbles.php';

// include framework for admin panel
require_once CTS_DIR_PATH . 'admin/csf/codestar-framework.php';
require_once CTS_DIR_PATH . 'inc/cts-plugin-options.php';
/**
 * Initialize the plugin tracker
 *
 * @return void
 */
function Telegram_appsero_init()
{
    if (!class_exists('TelegramAppSero\Insights')) {
        require_once CTS_DIR_PATH . 'admin/appsero/Client.php';
    }
    $client = new TelegramAppSero\Client('853ede2d-944c-41a5-99fc-1217a3330bb6', 'Chat Telegram', __FILE__);

    // Active insights
    $client->insights()->init();
}
Telegram_appsero_init();
