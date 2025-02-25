<div class="format-block">
	<div class="container">
		<div class="row">
			<div class="col-md-5  format-first format-padding">
				<div class="name">Формат занятий</div>
				<?= get_field('opisanie_formata') ?>
				<a href="/kontakty" class="custom_button button link">Узнать стоимость</a>
			</div>
			<div class="col-md-7 format-padding format-second">
				
				<div class="format-tegels">
					<?php if (have_rows('informacziya_o_formate')) {
						while (have_rows('informacziya_o_formate')) {
							the_row(); ?>
								<div class="format-tegel">
									<div class="format-tegel-title"><?=get_sub_field('nazvanie')?></div>
									<div class="format-tegel-format"><?=get_sub_field('informacziya')?></div>
								</div>
					<?php } } ?>
				</div>
			
			</div>
		</div>
	</div>
</div>