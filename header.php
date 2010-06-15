<?php
/**
 * @package WordPress
 * @subpackage Starkers
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
	</head>
	
	<body id='subpage'>
	  <div class='wrapper'>
	    <div id="top">
		    <div id="head">
    		  <h1 class="logo ie6fix"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
    		  <ul id="nav">
    				<li><a href="http://vinsol.com"><strong>Home</strong><span>Let's get started!</span></a></li>
    				<li><a href="http://www.vinsol.com/blog"><strong>Blog</strong><span>RoR hacks</span></a></li>
    				<li><a href="http://vinsol.com/portfolio"><strong>Portfolio</strong><span>Projects Done</span></a></li>
    				<li><a href="http://vinsol.com/team"><strong>Team</strong><span>Awesome Devs</span></a></li>
				    <li><a href="http://vinsol.com/contact"><strong>Contact</strong><span>Give us a shout</span></a></li>
			    </ul>
		    </div>	<!-- end #head -->
    		<div id="main">
    		 <div id ="sidebar">
    		   <div class="box box_small">
    		    <?php get_sidebar(); ?>
    		  </div>  
    		 </div>  
    		  <!-- <div id='sidebar'>
    		            <div class="box box_small">
    		              <#?php wp_list_categories('title_li=<h3>Blog Categories</h3>'); ?>
    		            </div>
    		          </div>   -->