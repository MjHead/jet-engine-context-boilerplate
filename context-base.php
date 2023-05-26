<?php
namespace Jet_Engine_Context_Boilerplate;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

abstract class Context_Base {

	abstract public function get_slug();

	abstract public function get_name();

	abstract public function apply_context();

	public function register_context( $context ) {
		$context[ $this->get_slug() ] = $this->get_name();
		return $context;
	}

	public function __construct() {

		add_filter( 'jet-engine/listings/allowed-context-list', [ $this, 'register_context' ] );
		add_filter( 'jet-engine/listings/data/object-by-context/' . $this->get_slug(), [ $this, 'apply_context' ] );

	}

}