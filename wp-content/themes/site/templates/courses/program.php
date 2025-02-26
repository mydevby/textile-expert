<section class="program">
	<div class="container">
		<h2 class="name text-center">Программа курса</h2>
		<div class="tabs" data-toggle="tabs">
			<?php if (have_rows('modul')) {
				$num = 0;
				while (have_rows('modul')) {
					the_row(); ?>
					<a class="tabs-tab" data-tabs="link" href="#tab<?= $num ?>" >
						<div class="tabs-tab-num"><?=get_sub_field('nomer_modulya')?></div>
						<div class="tabs-tab-title"><?=get_sub_field('zagolovok_modulya')?></div>
						<div class="tabs-tab-time"><?=get_sub_field('prodolzhitelnost_modulya')?></div>
						<svg class="tabs-tab-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path class="tabs-tab-arrow-path" d="M19 9L12 15L5 9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</a>
					<div class="tabs-tab-content" id="tab<?= $num ?>" data-tabs="content">
						<div class="text-editor">
							<?= get_sub_field('opisanie_modulya') ?>
						</div>
					</div>
					<?php $num++ ?>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</section>