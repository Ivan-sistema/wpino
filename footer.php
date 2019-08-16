
<?php wp_footer(); ?>


<section id="footer">
	<div class="container">
		<div class="col-footer">
			<div class="logotipos-footer">
			<img src="<?php the_field('logotipo_inohub_footer'); ?>">
			<img src="<?php the_field('logotipo_sebrae_footer'); ?>">
		</div>
		<div class="social-footer">
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

	<div class="bloco-info" style="margin:85px 0 28px;"><?php the_field('bloco_de_texto_1'); ?></div>
	<div class="bloco-info"><?php the_field('bloco_de_texto_2'); ?></div>
			
	</div>
</section>


</body>
</html>