<?php
/*
Template Name: Новости
*/
?>
<head>
	<title>Блог</title>
</head>
<?php get_header(); ?>

	<div class="novosti-bg">
		<img class="novosti-bg" src="<?=get_stylesheet_directory_uri()?>/assets/img/novosti-bg.png"">	
			<div class="novosti-bg-text text-center">
				<div class="page-name">
					Блог				  
				</div>	
					<div class="preview-info">
						 <h1>Новости и статьи</h1>
						 <p>Ваш личный гид в мире текстильных изделий</p>
					</div>
			</div>	
	</div>
											 
	<div class="news-block2">
    <div class="container">
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
	
<?php get_footer() ?>
