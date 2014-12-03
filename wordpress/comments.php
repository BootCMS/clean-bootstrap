<?php get_header();
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<section role="main">
	<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
	<div id="content" class="row"><!-- row 1B -->
		<div class="col-sm-9"><!-- col 1B1 -->
			<?php if ( have_comments() ) : ?>
			<h2>
			<?php
				printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'i-publishers' ),
				number_format_i18n( get_comments_number() ), get_the_title() );
			?>
			</h2>
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-above" role="navigation">
				<h3><?php _e( 'Comment Navigation', 'i-publishers' ); ?></h3>
				<div><?php previous_comments_link( __( '&larr; Older Comments', 'i-publishers' ) ); ?></div>
				<div><?php next_comments_link( __( 'Newer Comments &rarr;', 'i-publishers' ) ); ?></div>
			</nav>
			<?php endif;?>
			<ol>
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size'=> 34,
				) );
			?>
			</ol>
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-below" role="navigation">
				<h3 class="screen-reader-text"><?php _e( 'Comment Navigation', 'i-publishers' ); ?></h3>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'i-publishers' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'i-publishers' ) ); ?></div>
			</nav>
			<?php endif;?>
			<?php if ( ! comments_open() ) : ?>
			<p><?php _e( 'Comments are closed.', 'i-publishers' ); ?></p>
			<?php endif; ?>
			<?php endif; // have_comments() ?>
			<?php comment_form(); ?>
		</div><!-- / col 1B1 -->
		<div class="col-sm-3"><!-- col 1B2 -->
			<?php  dynamic_sidebar( 'right-sidebar' ); ?>
		</div><!-- / col 1B2 -->
	</div><!-- / row 1B -->
	<?php else: ?>
	<div id="content" class="row"><!-- row 1B -->
		<div class="col-sm-12"><!-- col 1B1 -->
			<?php if ( have_comments() ) : ?>
			<h2>
			<?php
				printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'i-publishers' ),
				number_format_i18n( get_comments_number() ), get_the_title() );
			?>
			</h2>
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-above" role="navigation">
				<h3><?php _e( 'Comment Navigation', 'i-publishers' ); ?></h3>
				<div><?php previous_comments_link( __( '&larr; Older Comments', 'i-publishers' ) ); ?></div>
				<div><?php next_comments_link( __( 'Newer Comments &rarr;', 'i-publishers' ) ); ?></div>
			</nav>
			<?php endif;?>
			<ol>
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size'=> 34,
				) );
			?>
			</ol>
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-below" role="navigation">
				<h3 class="screen-reader-text"><?php _e( 'Comment Navigation', 'i-publishers' ); ?></h3>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'i-publishers' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'i-publishers' ) ); ?></div>
			</nav>
			<?php endif;?>
			<?php if ( ! comments_open() ) : ?>
			<p><?php _e( 'Comments are closed.', 'i-publishers' ); ?></p>
			<?php endif; ?>
			<?php endif; // have_comments() ?>
			<?php comment_form(); ?>
		</div><!-- / col 1B1 -->
	</div><!-- / row 1B -->
	<?php endif; // is_active_sidebar() ?>
</section><!-- / main -->
<?php get_footer(); ?>