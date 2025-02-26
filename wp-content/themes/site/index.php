<?php get_header() ?>
<main id="main" class="site-main" role="main">
	<?php
		$title = get_the_title();
		$type = get_post_type();
		$tekst_novosti = get_field('tekst_novosti');
		if ($type == 'post') { ?>
			<div class="container">
				<div class="article">
					<div class="text-editor">
						<h1><?= $title ?></h1>
						<?= $tekst_novosti ?>
					</div>
				</div>
			</div>
			<?php get_template_part( 'templates/common/news-slider-post'); ?>
		<?php } elseif ($type == 'course') { ?>
			
			<?php get_template_part( 'templates/courses/preview-courses'); ?>
	
			<?php get_template_part( 'templates/courses/list-who-benefits'); ?>
			
			<?php get_template_part( 'templates/courses/result'); ?>
		
			<?php get_template_part( 'templates/common/format-block'); ?>
			
			<?php get_template_part( 'templates/courses/program'); ?>
		
			<?php get_template_part( 'templates/common/reviews'); ?>
		
			<?php get_template_part( 'templates/common/expert', null, array('class'=>'white') ); ?>
	<?php }?>
</main>
<?php get_footer(); ?>