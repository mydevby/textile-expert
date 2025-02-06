<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php wp_head(); ?>
</head>

<body <?body_class()?>>
<div class="menubg"></div>
<header class="header">
    <div class="container flex">
        <div class="logo">
            <a href="<?=home_url()?>"><img src="<?=get_stylesheet_directory_uri()?>/assets/css/img/logo.svg"></a>
        </div>
        <ul>
            <li><a href="<?the_permalink(13)?>">Курсы</a></li>
            <li><a href="<?the_permalink(8)?>">Консалтинг</a></li>
            <li><a href="<?the_permalink(15)?>">Блог</a></li>
            <li><a href="<?the_permalink(82)?>">Контакты</a></li>
        </ul>
        <a class="menu-button">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>
</header>


    