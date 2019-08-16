<?php
require get_template_directory()."/include/setup.php";
require get_template_directory()."/include/customizer/theme-customizer.php";

//hooks

//--Adiciona Css,Style etc.
add_action("wp_enqueue_scripts", "ino_theme_styles");
add_action("after_setup_theme", "ino_after_setup");
add_action("widgets_init", "ino_widgets");
add_action("customize_register", "ino_customize_register");

