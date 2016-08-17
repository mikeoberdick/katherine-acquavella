<?php get_header(); ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-9">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
          <div class = "page-header">
            <h1><?php the_title(); ?></h1>
            <div id = "categoryList"><?php the_category(' '); ?></div>
            <div id = "tagList"><?php the_tags(' '); ?></div>
          </div>

          <?php the_content(); ?>

        <?php endwhile; else: ?>

        <div class = "page-header">
            <h1>Oh no!</h1>
        </div>
        <p>No content is found on this page!</p>

        <?php endif; ?>

        </div>
          <?php get_sidebar( 'blog' ); ?>
       </div>
        
<?php get_footer(); ?>