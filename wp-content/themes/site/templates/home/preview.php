<div class="preview">
	
	<div class="preview-block text-center bg-default">
		<div class="container">
			<?php if (get_field('glavnyj_zagolovok')) {
				$glavnyj_zagolovok = get_field('glavnyj_zagolovok'); ?>
				<p class="top-text">
					<?=  $glavnyj_zagolovok ?>
				</p>
			<?php } ?>
			<div class="preview-info">
				<h1>ТЕКСТИЛЬ-ЭКСПЕРТ</h1>
				<?php if (get_field('glavnoe_opisanie')) {
					$glavnoe_opisanie = get_field('glavnoe_opisanie'); ?>
					<p class="top-text">
						<?=  $glavnoe_opisanie ?>
					</p>
				<?php } ?>
			</div>
			<a href="/kontakty" class="custom_button button link">Получить консультацию</a>
		</div>
	</div>
	
	<div class="preview-images">
		<div class="row">
			<div class="col-md-6 col-sm-12 pr-0">
				<img src="<?= get_stylesheet_directory_uri() ?>/assets/img/preview2.png">
			</div>
			<div class="col-md-6 col-sm-12 pl-0">
				<img src="<?= get_stylesheet_directory_uri() ?>/assets/img/preview1.png">
			</div>
		</div>
	</div>
	
</div>
