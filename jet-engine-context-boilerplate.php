<?php
/**
 * Plugin Name: JetEngine - context boilerplate
 * Description: Boilerplate plugin to showcase examples for JetEngine context feature
 * Plugin URI: 
 * Author: Crocoblock
 * Version: 1.0.0
 */

namespace Jet_Engine_Context_Boilerplate;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

define( 'JET_ENGINE_CONTEXT_BOILERPLATE_PATH', plugin_dir_path( __FILE__ ) );

final class Plugin {

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function __construct() {
		add_action( 'jet-engine/init', [ $this, 'init_context' ], 0 );
	}

	/**
	 * Initialize contexts examples
	 */
	public function init_context() {

		require JET_ENGINE_CONTEXT_BOILERPLATE_PATH . '/context-base.php';
		require JET_ENGINE_CONTEXT_BOILERPLATE_PATH . '/context-from-object-property.php';

		new Context_From_Object_Poperty();

	}

}

new Plugin();
