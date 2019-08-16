<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<title>	</title>
</head>

<body <?php body_class(); ?>>

<section id="header">
<div class="container">
	<div class="logotipo">
				<?php if(has_custom_logo()){
					the_custom_logo();
				} else { ?>
					<a href="<?php echo bloginfo('url'); ?>"><img src="http://helptask.com.br/job/ese/wp-content/uploads/2019/01/logotipo-menu-250x72.png" class="custom_logo"></a>
			<?php	} ?>
				

			</div>

						<div class="col-menu">
<div class="abrir-nav">
            	<span class="mm_line"></span>
            </div>

<?php 
/*
if(has_nav_menu('primary')){

	wp_nav_menu(array(

		'theme_location' => 'primary',

		'container' => 'nav',

		'container_class' => 'menu-header',

		//'container_class' => 'COLOCAR CLASSE SEPARADO POR VIRGULA'

		'fallback_cb' => false

	));

}
*/
?>
<div class="menu-header">

				<?php wp_nav_menu(array('container_class' => '', 'theme_location' => 'primary')); ?>
<div class="social-menu">
	<?php if(get_theme_mod('ino_instagram')): ?>

				<a href="<?php echo get_theme_mod('ino_instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>

			<?php endif; ?>



			<?php if(get_theme_mod('ino_youtube')): ?>

				<a href="<?php echo get_theme_mod('ino_youtube'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>

				

			<?php endif; ?>

			<?php if(get_theme_mod('ino_facebook')): ?>

				<a href="<?php echo get_theme_mod('ino_facebook'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>

				

			<?php endif; ?>

			<?php if(get_theme_mod('ino_twitter')): ?>

				<a href="<?php echo get_theme_mod('ino_twitter'); ?>"><i class="fab fa-twitter"></i></a>

				

			<?php endif; ?>

			<?php if(get_theme_mod('ino_linkedin')): ?>

				<a href="<?php echo get_theme_mod('ino_linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a>

				

			<?php endif; ?>
</div>
			</div>

			</div>

			
</div>		
</section>

