<div class="previews-block bg-default">
	<div class="container">
		<div class="name">Кому будут<br>полезны курсы?</div>
		<div class="news">
			<div class="row">
			<?php if (have_rows('gruppy_lyudej', get_queried_object())) {
				while (have_rows('gruppy_lyudej', get_queried_object())) {
					the_row();
					?>
				<div class="col-md-4 col-sm-12" style="margin-bottom: 20px;">
					<div class="one-news">
						<div class="news-img">
							<img src="<?=  get_sub_field('izobrazhenie_gruppy', get_queried_object()); ?>" alt="<?=  get_sub_field('nazvanie-gruppy', get_queried_object()); ?>">
						</div>
						<div class="news-desc">
							<div class="news-title">
								<p><?=  get_sub_field('nazvanie-gruppy', get_queried_object()); ?></p>
							</div>
							
							<div class="news-info text-default">
								<?=  get_sub_field('opisanie_gruppy', get_queried_object()); ?>
							</div>
						</div>
					</div>
				</div>
				<?php } }?>
			</div>
		</div>
	</div>
</div>
