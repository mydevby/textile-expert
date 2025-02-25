<div class="preview-news" style="background-image: url('<?=get_stylesheet_directory_uri()?>/assets/img/novosti-bg.png')">
	<div class="description text-center">
		<div class="name">
			Блог
		</div>
		<div class="info">
			<h1><?=  get_field('zagolovok_novostej', get_queried_object()) ?></h1>
			<p><?=  get_field('opisanie_novostej', get_queried_object()) ?></p>
		</div>
	</div>
</div>