<?php

	//Custom Login Logo
    function my_custom_login_logo() { 
        ?> 
        <style type="text/css"> 
            body.login div#login h1 a {
                background-image: url(<?php echo wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ), 'full')[0]; ?>);
                background-position: center;
                background-size: contain;
                padding-bottom: 30px; 
                width: 100%;
            } 
        </style>
        <?php 
    } add_action( 'login_enqueue_scripts', 'my_custom_login_logo' );

    //Upload logo to customise area
    function custom_logo_setup() {
        $defaults = array(
            'height'      => 50,
            'width'       => 120,
            'flex-height' => true,
            'flex-width'  => true,
        );
        add_theme_support( 'custom-logo', $defaults );
    }
    add_action( 'after_setup_theme', 'custom_logo_setup' );

	 
    // Adding custom info

    function modernwp_custom_info ($wp_customize){
        global $custom_info;

		$wp_customize->add_section('modernwp_custom_info_section', array(
			'title'          => 'Custom Site Info'
		));

		foreach ($custom_info as $control) {
            $wp_customize->add_setting($control['name'], array(
                'default'        => $control['default'],
            ) );
    
            $wp_customize->add_control( $control['name'], array(
                'type' => $control['type'],
                'section' => 'modernwp_custom_info_section',
                'label' => __( $control['label'] ),
            ) );
        }

	}
	add_action('customize_register', 'modernwp_custom_info');

?>