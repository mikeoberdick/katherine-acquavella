<?php get_header(); ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-9">

          <div class = "page-header">
            <h1><?php wp_title( '' ); ?></h1>
          </div>
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class = "post">
            <h2><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><span id = "byline"><?php the_category(' '); ?></span>
  
            <?php the_excerpt(); ?>
            <hr>
          </article>

        <?php endwhile; else: ?>

        <div class = "page-header">
            <h1>Oh no!</h1>
        </div>
        <p>No content is found on this page!</p>

        <?php endif; ?>

        </div>
          <?php get_sidebar(); ?>
       </div>
      </div>
        
<?php get_footer(); ?>