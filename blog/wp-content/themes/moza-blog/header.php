<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moza Blog
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	  <link rel="stylesheet" href="https://nectorflare.com/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	}
	else { do_action( 'wp_body_open' ); 
	}
?>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moza-blog' ); ?></a>

<nav class="navbar navbar-expand-lg bg-white shadow-sm py-2 fixed-top">
  <div class="container d-flex align-items-center justify-content-between">
    <a href="https://nectorflare.com/" class="d-flex align-items-center">
      <img src="https://nectorflare.com/images/logo.png" alt="Nector Flare Logo" style="height:50px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item ms-2"><a class="nav-link header" href="https://nectorflare.com/">Home</a></li>
        <li class="nav-item"><a class="nav-link header" href="https://nectorflare.com/about-us/">About</a></li>
        <li class="nav-item"><a class="nav-link header" href="https://nectorflare.com/services/">Services</a></li>
        <li class="nav-item"><a class="nav-link header" href="https://nectorflare.com/portfolio/">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link header" href="https://nectorflare.com/blog/">Blog</a></li>
        <li class="nav-item"><a class="nav-link header" href="https://nectorflare.com/contact-us/">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
