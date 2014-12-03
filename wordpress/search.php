<?php get_header(); ?>
<section role="main">
	<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
	<div id="content" class="row"><!-- row 1B -->
		<div class="col-sm-9"><!-- col 1B1 -->
		<?php if ( have_posts() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'i-publishers' ), get_search_query() ); ?></h1>
			<?php
				while ( have_posts() ) : the_post();
					if ($post->post_excerpt) :
						the_excerpt(); 
					else :
						the_content('Read More ...', 'i-publishers');
					endif;
				endwhile; 
			?>
		<?php 
			// Previous/next post navigation.
			//	twentyfourteen_paging_nav(); - create paging navigation before "else".
			else : 
		?>
			<p><?php _e('Sorry, no posts matched your criteria.', 'i-publishers'); ?></p>
		<?php endif; // have_posts() ?>
		</div><!-- / col 1B1 -->
		<div class="col-sm-3"><!-- col 1B2 -->
			<?php  dynamic_sidebar( 'right-sidebar' ); ?>
		</div><!-- / col 1B2 -->
	</div><!-- / row 1B -->	
	<?php else: ?>
	<div id="content" class="row"><!-- row 1B -->	
		<div class="col-sm-12"><!-- col 1B1 -->
		<?php if ( have_posts() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'i-publishers' ), get_search_query() ); ?></h1>
			<?php
				while ( have_posts() ) : the_post();
					if ($post->post_excerpt) :
						the_excerpt(); 
					else :
						the_content('Read More ...', 'i-publishers');
					endif;
				endwhile; 
			?>
		<?php 
			// Previous/next post navigation.
			//	twentyfourteen_paging_nav(); - create paging navigation.
			else : 
		?>
			<p><?php _e('Sorry, no posts matched your criteria.', 'i-publishers'); ?></p>
		<?php endif; // have_posts() ?>
		</div><!-- / col 1B1 -->
	</div><!-- / row 1B -->
	<?php endif; // is_active_sidebar() ?>	
</section><!-- / main -->
<?php get_footer(); ?>