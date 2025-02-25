<div class="course-preview">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="course-preview-outer-text">
					<div class="course-preview-text">
						<div class="name"><?=  get_field('glavnyj_zagolovok'); ?></div>
						<p class="text-default"><?=  get_field('glavnoe_opisanie'); ?></p>
						<a href="/kontakty" class="custom_button button link">Записаться</a>
					
					</div>
					<div class="course-preview-start">
						<span>Старт курсов:</span><?=  get_field('start_kursa'); ?>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="images">
					<div class="grid-item">
						<img src="<?=get_stylesheet_directory_uri()?>/assets/img/course3.png">
						<img src="<?=get_stylesheet_directory_uri()?>/assets/img/course2.png">
					
					</div>
					<div class="grid-item" style="    grid-template-rows: none!important;">
						<img src="<?=get_stylesheet_directory_uri()?>/assets/img/course1.png" class="grid-item-third">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>