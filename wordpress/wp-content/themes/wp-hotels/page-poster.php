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
while( $wp_query->have_posts() ) { $wp_query->the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix looper'); ?>>

	


	<div class="mounth-date-big">
		<?php $dateformatstring = "F";
		$unixtimestamp = strtotime(get_field('date'));
		echo date_i18n($dateformatstring, $unixtimestamp); ?>
	</div><!-- mounth-date-big -->
	
			<div class="big-date">
				<span class="daydate"><?php $dateformatstring = "d";
					$unixtimestamp = strtotime(get_field('date'));
					echo date_i18n($dateformatstring, $unixtimestamp); ?>
				</span>
				<span class="mounthdate"><?php $dateformatstring = "F";
					$unixtimestamp = strtotime(get_field('date'));
					echo date_i18n($dateformatstring, $unixtimestamp); ?></span>
			</div>


		<!-- post thumbnail -->
		<a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php if ( has_post_thumbnail()) :
				the_post_thumbnail('medium');	
			else: ?>
			<img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
		<?php endif; ?></a>
		<!-- /post thumbnail -->
		
		<!-- post title -->
		<h2 class="looper-title inner-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->
		
		<!-- post details -->
		<span class="date"><?php the_time('j F Y'); ?> <span><?php the_time('G:i'); ?></span></span>
		<span class="author"><?php _e( 'Published by', 'wpeasy' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'wpeasy' ), __( '1 Comment', 'wpeasy' ), __( '% Comments', 'wpeasy' )); ?></span>
		<!-- /post details -->
		
		<?php wpeExcerpt('wpeExcerpt40'); ?>
		
		<?php edit_post_link(); ?>
		
	</article>
	<!-- /article -->



<?php  } ?>



	
	</section>
	<!-- /section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>