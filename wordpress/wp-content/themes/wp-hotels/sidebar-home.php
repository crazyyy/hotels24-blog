<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<?php if ( is_active_sidebar('widgetarea2') ) : ?>
		<div class="widget widget-posters-grey">
			<h6>Афиша событий <a href="<?php echo home_url(); ?>/posters">смотреть все</a></h6>
			<ul>
			<?php 
				// args
				$args = array(
					'post_type'		=> 'posters',
					'posts_per_page'	=> 5,
					'meta_key'		=> 'date',
					'orderby'		=> 'meta_value_num',
					'order'			=> 'ASC'
				);
				// query
				$wp_query = new WP_Query( $args );
				// loop

				$checkDate = null;
				while( $wp_query->have_posts() ) { $wp_query->the_post(); 
			?>
	    
			<!-- article -->
			<?php 	
				$currdate = date("d.m.Y");
				$dateformatstrings = "d.m.Y";
				$monthformatstrings = "F";

				$unixtimestamp = strtotime(get_field('date'));
				$postersdate = date_i18n($dateformatstrings, $unixtimestamp);
				$monthdate = date_i18n($monthformatstrings, $unixtimestamp);
				if ($currdate == $postersdate ) {

					echo '<li class="today">';
					echo '<h5>Сегодня</h5>';
				}
				else  {
					echo '<li class="month">';
				}
			?>

			<?php 
				$a = $a+1;

				$dateformatstring = "F Y";
				$datedateformatstring = "d";
				$monthsdateformatstring = "F";
				$unixtimestamp = strtotime(get_field('date'));
				$dateForFirthtTime = date_i18n($dateformatstring, $unixtimestamp);
				$dateDate = date_i18n($datedateformatstring, $unixtimestamp);
				$monthsDate = date_i18n($monthsdateformatstring, $unixtimestamp);
				if($dateForFirthtTime != $checkDate & $a>1) 
					echo '<h5 class="month-visible">'.$dateForFirthtTime.'</h5>';
				if($a>1)$checkDate = $dateForFirthtTime;
			?>
		
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?> <span class="cluster"><?php echo $dateDate; ?><span><?php echo $monthsDate; ?></span></span></a>
			</li>
			<?php  } ?>
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
		
		<?php dynamic_sidebar( 'widgetarea2' ); ?>
	<?php else : ?>

		<div class="widget widget-posters-grey">
			<h6>Афиша событий <a href="<?php echo home_url(); ?>/posters">смотреть все</a></h6>
			<ul>
			<?php 
				// args
				$args = array(
					'post_type'		=> 'posters',
					'posts_per_page'	=> 5,
					'meta_key'		=> 'date',
					'orderby'		=> 'meta_value_num',
					'order'			=> 'ASC'
				);
				// query
				$wp_query = new WP_Query( $args );
				// loop

				$checkDate = null;
				while( $wp_query->have_posts() ) { $wp_query->the_post(); 
			?>
	    
			<!-- article -->
			<?php 	
				$currdate = date("d.m.Y");
				$dateformatstrings = "d.m.Y";
				$monthformatstrings = "F";

				$unixtimestamp = strtotime(get_field('date'));
				$postersdate = date_i18n($dateformatstrings, $unixtimestamp);
				$monthdate = date_i18n($monthformatstrings, $unixtimestamp);
				if ($currdate == $postersdate ) {

					echo '<li class="today">';
					echo '<h5>Сегодня</h5>';
				}
				else  {
					echo '<li class="month">';
				}
			?>

			<?php 
				$a = $a+1;

				$dateformatstring = "F, Y";
				$datedateformatstring = "d";
				$monthsdateformatstring = "F";
				$unixtimestamp = strtotime(get_field('date'));
				$dateForFirthtTime = date_i18n($dateformatstring, $unixtimestamp);
				$dateDate = date_i18n($datedateformatstring, $unixtimestamp);
				$monthsDate = date_i18n($monthsdateformatstring, $unixtimestamp);
				if($dateForFirthtTime != $checkDate & $a>1) 
					echo '<h5 class="month-visible">'.$dateForFirthtTime.'</h5>';
				if($a>1)$checkDate = $dateForFirthtTime;
			?>
		
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?> <span class="cluster"><?php echo $dateDate; ?><span><?php echo $monthsDate; ?></span></span></a>
			</li>
			<?php  } ?>
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
