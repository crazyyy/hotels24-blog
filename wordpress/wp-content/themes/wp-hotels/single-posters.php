<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="poster-headline clearfix">
			<div class="big-date">
				<span class="daydate"><?php $dateformatstring = "d";
					$unixtimestamp = strtotime(get_field('date'));
					echo date_i18n($dateformatstring, $unixtimestamp); ?>
				</span>
				<span class="mounthdate"><?php $dateformatstring = "F";
					$unixtimestamp = strtotime(get_field('date'));
					echo date_i18n($dateformatstring, $unixtimestamp); ?></span>
			</div>
			<h1 class="single-title inner-title"><?php the_title(); ?></h1>
			<ul class="support-title">
				<li class="whereis">
					<i class="fa fa-map-marker"></i><a href="#">Узнать когда и где</a>
				</li>
				<li class="searchnearby">
					<i class="fa fa-home"></i><a href="#">Отели рядом</a>
				</li>
				<li class="wherebuy">
					<i class="fa fa-ticket"></i><a href="#">Купить билет<br><span>на karabas.com</span></a>
				</li>
			</ul><!-- support-title -->
		</div>
		<!-- /.poster-headline clearfix -->
		
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
			
			<?php if(get_field('anonse'))	{ echo '<p class="article-anonse">' . get_field('anonse') . '</p>';	} ?>
			<p class="authors-line clearfix"><?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?><span class="author-name"><?php _e( 'This post was written by ', 'wpeasy' ); the_author(); ?></span><span class="date"><?php the_time('d F Y'); ?></span><span class="comments"><i class="fa fa-comment"></i><?php comments_popup_link( __( '0', 'wpeasy' ), __( '1', 'wpeasy' ), __( '%', 'wpeasy' )); ?></span></p>
			<!-- post thumbnail // chek if thumbail exits -->
			<div class="thubma-with-socail clearfix">
				<ul class="soc-icons">
					<li></li>
					<li></li>
					<li></li>
				</ul><!-- soc-icons -->

				<a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php if ( has_post_thumbnail()) : the_post_thumbnail('full'); 
						else: ?>
						<img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
					<?php endif; ?>
					<!-- /post thumbnail -->			
				</a><!-- single-thumb -->	
			</div><!-- /.thubma-with-socail -->
		
			<!-- Dispaly dynamic content RU: Вывод контента записей -->
			<?php the_content(); ?>
		
			<?php endwhile; else: ?>
				<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
			<?php endif; ?>	
		</article>
		<!-- /article -->
		<?php get_template_part('poster-paced'); ?>

		<?php get_template_part('nearby-hotels'); ?>
			
		<?php comments_template(); ?>

		<?php get_template_part('see-also'); ?>
	</section>
	<!-- /section -->
	
<?php get_sidebar('posters'); ?>
<?php get_footer(); ?>