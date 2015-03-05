<h6 class="see-also-title">Читайте также:</h6>
<ul class="see-also-container clearfix">
	<?php query_posts("showposts=3&cat=8"); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<li>
		<!-- post thumbnail -->
		<a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php if ( has_post_thumbnail()) :
				the_post_thumbnail('medium');	
			else: ?>
			<img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
			<?php endif; ?>
			<span class="category-hl">Отдыхаем в Украине</span>
		</a>
		<!-- /post thumbnail -->
		<a class="see-also-inner-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	</li>
	<?php endwhile; endif; ?>
	<?php wp_reset_query(); ?>
</ul>