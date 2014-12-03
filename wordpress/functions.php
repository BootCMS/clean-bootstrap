<?php 
function wpbootstrap_scripts_with_jquery() {
	// Load Bootstrap Local or CDN
		if ( get_theme_mod( 'bs_skins' ) && get_theme_mod( 'bs_local' ) == false ) {
		$bootscdn = get_theme_mod( 'bs_skins' );
	wp_enqueue_style( 'bootstrap', $bootscdn );	
		} else {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3' );
	}
	// Load the custom stylesheet.
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0' );
	//Google Web Fonts, after Bootstrap to force chosen Google fonts.
	if (get_theme_mod( 'text_google_font' ) ) {
		$gtextfonts = get_theme_mod( 'text_google_font' );
		$gtextfonts = str_replace(' ', '+', $gtextfonts);		
	wp_register_style( 'google_font', '//fonts.googleapis.com/css?family=' . $gtextfonts );
	wp_enqueue_style( 'google_font' );
	}
	// Load jQuery.
	wp_enqueue_script( 'jquery' ); 
	// Register the Bootstrap script:
	wp_register_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3' );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'bootstrap-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

require_once('inc/wp_bootstrap_navwalker.php');

function theme_setup() {
	// Translations can be added to the /languages/ directory.
	load_theme_textdomain( 'i-publishers', get_template_directory() . '/languages' );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'i-publishers' ) );
	//This theme supports custom background color and image.
	add_theme_support( 'custom-background' );
	//This theme supports custom image on header, header text color, etc.
	add_theme_support( 'custom-header' );
}
add_action( 'after_setup_theme', 'theme_setup' );

