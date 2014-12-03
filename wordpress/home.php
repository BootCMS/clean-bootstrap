<?php get_header(); ?>
<section role="main">
	<?php  if ( have_posts() ) : ?>
		<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
	<div id="content" class="row"><!-- row 1B -->
		<div class="col-sm-9"><!-- col 1B1 -->
			<h1><?php _e('News', 'i-publishers'); ?></h1>
			<?php while ( have_posts() ) : the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    		<p><em><?php the_time('l, jS F, Y'); ?></em></p>
				<?php
					if ($post->post_excerpt) :
						the_excerpt(); 
					else :
						the_content('Read More ...', 'i-publishers');
					endif;
				?>
    		<hr>
			<?php endwhile; ?>
		</div><!-- / col 1B1 -->
		<div class="col-sm-3"><!-- col 1B2 -->
			<?php dynamic_sidebar( 'right-sidebar' ); ?>			 	  
		</div><!-- / col 1B2 -->
	</div><!-- / row 1B -->
		<?php else: ?>
	<div id="content" class="row"><!-- row 1B -->
		<div class="col-sm-12"><!-- col 1B1 -->
			<h1><?php _e('News', 'i-publishers'); ?></h1>
			<?php while ( have_posts() ) : the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    		<p><em><?php the_time('l, jS F, Y'); ?></em></p>
				<?php
					if ($post->post_excerpt) :
						the_excerpt(); 
					else :
						the_content('Read More ...', 'i-publishers');
					endif;
				?>
    		<hr>
			<?php endwhile; ?>
		</div><!-- / col 1B1 -->
	</div><!-- / row 1B -->
		<?php endif; // is_active_sidebar() ?>			
    <?php else: ?>
		<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
	<div id="content" class="row"><!-- row 1B -->
		<div class="col-sm-9"><!-- col 1B1 -->
			<p><?php _e('Sorry, no posts matched your criteria.', 'i-publishers'); ?></p>
		</div><!-- / col 1B1 -->
		<div class="col-sm-3"><!-- col 1B2 -->
			<?php dynamic_sidebar( 'right-sidebar' ); ?>			 	  
		</div><!-- / col 1B2 -->
	</div><!-- / row 1B -->
		<?php else: ?>
	<div id="content" class="row"><!-- row 1B -->
		<div class="col-sm-12"><!-- col 1B1 -->
			<?php _e('Sorry, no posts matched your criteria.', 'i-publishers'); ?></p>
		</div><!-- / col 1B1 -->
	</div><!-- / row 1B -->
		<?php endif; // is_active_sidebar() ?>
	<?php endif; // have_posts() ?>	
</section><!-- / main -->
<!-- Configure Settings / Reading / News page to Posts page -->
<?php get_footer(); ?>