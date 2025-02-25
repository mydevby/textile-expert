<div class="video-block">
	<div class="container">
		<div class="top-text text-center">YouTube- канал</div>
		<div class="name text-center">Экскурс в мир текстиля</div>
		<div class="videos">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					
					<?php if (have_rows('video_info')) {
						
						while (have_rows('video_info')) {
							the_row();
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
						
						<?php } } ?>
				
				</div>
				
				<div class="swiper-button-next">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
						<path d="M12 24L20 16L12 8" stroke="#26231F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
				<div class="swiper-button-prev">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
						<path d="M20 24L12 16L20 8" stroke="#26231F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
			</div>
		</div>
	</div>
</div>