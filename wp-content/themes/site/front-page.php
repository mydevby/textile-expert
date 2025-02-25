<head>
	<title>Текстиль Эксперт</title>
</head>

<?php get_header() ?>

<?php get_template_part( 'templates/home/preview-block'); ?>

<?php get_template_part( 'templates/home/services-block'); ?>

<?php get_template_part( 'templates/common/expert', null, array('class'=>'expert-reverse') ); ?>

<?php get_template_part( 'templates/home/video-block'); ?>

<?php get_template_part( 'templates/common/news-slider'); ?>

<?php get_footer(); ?>