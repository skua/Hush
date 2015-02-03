<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* For example, it puts together the home page when no home.php file exists.
*
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Twenty_Twelve
* @since Twenty Twelve 1.0
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