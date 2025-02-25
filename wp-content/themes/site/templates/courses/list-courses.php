<div class="courses-block bg-default">
	
	<div class="container">
		<div class="name">Список курсов</div>
		<p class="text-default">В наших курсах нет никакой воды, только нужные знания. Самые<br> сложные процессы объясняются простым и доступным языком,<br> понятным даже непрофессионалу.</p>
		<div class="courses">
			<div class="list swiper">
				<div class="swiper-wrapper">
					<?php
						$queryArgs = [
							'post_type'         => 'course',
							'post_status'       => 'publish',
						];
						$query = new WP_Query($queryArgs);
						$posts = $query->get_posts();
					
						foreach ($posts as $post) {
							$postId         = $post->ID;
							$title          = get_the_title($postId);
							$start          = get_field('course_start', $postId);
							$duration       = get_field('dlitelnost_kursa', $postId);
							$link           = get_post_permalink($postId);
							$prevyu_kursa   = get_field('prevyu_kursa', $postId);
							?>
							<div class="course-block swiper-slide">
								<div class="course">
									<img class="course-img" src="<?= $prevyu_kursa ?>" alt="<?= $title ?>">
									<div class="course-info w-100">
										<div class="course-time">
											<div>Старт курса: <?= $start ?></div>
											<div><?= $duration?></div>
										</div>
										<div class="course-title"><?= $title ?></div>
										<div class="course-button">
											<a href="/kontakty" class="button link">Оставить заявку</a>
											<a class="course-link" href="<?= $link ?>">Программа курса</a>
										</div>
									</div>
								</div>
							</div>
						<?php }?>
				</div>
				<div class="container">
					<div class="swiper-pagination"></div>
				</div>
			</div>
		
		</div>
	</div>
</div>