function register_the_sidebars() { 
	register_sidebar(array(
        'name' 			=> __('Right Sidebar', 'i-publishers'),
        'id' 			=> 'right-sidebar',
        'description' 	=> __('Widgets in this area will be displayed at the right of the content (not front page).', 'i-publishers'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s sidebar_editable">',
        'after_widget' 	=> '</aside>',
        'before_title' 	=> '<h3 class="widget_title">',
        'after_title' 	=> '</h3>'
    ));
		register_sidebar(array(
        'name' 			=> __('User1 Sidebar', 'i-publishers'),
        'id' 			=> 'user1-sidebar',
        'description' 	=> __('Widgets in this area will be displayed in the Hero unit (front page only).', 'i-publishers'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s sidebar_editable">',
        'after_widget' 	=> '</aside>',
        'before_title' 	=> '<h1 class="widget_title">',
        'after_title' 	=> '</h1>'
    ));
		register_sidebar(array(
        'name' 			=> __('Footer Sidebar', 'i-publishers'),
        'id' 			=> 'footer-sidebar',
        'description' 	=> __('Widgets in this area will be displayed in the footer.', 'i-publishers'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s sidebar_editable">',
        'after_widget' 	=> '</aside>',
        'before_title' 	=> '<h3 class="widget_title">',
        'after_title' 	=> '</h3>'
    ));
}
add_action( 'widgets_init', 'register_the_sidebars' );

function theme_customize_register( $wp_customize ) {
   	//All our sections, settings, and controls will be added here
	$wp_customize->add_section( 'bootstrap_skins' , array( 'title' => 'Bootstrap Skins', 'description' => 'Choose one of the available Bootswatch skins or the default Twitter Bootstrap. All skins are based on CDN. For more information visit www.bootstrapcdn.com', 'priority' => 140 ) );
	$wp_customize->add_setting( 'bs_skins', array( 'default' => '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css' ) );
   	$wp_customize->add_control( 'bs_skins', array(
	'label'    => __( 'Choose a skin' ),
	'section'  => 'bootstrap_skins',
	'type'     => 'select',
	'choices'  => array (
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css' => 'Twitter* v.3.3.1',
		'//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/cerulean/bootstrap.min.css' => 'Cerulean v.3.3.0',
		'//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/cosmo/bootstrap.min.css' => 'Cosmo v.3.3.0',
		'//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/cyborg/bootstrap.min.css' => 'Cyborg v.3.3.0',
		'//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/darkly/bootstrap.min.css' => 'Darkly v.3.3.0',
		'//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/flatly/bootstrap.min.css' => 'Flatly v.3.3.0',
		'//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/journal/bootstrap.min.css' => 'Journal v.3.3.0',
		'//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/lumen/bootstrap.min.css' => 'Lumen v.3.3.0',
		'//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/paper/bootstrap.min.css' => 'Paper v.3.3.0',
		'//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/readable/bootstrap.min.css' => 'Readable v.3.3.0',
		'//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/sandstone/bootstrap.min.css' => 'Sandstone v.3.3.0',
		'//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/simplex/bootstrap.min.css' => 'Simplex v.3.3.0',
		'//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/slate/bootstrap.min.css' => 'Slate v.3.3.0',
		'//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/spacelab/bootstrap.min.css' => 'Spacelab v.3.3.0',
		'//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/superhero/bootstrap.min.css' => 'Superhero v.3.3.0',
		'//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/united/bootstrap.min.css' => 'United v.3.3.0',
		'//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/yeti/bootstrap.min.css' => 'Yeti v.3.3.0',
	), ) );
	$wp_customize->add_section( 'bootstrap_options' , array( 'title' => 'Bootstrap Options', 'description' => 'Normally you use tootips/popovers within a (a href="#") anchor. The minimum markup for tooltips: (data-toggle="tooltip" title="the tooltip text here") and the minimum for popovers: (data-toggle="popover" data-content="The popover text here” data-container="body"). For more options check the Boostrap’s website.', 'priority' => 150 ) );
	$wp_customize->add_setting( 'bs_local', array( 'default' => '' ) );
   	$wp_customize->add_control( 'bs_local', array(
	'label'    => __( 'Use Local Bootstrap' ),
	'section'  => 'bootstrap_options',
	'type'     => 'checkbox',
	) );
	$wp_customize->add_setting( 'bs_inverse', array( 'default' => '' ) );
   	$wp_customize->add_control( 'bs_inverse', array(
	'label'    => __( 'Use Navbar Inverse' ),
	'section'  => 'bootstrap_options',
	'type'     => 'checkbox',
	) );
	$wp_customize->add_setting( 'bs_tooltip', array( 'default' => '' ) );
   	$wp_customize->add_control( 'bs_tooltip', array(
	'label'    => __( 'Enable Tooltips' ),
	'section'  => 'bootstrap_options',
	'type'     => 'checkbox',
	) );
	$wp_customize->add_setting( 'bs_popover', array( 'default' => '' ) );
   	$wp_customize->add_control( 'bs_popover', array(
	'label'    => __( 'Enable Popovers' ),
	'section'  => 'bootstrap_options',
	'type'     => 'checkbox',
	) );
	$wp_customize->add_section( 'google_fonts_options' , array( 'title' => 'Google Web Fonts', 'description' => 'Visit (http://www.google.com/fonts) to choose a font for the text. Enter the name of the font.', 'priority' => 170 ) );
	$wp_customize->add_setting( 'text_google_font' , array() );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'text_google_font', array(
	'label'      => __( 'Text Font Name', 'i-publishers' ),
	'section'    => 'google_fonts_options',
	'type'   	 => 'text',
	) ) );
}
add_action( 'customize_register', 'theme_customize_register' );

function customizer_bootstrap() {
	if (get_theme_mod( 'bs_tooltip' ) == 'true') { echo '<script>jQuery("[data-toggle=tooltip]").tooltip();</script>' ;}
	if (get_theme_mod( 'bs_popover' ) == 'true') { echo '<script>jQuery("[data-toggle=popover]").popover().click(function(e){e.preventDefault();});</script>' ;}
}
add_action( 'wp_footer', 'customizer_bootstrap' );

function customizer_css() {
    echo '<style type="text/css">';	
		if (get_theme_mod( 'text_google_font' )) : echo 'body, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6, p, .p .google-font { font-family: "'; echo get_theme_mod( 'text_google_font' ) ; echo '", Helvetica !important; } ' ; endif;
    echo '</style>' ;
}
add_action( 'wp_head', 'customizer_css' );

// Add help text to right of screen in a metabox
if ( !class_exists('wp_custom_nav')) {
	class wp_custom_nav {
		public function add_nav_menu_meta_boxes() {
			add_meta_box(
				'menucustomhelp',
				__('Dividers &amp; Disabled Links'),
				array( $this, 'wp_nav_menu_help'),
				'nav-menus',
				'side',
				'low'
			);
		}
public function wp_nav_menu_help() {?>
<p>Add a new link to the menu. In URL enter anything. For a divider, in Navigation Label enter 'divider' and in Title Attribute enter nothing. For a disabled link, in Navigation Label enter any title and in Title Attribute enter 'disabled'.</p>
<?php }
	}
}
$custom_nav = new wp_custom_nav;
add_action('admin_init', array($custom_nav, 'add_nav_menu_meta_boxes')); 

?>