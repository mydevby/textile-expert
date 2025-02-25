<?php
/*
Template Name: Контакты
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Контакты</title>
</head>
<body>
<?php get_header(); ?>
<main>
	<div class="container text-center">
		
		<div class="contacts-preview">
			<h1><?=  get_field('zagolovok_straniczy') ?></h1>
			<p><?=  get_field('opisanie_straniczy') ?></p>
		</div>
		
		<div class="contacts-info">
		<?php if (have_rows('contacts')) {
			// Цикл по повторяющемуся полю "contacts"
			while (have_rows('contacts')) {
				the_row();

				// Получаем значения вложенных полей
				$contacts_title = get_sub_field('title');
				$contacts_text = get_sub_field('text');
				$contacts_link = get_sub_field('slug');
		?>
			<a
				class="contacts-item"
				href="<?php echo $contacts_link; ?>"
				target="_blank"
				rel="noopener noreferrer nofollow"
			>
				<div class="contacts-name">
				   <?php echo $contacts_title; ?>
			   </div>
			   <div class="contacts-text">
				   <?php echo $contacts_text; ?>
			   </div>
			</a>
		<?php } } ?>
		</div>
		
	</div>
</main>
<?php get_footer(); ?>
</body>
</html>