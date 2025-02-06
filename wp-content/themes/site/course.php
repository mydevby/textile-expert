<?php
/*
Template Name: Курс
*/
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php

    $img = get_field('img');
    $description = get_field('description');
    $course_start = get_field('course_start');
    $free_class = get_field('free_class');
    $blocks = get_field('blocks');

    // Вывод информации о курсе
    ?>
    <div class="course-info">
        <img src="<?php echo $img; ?>" alt="Course Image">
        <h2>Description:</h2>
        <p><?php echo $description; ?></p>
        <h2>Start of Course:</h2>
        <p><?php echo $course_start; ?></p>
        <h2>Free Class:</h2>
        <p><?php echo $free_class; ?></p>
    </div>

    <?php
    // Вывод блоков курса
    if ($blocks) {
        echo '<div class="course-blocks">';
        foreach ($blocks as $block) {
            echo '<div class="course-block">';
            echo '<h3>' . $block['title'] . '</h3>';
            echo '<p>' . $block['content'] . '</p>';
            echo '</div>';
        }
        echo '</div>';
    }
    ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>