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
				<div class="topHeader">
	    		  <h1 class="logo ie6fix"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			  
				  <div class="contact">
					  <div class="socialLinks">
						<a href='http://feeds2.feedburner.com/Vinsol' class='rss'>&nbsp;</a>
						<a href='https://www.facebook.com/thevinsol' class='fb'></a>
						<a href='http://www.twitter.com/the_vinsol' class='twitter'></a>
					  </div>
					  <div class="contactInfo">
						<span class='contactLabel'>Email us at: <a href="mailto:sales@vinsol.com" class='contactVal'>sales@vinsol.com</a></span>
						<span class='contactLabel'>Skype: <span class='contactVal'>Vinsol</span></span>
					  </div>
					</div>
					<div class='clear'></div>
				</div>
			
				<div class='bottomHeader'>
					<a href='http://vinsol.com/' class='home'>&nbsp;</a>
					<ul class='topNav'>
					  <li><a href='http://vinsol.com/about' class="first">About Us</a>
					  	<ul class="first">
							<li><a href="http://vinsol.com/methodology">Our Methodology</a></li>
							<li><a href="http://vinsol.com/team">Our Team</a></li>
						</ul>
					  </li>
					  <li><a href='http://vinsol.com/Our_Services'>Our Services</a>
					  	<ul>
							<li><a href="http://vinsol.com/ruby-on-rails-consulting">RoR Development &amp; Consulting</a></li>
							<li><a href="http://vinsol.com/iphone-development">iPhone Development &amp; Consulting</a></li>
							<li><a href="http://vinsol.com/android-development">Android Development &amp; Consulting</a></li>
						</ul>
					  </li>
					  <li><a href='http://vinsol.com/portfolio'>Portfolio</a></li>
					  <li><a href='http://vinsol.com/testimonials'>Testimonials</a></li>
					  <li><a href='http://vinsol.com/careers'>Careers</a></li>
					  <li><a href='http://www.vinsol.com/blog'>Blog</a></li>
					  <li><a href='http://vinsol.com/contact'>Contact Us</a></li>
					</ul>
			  </div>
		    </div>	<!-- end #head -->
			
			<div class="page-bg-top"></div>
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