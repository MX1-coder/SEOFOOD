<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'main' => array(
		'title'   => '',
		'type'    => 'box',
		'options' => array(
			'icon' => array(
				'label' => esc_html__( 'Icon', 'bubulla' ),
				'type'  => 'icon-v2',
			),
			'image' => array(
				'label' => esc_html__( 'or Image', 'bubulla' ),
				'type'  => 'upload',
			),						
		),
	),
);

