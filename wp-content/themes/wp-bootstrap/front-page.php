<?php get_header(); ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; endif; ?>

        <div class="row">
          <div class="col-md-4">
              Writing Call out/list of recent work, etc. HERE  
          </div>
          <div class="col-md-4">
              Broadcasting Call out/list of recent work, etc. HERE  
          </div>
          <div class="col-md-4">
              Social Media Call out/list of recent work, etc. HERE  
          </div>
        </div>

        </div>
      </div>
        
<?php get_footer(); ?>