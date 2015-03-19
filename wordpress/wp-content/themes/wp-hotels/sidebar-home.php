<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<?php if ( is_active_sidebar('widgetarea2') ) : ?>
		<?php dynamic_sidebar( 'widgetarea2' ); ?>
	<?php else : ?>

		<div class="widget widget-posters-grey">
			<h6>Афиша событий <a href="#">смотреть все</a></h6>
			<ul>
				<li class="today">
					<h5>Сегодня</h5>
					<a href="#">Новый год во Львове: подарите близким средневековую сказку!<span class="cluster">16<span>октября</span></span></a>
				</li>
				<li class="month-october">
					<h5>Октябрь, 2014</h5>
					<a href="#">Вперед в прошлое: уникальный музей ретро-автомобилей в Запорожье <span class="cluster">16<span>октября</span></span></a>
				</li>
				<li class="month-october">
					<h5>Октябрь, 2014</h5>
					<a href="#">Навстречу неизведанному: сколько стоит полет в космос<span class="cluster">18<span>октября</span></span></a>
				</li>
				<li class="month-november">
					<h5>Ноябрь, 2014</h5>
					<a href="#">Навстречу неизведанному: сколько стоит полет в космос<span class="cluster">>01<span>ноября</span></span></a>
				</li>
				<li class="month-november">
					<h5>Октябрь, 2014</h5>
					<a href="#">Навстречу неизведанному: сколько стоит полет в космос<span class="cluster">88<span>ноября</span></span></a>
				</li>
			</ul>
		</div>
		<!-- /.widget widget-posters-grey -->
 		
 		<div class="widget widget-manual-popular">
 			<h6>Популярное</h6>
 			<ul>
 			<?php query_posts("showposts=5&cat=8"); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li>
					<a class="clearfix" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php if ( has_post_thumbnail()) :
						the_post_thumbnail('medium');
						else: ?>
						<img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
						<?php endif; ?>
						<span><?php the_title(); ?></span>
					</a>
				</li>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
			</ul>
 		</div>
 		<!-- /.widget widget-manual-popular -->

 	<?php endif; ?>
</aside>
<!-- /sidebar -->
