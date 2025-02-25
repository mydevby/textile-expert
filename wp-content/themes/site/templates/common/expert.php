<div class="expert-block bg-default <?=$args['class']?>">
    <div class="container">
        <div class="content">
            <div class="top-text">
                Об эксперте
            </div>
			<?php if (get_field('fio')) {
				$fio = get_field('fio'); ?>
				<div class="name">
					<?= $fio ?>
				</div>
			<?php } ?>
			<div class="image" style="background-image: url(<?= get_field('foto-eksperta', get_queried_object()) ?>)"></div>
			<div>
				<?php if (get_field('info')) {
					$info = get_field('info'); ?>
						<?= $info ?>
				<?php } ?>
			</div>
            <div class="bottom-blocks">
				<?php if (get_field('experience')) {
					$experience = get_field('experience'); ?>
					<div class="block">
						<div class="count">
							<span><?= $experience ?></span> лет
						</div>
						стаж работы
					</div>
				<?php } ?>
				<?php if (get_field('specialists')) {
					$specialists = get_field('specialists'); ?>
					<div class="block">
						<div class="count">
							более <span><?= $specialists ?></span>
						</div>
						обучил специалистов
					</div>
				<?php } ?>
				<?php if (get_field('contracts')) {
					$contracts = get_field('contracts'); ?>
					<div class="block">
						<div class="count">
							более <span><?= $contracts ?></span>
						</div>
						договоров с предприятиями
					</div>
				<?php } ?>
            </div>
        </div>
    </div>
</div>