<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crypto_National_Trust
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css">
   
<!--.slick slide-->
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/slick-theme.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/slick.css">
<!--.slick Nav-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/slicknav.min.css">
 <!--.Animate Css-->  
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/animate.css">

<?php 

   	global $options;global $logo;global $copyrite;
		$options = get_option('cOptn');
		$logo = $options['logo']; 
        $size = 334;
		$options['logos'] = wp_get_attachment_image($logo, array($size, $size), false);
      
		$att_img = wp_get_attachment_image($logo, array($size, $size), false); 
		$logoSrc = wp_get_attachment_url($logo);
		$att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);
	
		
// sass Compiler	

require "scssphp/scss.inc.php";
use Leafo\ScssPhp\Compiler;
$formatterName = "Leafo\ScssPhp\Formatter\Compact";

$scss = new Compiler();
$scss->setFormatter($formatterName);
$scssIn = file_get_contents(__DIR__ . '/sass/style.scss');
$cssOut = $scss->compile($scssIn);
file_put_contents(__DIR__ . '/style.css', $cssOut);

wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'crypto-national-trust' ); ?></a>

	<header id="masthead" class="header">
	<div class="header__top">
		<div class="container">
			<div class="row">
			<section class="col-12">
				<p><?php echo toz_option('top tagline' , '41052885205'); ?></p>
			</section>
				
			</div><!--.row-->
		</div><!--.container-->
	</div><!--.header__top-->
	<div class="clear"></div>
	<div class="header_bottom">
		<div class="container">
			<div class="row">
			<div class="header_bottom--left col-md-4">
				<div class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php echo $options['logos'] ; ?></a>   
				</div>
			</div><!--.header_bottom--left-->
	 <div class="header_bottom--right col-lg-8">
<ul class="header_bottom--right--social">
<li><span><a href="tel:1-800-123-6889 ">1-800-123-6889 </a></span><br>
	<a href="mailto:info@domain.com">info@domain.com</a></li>
                                   <li><span>8th floor, 379 Hudson St</span><br>
                                   New York, NY 10018
                                   </li>
                                   <li><a class="theme_btn" href="#">Apply Now</a></li>
</ul>
     </div><!--.header_bottom--right-->
     </div><!--.row-->
	 </div><!--.container-->
     </div><!--.header_bottom-->
	<div class="clear"></div>
    <div class="header__menu col-md-12">
 <div class="container">
 	<div class="row">
        <nav class="mainmenu col-md-12 noPadd ">
   <?php $defaults = array( 'menu' => 'main-menu', 'container' => ' ', 'container_class' => '', 'container_id' => '', 'menu_class' => '', 'menu_id' => 'resp_menu', 'theme_location' => 'primary' );
wp_nav_menu( $defaults ); ?>
        </nav>
    </div><!--.row-->
 </div><!--.container-->
 </div><!--.header_menu-->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'crypto-national-trust' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
