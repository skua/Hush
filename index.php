<?php
/**
 *just for test by skua
 */

get_header(); ?>

<div id="double_col">
  <div id="center">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="center">
     <h2><?php the_title(); ?></h2>
      <article class="entry">
         <?php the_content(); ?>
      </article>
    </section>
 <?php endwhile; else: ?>

 <p>Sorry, no posts matched your criteria.</p>

       <?php endif; ?>
        

    </div>

    
    
  </div>

    <nav id="left-nav"> 
   
      <ul>
        <li><span class="html">&lt;</span><a id="html" title="样式诚可贵 脚本价更高 若为结构故 两者皆可抛">Html</a><span class="html">&gt;</span></li>
        <li><span class="css">&#123;</span><a id="css"  title="若把样式比西子，浓妆淡抹总相宜。 ">Css</a><span class="css">&#125;</span></li>
        <li><span class="js">&#40;</span><a id="js" title="脚本为之，则难者亦易矣，脚本不为，则易者亦难矣。">JavaScript</a><span class="js">&#41;</span></li>
      </ul>
    </nav>
<?php get_sidebar(); ?>
<?php get_footer(); ?>