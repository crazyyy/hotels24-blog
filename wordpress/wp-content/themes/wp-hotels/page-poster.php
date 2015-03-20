<?php /* Template Name: Poster Template */ get_header(); ?>
	
	<!-- section -->
	<section class="loop-with-first" role="main">

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

	while( $wp_query->have_posts() ) { $wp_query->the_post(); ?>
	    
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix looper'); ?>>
		<?php 	
			$currdate = date("d.F.Y");
			$dateformatstring = "d.F.Y";

			$unixtimestamp = strtotime(get_field('date'));
			$postersdate = date_i18n($dateformatstring, $unixtimestamp);
			if ($currdate == $postersdate ) {
				echo '<h6 class="day-today">Сегодня</h6>';
			}
			else  {
				// echo 'не сегодня';
			}
			
		?>

		<div class="mounth-date-big">

			<?php 

$a = $a+1;
			$dateformatstring = "F Y";
			$unixtimestamp = strtotime(get_field('date'));
			$dateForFirthtTime = date_i18n($dateformatstring, $unixtimestamp);
			if($dateForFirthtTime != $checkDate & $a>1) echo $dateForFirthtTime;
			if($a>1)$checkDate = $dateForFirthtTime;
			?>
		</div><!-- mounth-date-big -->

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

		<?php wpeExcerpt('wpeExcerpt40'); ?>
		
		
	</article>
	<!-- /article -->
	<?php  } ?>

	</section>
	<!-- /section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>