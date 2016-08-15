<?php get_header(); ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-9">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
          <div class = "page-header">
            <h1><?php the_title(); ?></h1>
            <p id = "byline">By <?php the_author(); ?> on <?php echo the_time('l, F jS, Y'); ?><?php the_category(' '); ?></p>
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