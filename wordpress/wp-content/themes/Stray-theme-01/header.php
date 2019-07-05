<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/plugin/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/plugin/slick/slick-theme.css"/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
<div class="pagee">
<div id="masthead">
<div id="branding">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/random/logonew.png"></a>
  <div id="site-title">
  <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
  <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
  </div>
<!--<div id="site-description"><?php bloginfo( 'description' ); ?></div>-->
</div>
<nav id="menu">
    <li id="closee"><div class="fa fa-times-circle" onclick="closeNav()"><span id="close-text"> CLOSE MENU</span></div></li>
<!--<li><div class="fa fa-search"></div><input type="text" id="mySearch"></li>-->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
<div id="searh-box-flexing">
<div class="fa fa-search"></div>
<div id="search"><?php get_search_form(); ?></div>
</div>

</nav>
<div id="burger" onclick="openNav()">☰</div>
</div>
</div>
</header>
<!--<div id="container">-->
