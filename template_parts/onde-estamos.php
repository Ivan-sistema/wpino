
<section id="onde_estamos">
	<div class="container">
		<div class="col-left" style="padding: 48px 0 0;">
			<img src="<?php the_field('imagem_onde_estamos'); ?>">
		</div>
		<div class="col-right">
			<?php the_field('conteudo_onde_estamos'); ?>
				
			<div class="btn-agendar">Agendar uma visita</div>	
			</div>
			
	</div>

<div class="container calendar-form">
	<!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/fernandafm/visitainohub" style="min-width:340px;height:580px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
<!-- Calendly inline widget end -->

</div>

	<div class="container">
	<img src="<?php the_field('imagem_pisos') ?>" class="desk">
	<div class="mobile-site">
		<h2>Por <span>dentro</span><br/> do inohub</h2>
		<img src="<?php the_field('imagens_piso_mobile') ?>">
	</div>			
	</div>

	
</section>
