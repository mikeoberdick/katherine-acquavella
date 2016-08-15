<?php get_header(); ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-9">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
          <div class = "page-header">
            <h1><?php the_title(); ?></h1>
          </div>

          <?php the_content(); ?>

          <?php if ( is_page( 'contact' ) ) {
            get_template_part( 'template-parts/content', 'contact_page' );
          } ?>

        <?php endwhile; else: ?>

        <div class = "page-header">
            <h1>Oh no!</h1>
        </div>
        <p>No content is found on this page!</p>

        <?php endif; ?>

        </div>

          <?php get_sidebar(); ?>

      </div>
        
<?php get_footer(); ?>