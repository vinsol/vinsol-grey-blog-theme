
<?php
  /**
   * @package WordPress
   * @subpackage Starkers
   */

  get_header(); ?>

  <div id="content">
  <?php if (have_posts()) : ?>
    
  	<?php while (have_posts()) : the_post(); ?>
      <div class='entry blogentry'>
  		  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
  		    <div class="date">
    	      <span class='day'><?php the_time('d') ?></span>
    	      <span class='month'><?php the_time('M') ?></span>
    	      <span class='year'><?php the_time('Y') ?></span>
    	    </div><!-- end date -->
  	  		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  	  		<div class='post_data'>
  	    	  <span class='categories'> <?php the_category(', ') ?></span>
  	    		<span class='author'>posted by <?php the_author() ?></span>
  	    	</div><!--end post data-->
  	  		<?php the_content('Read more'); ?>
  	    </div>
      </div>  

  	<?php endwhile; ?>

  	<?php if (next_posts_link() || previous_posts_link()): ?>
  		<?php next_posts_link('&laquo; Older Entries') ?> | <?php previous_posts_link('Newer Entries &raquo;') ?>
  	<?php endif ?>

  <?php else : ?>

  	<h2>Not Found</h2>
  	<p>Sorry, but you are looking for something that isn't here.</p>
  	<?php get_search_form(); ?>

  <?php endif; ?>


  <?php get_footer(); ?>