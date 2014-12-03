<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If need to customize more the archive views, create a
 * new template file for each view. For example, tag.php for Tag archives, 
 * category.php for Category archives, and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>
<section role="main">
	<?php  if ( have_posts() ) : ?>
		<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
	<div id="content" class="row"><!-- row 1B -->
		<div class="col-sm-9"><!-- col 1B1 -->
			<h1 class="archive-title">
			<?php
				if ( is_day() ) :
					printf( __( 'Daily Archives: %s', 'i-publishers'), '<span>' . get_the_date() . '</span>' );
				elseif ( is_month() ) :
					printf( __( 'Monthly Archives: %s', 'i-publishers'), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'i-publishers')) . '</span>' );
				elseif ( is_year() ) :
					printf( __( 'Yearly Archives: %s', 'i-publishers'), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'i-publishers')) . '</span>' );
				else :
					_e('Archives', 'i-publishers');
				endif;
			?>
			</h1>
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
			//	twentyfourteen_paging_nav(); - create paging navigation before else.
			?>
		</div><!-- / col 1B1 -->
		<div class="col-sm-3"><!-- col 1B2 -->
			<?php dynamic_sidebar( 'right-sidebar' ); ?>			 	  
		</div><!-- / col 1B2 -->
	</div><!-- / row 1B -->
		<?php else: ?>
	<div id="content" class="row"><!-- row 1B -->
		<div class="col-sm-12"><!-- col 1B1 -->
			<h1 class="archive-title">
			<?php
				if ( is_day() ) :
					printf( __( 'Daily Archives: %s', 'i-publishers'), '<span>' . get_the_date() . '</span>' );
				elseif ( is_month() ) :
					printf( __( 'Monthly Archives: %s', 'i-publishers'), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'i-publishers')) . '</span>' );
				elseif ( is_year() ) :
					printf( __( 'Yearly Archives: %s', 'i-publishers'), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'i-publishers')) . '</span>' );
				else :
					_e('Archives', 'i-publishers');
				endif;
			?>
			</h1>
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
			//	twentyfourteen_paging_nav(); - create paging navigation before else.
			?>
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
		<?php endif; //  is_active_sidebar() ?>
	<?php endif; // have_posts() ?>	
</section><!-- / main -->
<?php get_footer(); ?>