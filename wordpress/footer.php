<footer role="contentinfo">
	<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
	<div class="row"><!-- row 1Y -->
		<div class="col-sm-12"><!-- col 1Y1 -->
			<?php dynamic_sidebar( 'footer-sidebar' ); ?>
		</div><!-- / col 1Y1 -->
	</div><!-- / row 1Y -->
	<?php endif; ?>
	<div class="row"><!-- row 1Z -->
		<div class="col-sm-12"><!-- col 1Z1 -->
			<?php wp_footer(); ?>
		</div><!-- / col 1Z1 -->
	</div><!-- / row 1Z -->
</footer><!-- / contentinfo -->
	</div><!-- / container 1 - opens in header -->
</body><!-- opens in header -->
</html>