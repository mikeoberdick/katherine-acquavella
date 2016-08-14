<?php get_header(); ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-9">
          <div class = "page-header">
            <h1>Whoops...</h1>
          </div>
          <p>Looks like you've gone ahead and gotten yourself lost.  Check out some of the random posts below or maybe try searching for something?</p>
          <ul>
              <?php 
              $posts = get_posts('orderby=rand&numberposts=5'); 
                 foreach($posts as $post) { ?>
                      <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
              <?php } ?>
          </ul>

          <?php get_search_form(); ?>

        </div>

          <?php get_sidebar(); ?>

      </div>
        
<?php get_footer(); ?>