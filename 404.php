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
<script type="text/javascript" src="http://vinsol.com/blog/jquery.js"></script>
<script type="text/javascript" src="http://vinsol.com/blog/jtweet.js"></script>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<style type="text/css">
html {
	margin-top: 0px !important;
}
</style>
</head>

<body class="error404">
<div id="wrapper404">
  <div id="header404" style="height:100px;">
    <h1 class="logo"><a href="<?php echo get_option('home'); ?>/"></a></h1>
  </div>
  
  <div class="message-section404">
    <div class="image-box"></div>
    <div class="text-section">
        <div class="heading">
            <span class="red-text">Sorry</span> but the page you are<br />
            <span class="indent-text">looking for <span class="red-text">cannot be found.</span></span>
        </div>
        <div class="message-text">Have a look through the links given below to find the page in<br />our site that suits your needs.</div>
    </div>
  </div>
  
  <div class="links-section404">
    <a href="/" class="home">Home</a>
    <a href="/blog" class="blog">Blog</a>
    <a href="/portfolio" class="portfolio">Portfolio</a>
    <a href="/careers" class="careers">Careers</a>
    <a href="/contact" class="contact">Contact</a>
  </div>
</div>
</body>
</html>