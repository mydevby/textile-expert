<div class="novosti-bg">
	<img class="novosti-bg" src="<?=get_stylesheet_directory_uri()?>/assets/img/novosti-bg.png">
	<div class="novosti-bg-text text-center">
		<div class="page-name">
			Блог
		</div>
		<div class="preview-info">
			<?php if (get_field('zagolovok_novostej')) {
				$glavnyj_zagolovok = get_field('zagolovok_novostej'); ?>
				<h1>
					<?=  $glavnyj_zagolovok ?>
				</h1>
			<?php } ?>
			<h1><?=  get_field('zagolovok_novostej', false, false) ?></h1>
			<p><?=  get_field('opisanie_novostej', false, false) ?></p>
		</div>
	</div>
</div>