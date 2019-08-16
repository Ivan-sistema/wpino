

<section id="economia_criativa">
		<div class="container">
			<div class="col-left"><?php the_field('conteudo_economia_criativa_left'); ?></div>
			<div class="col-right"><?php the_field('conteudo_economia_criativa_right'); ?></div>
	</div>
</section>

<section id="economia_criativa_tabs">
		<div class="container">
		<h3>Segmentos criativos</h3>
		<div class="title-economia-criativa-tabs">
			<img src="<?php the_field('icone_titulo'); ?>" style="height: 51px;">
			<h2><?php the_field('titulo_economia_critiva'); ?></h2>

		</div>
		<div class="tabs-container">
			<div class="tab-title tab-1">
				<div class="tab-hover">
					<div class="border-hover"></div>
				</div>
				<div class="tab-content-title">
					<?php the_field('titulo_grupo_1'); ?>
						
				</div>
			</div>
			
			<div class="tab-title tab-2">
				<div class="tab-hover">
					
					<div class="border-hover"></div>
				</div>
				<div class="tab-content-title">
					<?php the_field('titulo_grupo_2'); ?>
						
				</div>
			</div>
			<div class="tab-title tab-3">
				<div class="tab-hover">
					
					<div class="border-hover"></div>
				</div>
				<div class="tab-content-title">
					<?php the_field('titulo_grupo_3'); ?>
						
				</div>
			</div>
			<div class="tab-title tab-4">
				<div class="tab-hover">
					<div class="border-hover"></div></div>
				<div class="tab-content-title">
					<?php the_field('titulo_grupo_4'); ?>
						
				</div>
			</div>
		</div>
	</div>
	<div class="tab-content tab-content-1">
		<?php the_field('conteudo_grupo_1'); ?>
	</div>
	<div class="tab-content tab-content-2">
		<?php the_field('conteudo_grupo_2'); ?>
	</div>
	<div class="tab-content tab-content-3">
		<?php the_field('conteudo_grupo_3'); ?>
	</div>
	<div class="tab-content tab-content-4">
		<?php the_field('conteudo_grupo_4'); ?>
	</div>
</section>
