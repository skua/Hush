<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Android 1.0
 */

get_header(); ?>

<div class="col-md-12">
  <?php /* Start the Loop */ ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="post">
    <h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
   <div class="time"><P><?php the_date_xml(); ?></p></div>
    <div><?php the_content();?></div>
  </div>
  <?php endwhile; ?>
  
</div>

<?php get_footer(); ?>