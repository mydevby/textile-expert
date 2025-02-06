<head>
	<title>Текстиль Эксперт</title>
</head>
<?php get_header() ?>
<div class="preview-block text-center bg-default">
    <div class="container">
<p class="top-text">Проект Сергея Медвецкого</p>
        <div class="preview-info">
            <h1>ТЕКСТИЛЬ-ЭКСПЕРТ</h1>
            <p>Ваш личный гид в мире текстильных изделий</p>
        </div>
        <a href="/kontakty" class="custom_button button link">Получить консультацию</a>
    </div>
</div>
<div class="preview-images">
   <div class="row">
       <div class="col-md-6 col-sm-12 pr-0">
           <img src="<?=get_stylesheet_directory_uri()?>/assets/img/preview2.png">

       </div>
       <div class="col-md-6 col-sm-12 pl-0">
           <img src="<?=get_stylesheet_directory_uri()?>/assets/img/preview1.png">
       </div>
   </div>


</div>
<div class="services-block">
    <div class="container">
        <div>
            <div class="top-text">
                Услуги
            </div>
            <div class="name">
                Обучение</br> и консалтинг
            </div>
            <p class="text-default">Повышаем профессионализм и стабильность вашего бизнеса<br> в области текстильной промышленности. </p>
        </div>
        <div class="services">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <a href="/kursy" class="service bg-default">
                        <div class="service-title"><p class="top-text">Обучение</p>

                            <svg id="" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M7.5 15L12.5 10L7.5 5" stroke="#DE541E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>

                        <p class="text-default">Базовые и углубленные систематизированные знания о технологиях и материалах текстильной и легкой промышленности. От новичков до специалистов.</p>
                    </a>

                </div>
                <div class="col-md-5 col-sm-12">
                    <a href="<?the_permalink(8)?>" class="service bg-default">
                     <div class="service-title">
                         <p class="top-text">
                             Консалтинг
                         </p>
                         <svg id="" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                             <path d="M7.5 15L12.5 10L7.5 5" stroke="#DE541E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                         </svg>
                     </div>

                        <p class="text-default">Любые виды консультаций для решения ваших производственных задач и экономии времени и средств.</p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<?get_template_part( 'templates/parts/expert', null,array('class'=>'expert-reverse') );?>
<div class="video-block">
    <div class="container">
        <div class="top-text text-center">YouTube- канал</div>
        <div class="name text-center">Экскурс в мир текстиля</div>
        <div class="videos">
            <div class="swiper-container">
                <div class="swiper-wrapper">
					<?php if (have_rows('video_info')) {
						// Цикл по повторяющемуся полю "contacts"
						while (have_rows('video_info')) {
							the_row();
							
							// Получаем значения вложенных полей
							$video_name = get_sub_field('video_name');
							$video_img = get_sub_field('video_img');
							$video_link = get_sub_field('video_link');
							?>
							<div class="swiper-slide">
								<a href="<?php echo $video_link; ?>" class="video" target="_blank">
									<div class="video-image">
										<img src="<?= $video_img ?>">
										<div class="play"></div>
									</div>
									<p><?php echo $video_name; ?></p>
								</a>
							
							
							</div>
							
							<?php
						}
					}
					?>

                </div>

                <div class="swiper-button-next"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M12 24L20 16L12 8" stroke="#26231F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></div>
                <div class="swiper-button-prev"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M20 24L12 16L20 8" stroke="#26231F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></div>
            </div>

        </div>
    </div>
</div>
<div class="news-block">
    <div class="container">
        <div class="top-text">Блог</div>
        <div class="name">Новости и статьи</div>
        <p class="text-default">Курс по текстилю</p>
        <div class="news">
           <div class="row">
            <?for($i=1; $i<=3; $i++){?>
            <div class="col-md-4 col-sm-12">
                <a href="#" class="one-news">
                <div class="news-img">
                    <img src="<?=get_stylesheet_directory_uri()?>/assets/img/video.png">
                </div>
                <div class="news-desc">
                <div class="news-time"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M7.99961 14.4001C11.5342 14.4001 14.3996 11.5347 14.3996 8.0001C14.3996 4.46548 11.5342 1.6001 7.99961 1.6001C4.46499 1.6001 1.59961 4.46548 1.59961 8.0001C1.59961 11.5347 4.46499 14.4001 7.99961 14.4001Z" stroke="#CCC6C0" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8 5.6001V8.8001L9.6 10.4001" stroke="#CCC6C0" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <span>4 часа назад</span>
                </div>
                    <div class="news-title">
                        <p>36-е исследование по качеству пряжи</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M7.5 15L12.5 10L7.5 5" stroke="#26231F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>

                    <div class="news-info text-default">
                        Фабрики, участвующие в исследованиях CPQ, ранжируются на основе вклада (на веретено в год), который они заработали...
                    </div>
                </div>
            </a>
            </div>
    <?}?>
           </div>
        </div>
    </div>
</div>

<?/*
$channel_id = 'UCUWYw05Gfk_36GeGvWjuevQ'; // Замените на реальный ID вашего канала
$rss_feed = 'https://www.youtube.com/feeds/videos.xml?channel_id=' . $channel_id;

$xml = simplexml_load_file($rss_feed);

if ($xml) {
    $videos = $xml->entry;
    echo '<pre>';
    print_r($xml);
    echo '</pre>';
    exit();
    foreach ($videos as $video) {

        $title = (string)$video->title;
        $url = (string)$video->link['href'];

        echo '<p><a href="' . $url . '">' . $title . '</a></p>';
    }
} else {
    echo 'Не удалось загрузить данные из RSS-канала YouTube.';
}*/
?>
    <?/*https://www.youtube.com/feeds/videos.xml?channel_id=UCUWYw05Gfk_36GeGvWjuevQ*/?>

<?php get_footer(); ?>