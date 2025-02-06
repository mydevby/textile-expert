
<head>
	<title>Курсы</title>
</head>
<?get_header();?>
<div class="course-preview">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
           <div class="course-preview-outer-text">
            <div class="course-preview-text">
                <div class="name">Курсы по текстильному и швейному производству
                </div>
                <p class="text-default">Получите базовые систематизированные знания о текстильных материалах от волокна до готовых изделий. Курс является концентрацией всего накопленного мной эксклюзивного практического опыта и теоретических знаний.</p>

                <a href="/kontakty" class="custom_button button link">Записаться</a>

            </div>
                <div class="course-preview-start">
                    <span>Старт курса:</span>по мере комплектования группы
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
<div class="courses-block bg-default">
    <div class="container">
        <div class="name">Список курсов</div>
        <p class="text-default">В наших курсах нет никакой воды, только нужные знания. Самые<br> сложные процессы объясняются простым и доступным языком,<br> понятным даже непрофессионалу.</p>
        <div class="courses">
            <div class="list swiper">
                <div class="swiper-wrapper">
                   <?for($i=1; $i<=5; $i++){?>

                        <div class="course-block swiper-slide">
                        <div class="course">
                        <img class="course-img" src="<?=get_stylesheet_directory_uri()?>/assets/img/course-slide.png"/>
                            <div class="course-info w-100">
                            <div class="course-time">
                            <div>Старт курса: 9 августа</div>
                                <div>20 часов</div>
                            </div>
                                <div class="course-title">Текстильные материалы. С комфортом по жизни.</div>
                                <div class="course-button">
                                    <a href="/kontakty" class="button link">Оставить заявку</a>
                                    <a class="course-link" href="#">Программа курса</a>
                                </div>
                            </div>
                        </div>
                        </div>
<?}?> </div>
                <div class="container">
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="format-block">
    <div class="container">
        <div class="row">
        <div class="col-md-5  format-first format-padding">
            <div class="name">Формат занятий</div>
            <p class="text-default">
                Все занятия проходят в on-line формате в программе ZOOM. Во время занятий можно задавать преподавателю любые вопросы. После занятий разбираем пройденный материал, а я отвечаю на ваши вопросы-запросы. Все занятия записываются, ученикам предоставляется доступ к материалам.
            </p>
            <p class="text-default">Также в закрытом Telegram-канале продолжаем общаться вне занятий, делимся интересной информацией из мира текстиля, задаём вопросы, получаем ответы и заводим новые полезные знакомства и друзей по интересам.</p>

            <a href="/kontakty" class="custom_button button link">Узнать стоимость</a>
        </div>
        <div class="col-md-7 format-padding format-second">

            <div class="format-tegels">
                <?for($i=1; $i<=6; $i++){?>
                <div class="format-tegel">
                    <div class="format-tegel-title">Формат курса</div>
                    <div class="format-tegel-format">Онлайн</div>
                </div>
                <?}?>
            </div>

        </div>
        </div>
    </div>
</div>

<div class="previews-block bg-default pb-0">
    <div class="container">
<div class="text-center name">Отзывы</div>
        <p class="text-center text-default">Уже несколько десятков учеников прошли курс по текстилю<br> и успешно применяют полученные знания на практике.</p>
        <div class="previews">
            <div class="list swiper-preview">
                <div class="swiper-wrapper">
					<?for($i=1; $i<=7; $i++){?>
                        <div class="preview swiper-slide">
							<div class="preview-user">Иван</div>
							<div class="preview-title">Очень понравился курс!</div>
								<p>Огромное спасибо за прекрасный курс. Потрясающий подход к каждому ученику! Буду всем вас советовать.</p>
							<div class="preview-time">12.03.2023</div>
						</div>
					<?}?>
                </div>
                <div class="container">
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>
    </div>
	<?php get_template_part( 'templates/parts/expert', null,array('class'=>'pb-0') ); ?>
</div>

<?php get_footer(); ?>