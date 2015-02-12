<?php
/**
 * Template Name: Skua Template
 * Description: A Page Template that showcases Sticky Posts, Asides, and Blog Posts
 *
 * The showcase template in Android consists of a featured posts section using sticky posts,
 * another recent posts area (with the latest post shown in full and the rest as a list)
 * and a left sidebar holding aside posts.
 *
 * We are creating two queries to fetch the proper posts and a custom widget for the sidebar.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Android 1.0
 */

// Enqueue showcase script for the slider

get_header(); ?>

<div class="col-md-12">
  <?php /* Start the Loop */ ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="post">
    <h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
   <!-- <div class="time"><P><?php the_date_xml(); ?></p></div> -->
    <div><?php the_content();?></div>
  </div>
  <?php endwhile; ?>
  
</div>

<?php get_footer(); ?>