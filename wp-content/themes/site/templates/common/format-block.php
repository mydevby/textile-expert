<div class="format-block">
	<div class="container">
		<div class="row">
			<div class="col-md-5  format-first format-padding">
				<div class="name">Формат занятий</div>
				<?= get_field('opisanie_formata', get_queried_object()) ?>
				<a href="/kontakty" class="custom_button button link">Узнать стоимость</a>
			</div>
			<div class="col-md-7 format-padding format-second">
				
				<div class="format-tegels">
					<?php if (have_rows('informacziya_o_formate', get_queried_object())) {
						while (have_rows('informacziya_o_formate', get_queried_object())) {
							the_row(); ?>
								<div class="format-tegel">
									<div class="format-tegel-title"><?=get_sub_field('nazvanie', get_queried_object())?></div>
									<div class="format-tegel-format"><?=get_sub_field('informacziya', get_queried_object())?></div>
								</div>
					<?php } } ?>
				</div>
			
			</div>
		</div>
	</div>
</div>