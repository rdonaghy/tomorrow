<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php if ( is_category() ) {
		echo single_cat_title(); echo ' | '; bloginfo( 'name' );
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title(''); echo ' Archive | '; bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
	} elseif ( is_home() || is_front_page() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} elseif ( is_single() ) {
		wp_title('');
	} else {
		echo wp_title(''); echo ' | '; bloginfo( 'name' );
	} ?></title>
	<meta name="description" content="<?php wp_title(''); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1"/><?php /* Add "maximum-scale=1" to fix the Mobile Safari auto-zoom bug on orientation changes, but keep in mind that it will disable user-zooming completely. Bad for accessibility. */ ?>
	<!-- <link rel="icon" href="<?php bloginfo('template_url'); ?>/whiteboard_favicon.ico" type="image/x-icon" /> -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<!-- <?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?> -->
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>
	<?php /* Remove the Less Framework CSS line to not include the CSS Reset, basic styles/positioning, and Less Framework itself */?>
	<!--  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/lessframework.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/theme.css" /> -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link href="http://www.northeastern.edu/css/html5styles.css" media="screen" rel="stylesheet" type="text/css"/>
	<link href="http://fast.fonts.com/cssapi/cac43e8c-6965-44df-b8ca-9784607a3b53.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/fancydropdown.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/styles.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/ie8-and-below.css" />
    <![endif]-->
    <link href="<?php bloginfo( 'template_url' ); ?>/css/jquery.jscrollpane.css" rel="stylesheet" />
    <script src="http://www.northeastern.edu/scripts/modernizr-1.7.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script><!-- later versions break divbox -->
	<script src="http://www.northeastern.edu/scripts/jquery-mousewheel/jquery.mousewheel.min.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
	<script src="http://www.northeastern.edu/scripts/flexiblenav.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/jquery.jscrollpane.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/scripts/resize-image.js" type="text/javascript"></script>
    <script src="http://www.northeastern.edu/scripts/divbox.js" type="text/javascript"></script>
	<link href="http://www.northeastern.edu/scripts/css/divbox.css" rel="stylesheet" type="text/css"/>
    <link href="<?php bloginfo( 'template_url' ); ?>/css/bgstretcher.css" rel="stylesheet" />
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/bgstretcher.js"></script>
    <script type="text/javascript">
	
	</script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/scrollpane-mobile-dropdowns.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/text-photos.js"></script>
    
</head>

<body <?php body_class(); ?>>
<div class="none">
	<p><a href="#content"><?php _e('Skip to Content'); ?></a></p><?php /* used for accessibility, particularly for screen reader applications */ ?>
</div><!--.none-->
<div id="holder">
	<header>
    	<div id="logo"><a href="http://www.northeastern.edu/"><img src="<?php bloginfo( 'template_url' );?>/images/logo-1.png" alt="Northeastern University" class="logo" /></a></div>
		<div class="nav-search">
        	<form method="get" id="searchform" action="http://www.northeastern.edu/news/" role="search">
            	<label for="s" class="assistive-text">Search</label>
	            <input type="text" class="field" name="s" id="s" placeholder="" />
    	        <input type="submit" class="submit" name="submit" id="searchsubmit" value="Search" />
        	</form>
	    </div>
		<div id="tagline">
			<a href="/tomorrow/"><img src="/tomorrow/wp-content/uploads/2013/03/mth-logo.png" alt="Making Tomorrow Happen" /></a>
		</div>
		<div id="nav-primary">
        	<nav>
            	<div class="menu-button"><img alt="Open Menu" src="http://www.northeastern.edu/images/menu_open.png"/></div>
	            <div class="container">
                	<?php wp_nav_menu( array('menu' => 'Top Navigation', 'items_wrap' => '<ul id="%1$s" class="%2$s" role="navigation">%3$s</ul>' )); ?>
                    <!-- if there is subnav, we will have to add some code to functions.php to change classes of nested lists as done in our office's WordPress themes. - RD -->
                    <!--<div class="menu">
        	            <ul class="usernav" role="navigation">
            	            <li><a href="/tomorrow/healthcare-delivery/">Healthcare Delivery</a></li>
                	        <li><a href="/tomorrow/curing-disease/">Curing Disease</a></li>
                    	    <li><a href="/tomorrow/infrastructure-resilience/">Infrastructure Reslience</a></li>
                        	<li><a href="/tomorrow/urban-sustainability/">Urban Sustainability</a></li>
	                        <li><a href="/tomorrow/secure-environments/">Secure Environments</a></li>
    	                </ul>
        	        </div>  end .menu -->
            	</div> <!-- end .container -->
	        </nav>
        </div> <!-- end #nav-primary -->
    </header>
<!-- <div class="container"> -->