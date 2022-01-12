<?php

	function cabc_customizer_section( $wp_customize ) {

		// Add section to panel in theme customizer called Change Admin Bar Color
		$wp_customize->add_section( 'cabc_color_section', [
			'title'			=>	__( 'Change Admin Bar Color', 'cabc'),
			'priority'		=>	30
		]);
		
		// Registers the setting to be stored in the db
		$wp_customize->add_setting( 'cabc_color_handle', [
			'default'		=> ''
		]);

		// Registers the control selector with a js color picker in the section
		$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'admin_bar_color', 
		array(
			'label'      => __( 'Admin Bar Color', 'cabc' ),
			'section'    => 'cabc_color_section',
			'settings'   => 'cabc_color_handle',
		)));	
	
}