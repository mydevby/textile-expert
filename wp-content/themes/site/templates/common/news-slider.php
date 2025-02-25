<div class="news-block">
	<div class="container">
		<div class="top-text">Блог</div>
		<div class="name">Новости и статьи</div>
		<p class="text-default">Курс по текстилю</p>
		<div class="news">
			<div class="row">
				<div class="swiper-wrapper">
					<?php
					$queryArgs = [
						'post_type'         => 'post',
						'post_status'       => 'publish',
						'posts_per_page'    => 3,
					];
					$query = new WP_Query($queryArgs);
					$posts = $query->get_posts();
					
					foreach ($posts as $post) {
						$postId           = $post->ID;
						$title            = get_the_title($postId);
						$link             = get_post_permalink($postId);
						$img              = get_field('izobrazhenie_novosti', $postId);
						$kratkoe_opisanie = get_field('kratkoe_opisanie', $postId);
						$data_publikaczii = get_field('data_publikaczii', $postId);
						?>
						<div class="col-md-4 col-sm-12">
							<a href="<?= $link ?>" class="one-news">
								<div class="news-img">
									<img src="<?= $img ?>" alt="<?= $title ?>">
								</div>
								<div class="news-desc">
									<div class="news-time">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
											<path d="M7.99961 14.4001C11.5342 14.4001 14.3996 11.5347 14.3996 8.0001C14.3996 4.46548 11.5342 1.6001 7.99961 1.6001C4.46499 1.6001 1.59961 4.46548 1.59961 8.0001C1.59961 11.5347 4.46499 14.4001 7.99961 14.4001Z" stroke="#CCC6C0" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8 5.6001V8.8001L9.6 10.4001" stroke="#CCC6C0" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
										<span><?= $data_publikaczii ?></span>
									</div>
									<div class="news-title">
										<p><?= $title ?></p>
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
											<path d="M7.5 15L12.5 10L7.5 5" stroke="#26231F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</div>
									
									<div class="news-info text-default">
										<?= $kratkoe_opisanie ?>
									</div>
								</div>
							</a>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>