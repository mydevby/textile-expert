<section class="result">
	<div class="container">
		<h2 class="name text-center">Что вы получите в результате?</h2>
		<div class="row">
			<div class="col-md-7">
				<ul class="result-list">
					<?php if (have_rows('punkty_rezultata')) {
						$num = 1;
						while (have_rows('punkty_rezultata')) {
							the_row(); ?>
							<li class="result-item">
								<div class="result-number">0<?= $num ?>.</div>
								<div class="result-text"><?=get_sub_field('rezultat')?></div>
							</li>
							<?php $num++ ?>
						<?php } ?>
					<?php } ?>
				</ul>
			</div>
			<div class="col-md-5">
				<div class="result-image">
					<img src="<?= get_field('izobrazhenie_dlya_kursov'); ?>" alt="Пример результата">
				</div>
			</div>
		</div>
	</div>
</section>
