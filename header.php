<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="320">
	<link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>

	<!--Google-->
	<!-- Global site tag (gtag.js) - Google Analytics 12reps -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130504400-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-130504400-1');
	</script>
	<!--/Google-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="container-outer">
		
		<nav id="mobile-nav">
			<?php
				wp_nav_menu( array(
					'menu' => 'main-nav',
					'theme_location' => 'main-nav',
					'menu_id'        => 'main-nav',
				) );
			?>
		</nav>

		<div class="main-nav sticky-nav">
			<div id="burger"><span></span></div>
	    	<div class="sub">
	    		<a href="/">
		    		<figure>
		    			<!-- <a href="http://12reps.co.uk/"><img src="<?php //echo get_template_directory_uri(); ?>/images/logo-white-12reps.png" alt="12reps" /></a> -->
		    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0" y="0" viewBox="0 0 329.3 332.7" enable-background="new 0 0 329.3 332.7" xml:space="preserve">
		    			  <path fill="none" d="M62.3 16.6L16.6 63.2v70.4h17.1v182.9h278.5v-82.1l-18.8-17.1h-50.8l69.6-69.6V61.9l-46.1-45.3H62.3zM98.1 301.2H49.9V116.7H33.3V71.9l38-38.8h59.3l-30.3 30.1v84.1h82.7l-84.7 85.4L98.1 301.2zM296 137.2l-96.5 96.9h84.8l11.6 11.2 0.1 55.8H111.6v-61.9l17.1-17.2L230 121V99.3h-47l0.4 34.1h-71.8V71.5l17.1-16.7 22.2-21.7h106.7L296 71.5V137.2z"/>
		    			  <polygon id="_x31_" fill="#FFFFFF" points="100.3 147.3 100.3 63.2 130.6 33.1 71.3 33.1 33.3 71.9 33.3 116.7 49.9 116.7 49.9 301.2 98.1 301.2 98.3 232.7 183.1 147.3 "/>
		    			  <path id="_x32_" fill="#FFFFFF" d="M150.9 33.1l-22.2 21.7 -17.1 16.7v61.9h71.8l-0.4-34.1h47V121L128.7 222.1l-17.1 17.2v61.9H296l-0.1-55.8 -11.6-11.2h-84.8l96.5-96.9V71.5l-38.4-38.4H150.9zM158.1 265.3l-5.3 5.2 5.3 5.1v16.8h-11.9v-11l-5.7-6v17h-11.9v-47.1h22.7l6.7 6.6V265.3zM254 277.8h11.7v3h5.9v-5.9h-10.9l-6.7-6.6v-16.2l6.7-6.6h15.8l6.8 6.6v8.1h-11.8v-2.9h-5.8v5.8h10.9l6.7 6.7v16.1l-6.7 6.6h-15.9l-6.7-6.6V277.8zM214.2 245.5H237l6.7 6.7v16l-7.2 6.6H226v17.7h-11.8V245.5zM200 245.5v14.7h-14.7v2.9h11.8v11.8h-11.8v2.9H200v14.8h-26.5v-47.1H200z"/>
		    			  <rect id="dot_1_" x="140.5" y="257.2" fill="#FFFFFF" width="5.7" height="5.9"/>
		    			  <rect id="dot" x="226" y="257.3" fill="#FFFFFF" width="5.8" height="5.8"/>
		    			  <path id="Outline" class="svg-outline-fill" fill="#E7404A" d="M329.3 54.6L274.3 0H54.2L0 55.1v95.6h16.2v182h313.1V227.2l-29.7-26.6h-16.8l46.5-46.1V54.6zM312.3 147.7l-69.6 69.6h50.8l18.8 17.1v82.1H33.7V133.6H16.6V63.2l45.7-46.5h203.8l46.1 45.3V147.7z"/>
		    			</svg>
		    		</figure>
	    		</a>
	    	</div>
	    
	        <?php
				wp_nav_menu( array(
					'menu' => 'main-nav',
					'theme_location' => 'main-nav',
					'menu_id'        => 'main-nav',
				) );
			?>
		</div>

		<header class="banner reps-banner">
			
			<a href="/" class="logo-12reps" id="logo-12reps" title="12Reps Logo"></a>
			<div class="blue-overlay">
				<div class="container-header">

						<!-- ADVANCED CUSTOM FIELDS  -->
						<?php
						// check if the flexible content field has rows of data
						if( have_rows('content') ):
							// loop through the rows of data
							while ( have_rows('content') ) : the_row();

								if( get_row_layout() == 'hero_block' ):
									get_template_part( 'partials/acf','hero_block');
								elseif( get_row_layout() == 'text_block' ):
									get_template_part( 'partials/acf','text_block');
								endif;
							endwhile;
						else :
							// no layouts found
						endif;
						?>

				       
			        
		        </div>	        
		    </div>
		    <div class="hero-image" id="hero-image"></div>
	    </header>

	    
    </div>
	<div class="container-outer aos-all" id="transcroller-body">

			<div id="content" class="site-content">
