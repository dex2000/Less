<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); ?> | <?php if( is_home() ) : echo bloginfo( 'description' ); endif; ?><?php wp_title( '', true ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<style type="text/css">@import url("<?php bloginfo('stylesheet_url'); ?>");</style>
<?php wp_head(); ?>
</head>
<body>
<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?> <span><?php echo get_bloginfo( 'description' ); ?></span></a></h1>
<ul id="sidebar"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : endif; ?></ul>
<?php if( is_home() || is_archive() || is_single) {if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h2>
<?php the_content(); ?>
<div class="metadata">
	<a href="<?php the_permalink() ?>">mehr ...</a> Geschrieben am <?php the_time('j. F Y'); ?>  in <?php echo get_the_category_list(); ?> - <?php comments_popup_link( __( 'Schreibe den ersten Kommentar', 'break' ), __( 'bisher 1 Kommentar', 'break' ), __( 'bisher % Kommentare', 'break' ) ); ?> <?php edit_post_link('Bearbeiten',' | ',''); ?></div>
	<?php endwhile; else : ?>
<div class="post error"><h2 class="404">Oha, da is irgendwas kaputt!</h2></div>
	<?php endif; }if( is_single() || is_page() ); if (comments_open() || '0' != get_comments_number() )comments_template( '', true );	?>
	<?php if (function_exists('wp_pagebar')) wp_pagebar(); ?>
<p>This theme based on theme <a href="http://lessmade.com/themes/less" rel="theme">LESS</a> by <a href="http://jarederickson.com">Jared Erickson</a>  * (index.php=3kB - functions.php=2kB - style.css=5kB - *.php=0kB)</p>
</body>
</html>
