

<section id="cowork" style="background: url('<?php the_field('imagem_cowork_fundo'); ?>') top center no-repeat;  background-size: cover;">
	<div class="container">
		<div class="col-left">
		<div class="title">
			<div class="left-title">
				<h2><?php the_field('titulo_cowork_left'); ?></h2>
			</div>
			<div class="icone">
				<img src="<?php the_field('icone_cowork'); ?>">
			</div>
		</div>

<div class="content">
	<?php the_field('conteudo_cowork_left'); ?>
</div>
</div>

<div class="col-right">
	<?php the_field('conteudo_cowork_right'); ?>

		<a href="<?php the_field('link_botao_coworking'); ?>" target="_blank"><div class="btn-coworking">Quero Participar</div></a>
</div>
	</div>
</section>