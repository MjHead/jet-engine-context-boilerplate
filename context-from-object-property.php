<?php
namespace Jet_Engine_Context_Boilerplate;

/**
 * Set conext to Post object by post ID retrieved from selected property from Current object.
 * To use this boilerplate you need to exted this class and add rewrite get_property()
 * In get_property() method you need to return property name you want to use to get ID
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Context_From_Object_Poperty extends Context_Base {

	public function get_property() {
		return 'meta_value';
	}

	public function get_slug() {
		return 'context_from_object_prop_' . $this->get_property();
	}

	public function get_name() {
		return 'Post from current ' . $this->get_property();
	}

	public function apply_context() {
		
		$post_id = jet_engine()->listings->data->get_prop( $this->get_property() );

		if ( $post_id ) {
			return get_post( $post_id );
		} else {
			return null;
		}

	}

}
