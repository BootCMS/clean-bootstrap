<nav class="<?php if ( get_theme_mod( 'bs_inverse' )) : echo 'navbar-inverse '; endif; ?> navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<!-- enable brand image or brand name here -->
	</div><!-- / navbar-header -->			
	<div class="collapse navbar-collapse" id="navbar-collapse-1">				
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'primary',
						'menu'              => 'Primary Menu',
						'menu_class'        => 'nav navbar-nav',
						'container'         => ' ',
						'container_class' 	=> ' ',
						'container_id'    	=> ' ',
						'fallback_cb'     	=> 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker()
					));
				?>
	</div><!-- / #navbar-collapse-1 -->
</nav><!-- / navigation -->
<!-- more about menu: http://codex.wordpress.org/Function_Reference/wp_nav_menu -->



  