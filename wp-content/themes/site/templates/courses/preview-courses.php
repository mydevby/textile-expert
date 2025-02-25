<div class="course-preview">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="description">
					<p class="top-text">Авторский курс</p>
					<div class="title"><?=  get_field('glavnyj_zagolovok'); ?></div>
					<p class="text"><?=  get_field('glavnoe_opisanie'); ?></p>
					<div class="action">
						<a href="/kontakty" class="custom_button button link">Записаться</a>
					</div>
					<div class="start">
						<span>Старт курсов:</span><?=  get_field('start_kursa'); ?>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="image">
					<img src="<?= get_field('izobrazhenie_dlya_kursov'); ?>" alt="<?=  get_field('glavnyj_zagolovok'); ?>">
				</div>
			</div>
		</div>
	</div>
</div>