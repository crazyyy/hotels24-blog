<?php /* Template Name: Poster Template */ get_header(); ?>
	
	<!-- section -->
	<section class="loop-with-first page-poster-list" role="main">

		<?php 
			// args
			$args = array(
				'post_type'		=> 'posters',
				'posts_per_page'	=> -1,
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

			$unixtimestamp = strtotime(get_field('date'));
			$postersdate = date_i18n($dateformatstrings, $unixtimestamp);
			if ($currdate == $postersdate ) {

				echo '<article ';
				echo post_class('article-day-today clearfix looper');
				echo '>
				<h6 class="day-today">Сегодня</h6>';
			}
			else  {
				echo '<article ';
				echo post_class('clearfix looper');
				echo '>';
			}
			
		?>

			<?php 
				$a = $a+1;

				$dateformatstring = "F Y";
				$unixtimestamp = strtotime(get_field('date'));
				$dateForFirthtTime = date_i18n($dateformatstring, $unixtimestamp);
				if($dateForFirthtTime != $checkDate & $a>1) 
					echo '<h6 class="mounth-date-big">'.$dateForFirthtTime.'</h6><!-- mounth-date-big -->';
				if($a>1)$checkDate = $dateForFirthtTime;
			?>

			

			<div class="includer-article clearfix">
				<!-- post thumbnail -->
				<a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php if ( has_post_thumbnail()) :
						the_post_thumbnail('medium');	
					else: ?>
					<img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
					<?php endif; ?>
					<div class="big-date">
						<span class="daydate"><?php $dateformatstring = "d";
							$unixtimestamp = strtotime(get_field('date'));
							echo date_i18n($dateformatstring, $unixtimestamp); ?>
						</span>
						<span class="mounthdate"><?php $dateformatstring = "F";
							$unixtimestamp = strtotime(get_field('date'));
							echo date_i18n($dateformatstring, $unixtimestamp); ?></span>
					</div>
				</a>
				<!-- /post thumbnail -->
				<!-- post title -->
				<h2 class="looper-title inner-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<!-- /post title -->
				<?php wpeExcerpt('wpeExcerpt30'); ?>				
			</div>
			<!-- /.includer-article -->
			
		</article>
		<!-- /article -->
	<?php  } ?>

	<?php get_template_part('see-also'); ?>
	</section>
	<!-- /section .page-poster-list -->
	
<?php get_sidebar('posters'); ?>

<?php get_footer(); ?>