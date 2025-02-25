<div class="previews-block bg-default pb-0">
	<div class="container">
		<div class="text-center name">Отзывы</div>
		<p class="text-center text-default"><?= get_field('opisanie_otzyvov') ?></p>
		<div class="previews">
			<div class="list swiper-preview">
				<div class="swiper-wrapper">
					<?php if (have_rows('otzyvy')) {
						while (have_rows('otzyvy')) {
							the_row();
						?>
							<div class="preview swiper-slide">
								<div class="preview-user"><?=get_sub_field('imya')?></div>
								<div class="preview-title"><?=get_sub_field('zagolovok_otzyva')?></div>
								<p><?=get_sub_field('otzyv')?></p>
								<div class="preview-time"><?=get_sub_field('data_otzyva')?></div>
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