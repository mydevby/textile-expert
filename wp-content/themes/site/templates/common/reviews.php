<div class="previews-block bg-default">
	<div class="container">
		<div class="text-center name">Отзывы</div>
		<p class="text-center text-default max-520"><?= get_field('opisanie_otzyvov', get_queried_object()) ?></p>
		<div class="previews">
			<div class="list swiper-preview">
				<div class="swiper-wrapper">
					<?php if (have_rows('otzyvy', get_queried_object())) {
						while (have_rows('otzyvy', get_queried_object())) {
							the_row();
						?>
							<div class="preview swiper-slide">
								<div class="preview-user"><?=get_sub_field('imya', get_queried_object())?></div>
								<div class="preview-title"><?=get_sub_field('zagolovok_otzyva', get_queried_object())?></div>
								<p><?=get_sub_field('otzyv', get_queried_object())?></p>
								<div class="preview-time"><?=get_sub_field('data_otzyva', get_queried_object())?></div>
							</div>
						<?php } } ?>
				</div>
				<div class="container">
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</div>
	</div>
</div>