<?php

class WLDR_HelloWorld extends ET_Builder_Module {

	public $slug       = 'wldr_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'alexandre.ninja',
		'author'     => 'Alexandre Gagner',
		'author_uri' => 'alexandre.ninja',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'wldr-wlagence-divi-reservit' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'wldr-wlagence-divi-reservit' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'wldr-wlagence-divi-reservit' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new WLDR_HelloWorld;
