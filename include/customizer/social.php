<?php

function ino_social_customizer( $wp_customize ){

	// SETTINGS

	$wp_customize->add_setting('ino_instagram', array('default'=>''));

	$wp_customize->add_setting('ino_youtube', array('default'=>''));

	$wp_customize->add_setting('ino_facebook', array('default'=>''));

	$wp_customize->add_setting('ino_twitter', array('default'=>''));

	$wp_customize->add_setting('ino_linkedin', array('default'=>''));



	//SECTIONS

	$wp_customize->add_section('ino_social_section', array(

		'title' => 'Redes Sociais',
		'priority' => '1',
		'panel' => 'opcoes',
		'description' => 'Para a rede social ficar visivel coloque um link , caso não use alguma rede social deixe o campo em branco que o ícone irá desaparecer.'

	));



	//CONTROLLERS

	$wp_customize->add_control(

		new WP_Customize_Control(

			$wp_customize,

			'ino_instagram',

			array(

				'label' => 'Instagram',

				'section' => 'ino_social_section',

				'settings' => 'ino_instagram',

				'type' => 'text'

			)

		)

	);

	$wp_customize->add_control(

		new wp_Customize_Control(

			$wp_customize,

			'ino_youtube',

			array(

				'label' => 'youtube',

				'section' => 'ino_social_section',

				'settings' => 'ino_youtube',

				'type' => 'text'

			)

		)

	);

	$wp_customize->add_control(

		new WP_Customize_Control(

			$wp_customize,

			'ino_facebook',

			array(

				'label' => 'Facebook',

				'section' => 'ino_social_section',

				'settings' => 'ino_facebook',

				'type' => 'text'

			)

		)

	);

	$wp_customize->add_control(

		new WP_Customize_Control(

			$wp_customize,

			'ino_twitter',

			array(

				'label' => 'Twitter',

				'section' => 'ino_social_section',

				'settings' => 'ino_twitter',

				'type' => 'text'

			)

		)

	);

	$wp_customize->add_control(

		new WP_Customize_Control(

			$wp_customize,

			'ino_linkedin',

			array(

				'label' => 'linedin',

				'section' => 'ino_social_section',

				'settings' => 'ino_linkedin',

				'type' => 'text'

			)

		)

	);



	

}





?>