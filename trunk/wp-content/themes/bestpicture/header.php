<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="header">
        <div class="line"></div>
        <div class="box_size">
            <div class="fl" style="width: 80%">
                <?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image logo" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
                <!--<img class="logo" src="images/logo.png" />-->
                <h3>A collection great pictures, pure High Definition HD. You can download cool desktop images for free</h3>
            </div>
            <table class="customer fr" style="width: 19%">
                <tr>
                    <td><img class="logo" src="<?php bloginfo('template_url'); ?>/images/sign-in.png" /></td>
                    <td><a class="sign_in" href="#">Sign in</a></td>
                    <td><img class="logo" src="<?php bloginfo('template_url'); ?>/images/sign-up.png" /></td>
                    <td><a href="#">Sign up</a></td>
                </tr>
            </table>
            <div class="clear"></div>
        </div>
    </div>
    <div class="box_menu">
        <div class="box_size">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'fl', 'menu_id' => 'menu' ) ); ?>
            <div class="search-layout fr">
                <form action="<?php bloginfo('home'); ?>" method="get" id="searchform"> 
                    <input type="text" size="10" value="Search" name="s" class="textfield" id="navsearch" onfocus="if(this.value=='Search') this.value='';" onblur="if(this.value=='') this.value='Search';"> 
                    <input class="btn_search" type="image" border="0" alt="" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" name="searchsubmit" id="navsearchbutton">
                </form>                
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="main">
        <div id="content" class="box_size">
