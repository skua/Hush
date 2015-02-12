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
 <span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?> | </span>
 <span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
</div>

<?php get_footer(); ?>