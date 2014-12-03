<?php get_header(); ?>
<section role="main">
	<?php if ( is_active_sidebar( 'user1-sidebar' ) ) : ?>
	<div id="content" class="row"><!-- row 1B -->
		<div class="col-sm-12"><!-- col 1B1 -->
			<?php  dynamic_sidebar( 'user1-sidebar' ); ?>
		</div><!-- / col 1B1 -->
	</div><!-- / row 1B -->	
	<div class="row"><!-- row 1C -->
		<div class="col-sm-12"><!-- col 1C1 -->
			<?php  
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content(); 
				endwhile;
			?>
		</div><!-- / col 1C1 -->
	</div><!-- / row 1C -->	
			<?php else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.', 'i-publishers'); ?></p>
		</div><!-- / col 1C1 -->
	</div><!-- / row 1C -->
			<?php endif; ?>
	<?php else: ?>		
	<div id="content" class="row"><!-- row 1B -->
		<div class="col-sm-12"><!-- col 1B1 -->
			<?php  
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content(); 
				endwhile;
			?>
		</div><!-- / col 1B1 -->
	</div><!-- / row 1B -->	
			<?php else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.', 'i-publishers'); ?></p>
		</div><!-- / col 1B1 -->
	</div><!-- / row 1B -->
			<?php endif; ?>
	<?php endif; // is_active_sidebar() ?>
</section><!-- / main -->
<?php get_footer(); ?>
