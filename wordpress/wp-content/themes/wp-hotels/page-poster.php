<?php /* Template Name: Poster Template */ get_header(); ?>
	
	<!-- section -->
	<section class="loop-with-first" role="main">
	
<?php 
$today = date('Ymd');
$args = array (
    'post_type' => 'posters',
    'meta_query' => array(
		array(
	        'key'		=> 'start_date',
	        'compare'	=> '<=',
	        'value'		=> $today,
	    ),
	     array(
	        'key'		=> 'end_date',
	        'compare'	=> '>=',
	        'value'		=> $today,
	    )
    ),
);
?>
	<?php query_posts($args); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	ssss9111
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix looper'); ?>>
	
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
		
		<!-- post title -->
		<h2 class="looper-title inner-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->
		
		<!-- post details -->
		<span class="date"><?php the_time('j F Y'); ?></span>
		<!-- /post details -->
		
		<?php wpeExcerpt('wpeExcerpt40'); ?>
		
	</article>
	<!-- /article -->
		
	<?php endwhile;  ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
	
	</section>
	<!-- /section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>