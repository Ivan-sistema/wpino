<section id="banner" style="background: url('<?php the_field('imagem_banner'); ?>') top center no-repeat;  background-size: cover;width: 100%;">
<div class="container">
	<div class="conteudo-banner">
		<img src="<?php the_field('icone_banner'); ?>">
		<?php the_field('texto_banner'); ?>
		
		<a href="<?php the_field('link_botao_banner'); ?>"><div class="btn-banner">Nossos Projetos</div></a>
	</div>
	
</div>	
</section>