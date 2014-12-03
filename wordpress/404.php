<?php get_header(); ?>
<section role="main">
	<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
	<div id="content" class="row"><!-- row 1B -->
		<div class="col-sm-9"><!-- col 1B1 -->
			<article id="post-0" class="post error404 no-results not-found">
				<h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'i-publishers'); ?></h2>
				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'i-publishers'); ?></p>
				<!-- <?php /* get_search_form(); */ ?> for future use -->
			</article><!-- / #post-0 -->
		</div><!-- / col 1B1 -->
		<div class="col-sm-3"><!-- col 1B2 -->
			<?php  dynamic_sidebar( 'right-sidebar' ); ?>
		</div><!-- / col 1B2 -->
	</div><!-- / row 1B -->	
	<?php else: ?>
	<div id="content" class="row"><!-- row 1B -->	
		<div class="col-sm-12"><!-- col 1B1 -->
			<article id="post-0" class="post error404 no-results not-found">
				<h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'i-publishers'); ?></h2>
				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'i-publishers'); ?></p>
				<!-- <?php /* get_search_form(); */ ?> for future use -->
			</article><!-- / #post-0 -->
		</div><!-- / col 1B1 -->
	</div><!-- / row 1B -->	
	<?php endif; // is_active_sidebar() ?>
</section><!-- / main -->
<?php get_footer(); ?>