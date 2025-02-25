<?php
/*
Template Name: Курсы
*/
?>
<head>
	<title>Курсы</title>
</head>
<?php get_header(); ?>

<?php get_template_part( 'templates/courses/preview-courses'); ?>

<?php get_template_part( 'templates/courses/list-courses'); ?>

<?php get_template_part( 'templates/common/format-block'); ?>

<?php get_template_part( 'templates/common/reviews'); ?>

<?php get_footer(); ?>