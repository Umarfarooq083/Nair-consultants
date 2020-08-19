<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nair
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo get_bloginfo("template_url"); ?>/assets/https://gmpg.org/xfn/11">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
  
	<!-- Font Awesome -->

	<title> Nair </title>
	<?php wp_head(); ?>
</head>
<body 

<section>
  <div class="top-bar">
    <div class="container">
      <div class="col-md-12">
        <h4> <span> <i class="fas fa-phone"></i> </span> + 1 559 777 7117 </h4>
        <h5> <span> <i class="far fa-clock"></i> </span> 8:30Am - 5:30PM </h5>
      </div>
    </div>
  </div>
</section>


<section>
  <header class="header-bg">
    <div class="bg-blur"> </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-light nav-menu">
            <a class="navbar-brand logo" href="<?php echo site_url(); ?>"> <img src="<?php echo get_bloginfo("template_url"); ?>/assets/images/logo.png" alt="logo"> </a>
            <button class="navbar-toggler menu-btn" type="button" data-toggle="collapse"
            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto menu-right">
            <?php
                        wp_nav_menu(
                        array(
                           'theme_location' => 'header-menu',
                           'menu_class'  => 'navbar-nav ml-auto menu-right',
                           'container' => 'ul'
                        )
                        );
                        ?>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
</section>
