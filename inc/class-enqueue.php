<?php

/**
 * 
 * @package    Chat Telegram - WordPress plugin
 * @version    1.0
 * @author     ThemeAtelier
 * @Websites: https://themeatelier.net/
 *
 */
if (!defined('ABSPATH')) {
	die(CTS_ALERT_MSG);
}

if (!class_exists('Cts_Enqueue')) {
	class Cts_Enqueue
	{
		public function __construct($args = array())
		{
			add_action('wp_enqueue_scripts', array($this, 'frontend_enqueue_scripts'));
			add_action('admin_enqueue_scripts', [$this, 'cts_admin_enqueue_scripts']);
		}
		// Admin enqueue scripts
		public function cts_admin_enqueue_scripts()
		{
			wp_enqueue_style('cts-admin-help', CTS_DIR_URL . 'assets/css/help.css', array(), '1.0', false);
		}

		// Front-End enqueue scripts
		public function frontend_enqueue_scripts()
		{
			wp_enqueue_style('fontawesome', CTS_DIR_URL . 'assets/css/all.min.css', array(), '1.0', false);
			wp_enqueue_style('cts-main', CTS_DIR_URL . 'assets/css/cts-main.css', array(), '1.0', false);
			/********************
				Js Enqueue
			 ********************/
			wp_enqueue_script('moment', array('jquery'), '1.0', true);
			wp_enqueue_script('moment-timezone', CTS_DIR_URL . 'assets/js/moment-timezone-with-data.min.js', array('jquery'), '1.0', true);
			wp_enqueue_script('cts-main', CTS_DIR_URL . 'assets/js/cts-main.js', array('jquery'), '1.0', true);
		}
	}

	$obj = new Cts_Enqueue();
}
