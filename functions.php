<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
/*------Social Media Icons Header widget -----*/
register_sidebar( array(
		'name' => ('Social Media Icons Widget'),
		'id' => 'first-widget',
		'description' => 'Social Media Icons Widget',
		'before_widget' => '<div class="icons-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	));

/*------Searchbar Header widget -----*/
register_sidebar( array(
		'name' => ('Searchbar'),
		'id' => 'searchbar',
		'description' => 'Header Searchbar',
		'before_widget' => '<div class="header-searchbar">',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	));

/*----Account Header widget---*/
register_sidebar( array(
    'name'          => ('Account Widget'),
    'id'            => 'account',
    'description'   => 'Account Widget in Header',
    'before_widget' => '<div class="account-widget-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));


/*----Cart Header widget---*/
register_sidebar( array(
    'name'          => ('Cart Widget'),
    'id'            => 'cart-widget',
    'description'   => 'Cart Widget in header',
    'before_widget' => '<div class="cart-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));


/*----Large Logo Top widget---*/
register_sidebar( array(
    'name'          => ('Large Logo Widget'),
    'id'            => 'large-logo-widget',
    'description'   => 'Large Logo Widget',
    'before_widget' => '<div class="large-logo-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));


/*----Slider widget---*/
register_sidebar( array(
    'name'          => ('Slider Widget'),
    'id'            => 'slider-widget',
    'description'   => 'Slider Widget',
    'before_widget' => '<div class="slider-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Modern Mural Text Left widget---*/
register_sidebar( array(
    'name'          => ('Modern Mural Text Left'),
    'id'            => 'mm-text-left',
    'description'   => 'MM Text Left',
    'before_widget' => '<div class="mm-text-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Modern Mural Image Right widget---*/
register_sidebar( array(
    'name'          => ('Modern Mural Image Right'),
    'id'            => 'mm-image-right',
    'description'   => 'MM Image Right',
    'before_widget' => '<div class="mm-image-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Categories widget---*/
register_sidebar( array(
    'name'          => ('Categories'),
    'id'            => 'categories-header',
    'description'   => 'Categories Header',
    'before_widget' => '<div class="header-categories">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Categories Individual---*/
register_sidebar( array(
    'name'          => ('Categories Images'),
    'id'            => 'categories-images',
    'description'   => 'Categories Images',
    'before_widget' => '<div class="categories-images">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Simple Stencil Image left---*/
register_sidebar( array(
    'name'          => ('Simple Stencil Image left'),
    'id'            => 'ss-image-left',
    'description'   => 'Simple Stencil Image left',
    'before_widget' => '<div class="ss-image-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Simple Stencil Text Right---*/
register_sidebar( array(
    'name'          => ('Simple Stencil Text Right'),
    'id'            => 'ss-text-right',
    'description'   => 'Simple Stencil Text Right',
    'before_widget' => '<div class="ss-text-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Easy Install Text Left---*/
register_sidebar( array(
    'name'          => ('Easy Install Text Left'),
    'id'            => 'easy-install-text-left',
    'description'   => 'Easy Install Text Left',
    'before_widget' => '<div class="easy-install-text-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Easy Install Image Right---*/
register_sidebar( array(
    'name'          => ('Easy Install Image Right'),
    'id'            => 'easy-install-image-right',
    'description'   => 'Easy Install Image Right',
    'before_widget' => '<div class="easy-install-image-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Green Image left---*/
register_sidebar( array(
    'name'          => ('Green Image left'),
    'id'            => 'green-image-left',
    'description'   => 'Green Image left',
    'before_widget' => '<div class="green-image-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Green Text Right---*/
register_sidebar( array(
    'name'          => ('Green Text Right'),
    'id'            => 'green-text-right',
    'description'   => 'Green Text Right',
    'before_widget' => '<div class="green-text-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Popular Header widget---*/
register_sidebar( array(
    'name'          => ('Popular Murals'),
    'id'            => 'popular-murals-header',
    'description'   => 'Popular Murals Header',
    'before_widget' => '<div class="popular-murals-header">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Popular Murals Images---*/
register_sidebar( array(
    'name'          => ('Popular Murals Images'),
    'id'            => 'popular-murals-images',
    'description'   => 'Popular Murals Images',
    'before_widget' => '<div class="popular-murals-images">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Design Your Own Text Left---*/
register_sidebar( array(
    'name'          => ('Design Your Own Text Left'),
    'id'            => 'design-text-left',
    'description'   => 'Design Your Own Text Left',
    'before_widget' => '<div class="design-text-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Design Your Own Image Right---*/
register_sidebar( array(
    'name'          => ('Design Your Own Image Right'),
    'id'            => 'design-image-right',
    'description'   => 'Design Your Own Image Right',
    'before_widget' => '<div class="design-image-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Main Footer Navigation Left---*/
register_sidebar( array(
    'name'          => ('Main Footer Navigation Left'),
    'id'            => 'footer-nav-left',
    'description'   => 'Main Footer Navigation Left',
    'before_widget' => '<div class="footer-nav-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Customer Navigation Footer---*/
register_sidebar( array(
    'name'          => ('Customer Navigation Footer'),
    'id'            => 'footer-customer-navigation',
    'description'   => 'Customer Navigation Footer',
    'before_widget' => '<div class="footer-customer-navigation">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Simple Stencil Footer---*/
register_sidebar( array(
    'name'          => ('Simple Stencil Footer'),
    'id'            => 'footer-ss-link',
    'description'   => 'Simple Stencil Footer',
    'before_widget' => '<div class="footer-ss-link">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Footer Searchbar---*/
register_sidebar( array(
    'name'          => ('Footer Searchbar'),
    'id'            => 'footer-searchbar',
    'description'   => 'Footer Searchbar',
    'before_widget' => '<div class="footer-searchbar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Footer Social Media---*/
register_sidebar( array(
    'name'          => ('Footer Social Media'),
    'id'            => 'footer-social-media',
    'description'   => 'Footer Social Media',
    'before_widget' => '<div class="footer-social-media">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----Footer Newsletter Signup---*/
register_sidebar( array(
    'name'          => ('Footer Newsletter Signup'),
    'id'            => 'footer-newsletter',
    'description'   => 'Footer Newsletter Signup',
    'before_widget' => '<div class="footer-newsletter">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

}
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');

/*-------------- Add Menu --------------- */
function register_my_menus() {
  register_nav_menus(
    array(
      'menu-top' => __( 'Menu Top' ),
      'menu-footer' => __( 'Menu Footer' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );


/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );

/*--- Custom Page ---*/
function custom_web_resources() {

  $labels = array(
    /*--- Begin Labels Options ---*/
    'name'               => _x( 'Links', 'post type general name' ),
    'singular_name'      => _x( 'Link', 'post type singular name' ),
    'add_new'            => _x( 'Add New', weblink ),
    'add_new_item'       => __( 'Add Link' ),
    'edit_item'          => __( 'Edit Links' ),
    'new_item'           => __( 'New Link' ),
    'all_items'          => __( 'All Links' ),
    'view_item'          => __( 'View Links' ),
    'search_items'       => __( 'Search Links' ),
    'not_found'          => __( 'No links found' ),
    'not_found_in_trash' => __( 'No links found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Web Links'
  );

  $args = array(
    /*--- Begin Arguments Options ---*/
    'labels'        => $labels,
    'description'   => 'Place to put useful links to other web resources',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );

  register_post_type( 'resources', $args );
}

add_action( 'init', 'custom_web_resources' );

/*-------------------------------Contact Page --------------*/
register_sidebar( array(
    'name'          => ('Contact Widget'),
    'id'            => 'contact-widget',
    'description'   => 'Widget in contact Page',
    'before_widget' => '<div class="contact-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

register_sidebar( array(
    'name'          => ('Contact Widget Social'),
    'id'            => 'contact-widget-social',
    'description'   => 'Widget in contact Page for social media',
    'before_widget' => '<div class="contact-widget-social">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*-------------------------------Post Page --------------*/
register_sidebar( array(
    'name'          => ('Post Widget'),
    'id'            => 'post-widget',
    'description'   => 'Widget in Post Page',
    'before_widget' => '<div class="post-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*Add Header Image Logo*/
$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );

$args = array(
	'width'         => 500,
	'height'        => 60,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

?>
