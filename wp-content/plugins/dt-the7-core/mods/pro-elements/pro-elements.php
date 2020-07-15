<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Load gettext translate for our text domain.
 *
 * @since 1.0.0
 *
 * @return void
 */
function the7_pro_elements_load_plugin() {
	if (function_exists('pro_elements_load_plugin')){
		add_action( 'admin_notices', 'the7_pro_elements_obsolete' );
		return;
	}
	if ( ! did_action( 'elementor/loaded' ) ) {
		return;
	}
	if ( defined('ELEMENTOR_PRO_VERSION' )) {
		return;
	}

	define( 'ELEMENTOR_PRO_VERSION', '2.9.4' );
	define( 'ELEMENTOR_PRO_PREVIOUS_STABLE_VERSION', '2.8.5' );

	define( 'ELEMENTOR_PRO__FILE__', __FILE__ );
	define( 'ELEMENTOR_PRO_PLUGIN_BASE', plugin_basename( ELEMENTOR_PRO__FILE__ ) );
	define( 'ELEMENTOR_PRO_PATH', plugin_dir_path( ELEMENTOR_PRO__FILE__ ) );
	define( 'ELEMENTOR_PRO_ASSETS_PATH', ELEMENTOR_PRO_PATH . 'assets/' );
	define( 'ELEMENTOR_PRO_MODULES_PATH', ELEMENTOR_PRO_PATH . 'modules/' );
	define( 'ELEMENTOR_PRO_URL', plugins_url( '/', ELEMENTOR_PRO__FILE__ ) );
	define( 'ELEMENTOR_PRO_ASSETS_URL', ELEMENTOR_PRO_URL . 'assets/' );
	define( 'ELEMENTOR_PRO_MODULES_URL', ELEMENTOR_PRO_URL . 'modules/' );
	define( 'IS_PRO_ELEMENTS', 'true' );

	load_plugin_textdomain( 'elementor-pro' );

	$elementor_version_required = '2.9.6';
	if ( ! version_compare( ELEMENTOR_VERSION, $elementor_version_required, '>=' ) ) {
		add_action( 'admin_notices', 'the7_pro_elements_fail_load_out_of_date' );

		return;
	}

	require ELEMENTOR_PRO_PATH . 'plugin.php';
}

the7_pro_elements_load_plugin();

function the7_pro_elements_fail_load_out_of_date() {
	if ( ! current_user_can( 'update_plugins' ) ) {
		return;
	}

	$file_path = 'elementor/elementor.php';

	$upgrade_link = wp_nonce_url( self_admin_url( 'update.php?action=upgrade-plugin&plugin=' ) . $file_path, 'upgrade-plugin_' . $file_path );
	$message = '<p>' . __( 'Pro Elements module is not working because you are using an old version of Elementor.', 'dt-the7-core' ) . '</p>';
	$message .= '<p>' . sprintf( '<a href="%s" class="button-primary">%s</a>', $upgrade_link, __( 'Update Elementor Now', 'dt-the7-core' ) ) . '</p>';

	echo '<div class="error">' . $message . '</div>';
}

function  the7_pro_elements_obsolete() {
	if ( ! current_user_can( 'update_plugins' ) ) {
		return;
	}
	$message = '<p>' . __( '<strong>Important notice</strong>: PRO Elements plugin is obsolete. All its features were transferred into The7 Elements plugin. 
We recommend you deactivate and uninstall the PRO Elements.', 'dt-the7-core' ) . '</p>';

	echo '<div class="the7-dashboard-notice the7-notice notice notice-warning"><p>' . $message . '</p></div>';
}


if ( ! function_exists( '_is_elementor_installed' ) ) {

	function _is_elementor_installed() {
		$file_path = 'elementor/elementor.php';
		$installed_plugins = get_plugins();

		return isset( $installed_plugins[ $file_path ] );
	}
}