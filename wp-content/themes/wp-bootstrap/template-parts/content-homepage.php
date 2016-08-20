    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div id = "hpContent">
          <div class = "col-xs-3 hidden-xs">
              <img class = "img-circle" src = "<?php the_field('headshot', 'option'); ?>">
          </div>
          <div class = "col-xs-12 col-sm-9">
            <div class = "page-header">
                <h1>Katherine Acquavella</h1>
            </div>
            <p><img id = "floatedHeadshot" class = "img-circle pull-left visible-xs-block" src = "<?php the_field('headshot', 'option'); ?>"><?php the_field('short_bio', 'option'); ?></p>
          </div>
        </div>
      </div>

      <div class = "row">
          
          <div class = "col-sm-12">
          
            <div class = "page-header">
                <h1>Recently Published</h1>
            </div>

          </div>
      </div>

        <div class = "row">
            <?php
                $args = array(
                'post_type' => 'ka-work',
                'posts_per_page' => '4'
                );
                
                $wp_query = new WP_Query( $args );
                
                // The Loop
                while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

              <div class = "col-sm-6 col-lg-3">
                <div class = "workImage"><a href = "<?php the_field('article_link'); ?>" target = "_blank"><img src = "<?php the_field('featured_image'); ?>" /></a></div>
                <div class = "workHeader"><a href = "<?php the_field('article_link'); ?>" target = "_blank"><h3><?php the_title(); ?></h3></a><span><?php the_field('article_date'); ?></span></div>
                <div class = "categoryList"><?php echo get_the_term_list( $post->ID, 'media-outlet', ' ' ); ?></div>
                <div class = "tagList"><?php echo get_the_term_list( $post->ID, 'sport', ' ' ); ?></div>
              </div>

            <?php endwhile; ?>
            </div>

      <div class="row">
          <div class = "col-sm-12">
              <div id = "hpCallout">
                  <h3>Let's Work Together!</h3>
                  <a href = "mailto:<?php the_field('company_email', 'option'); ?>" role = "button"><i class="fa fa-envelope" aria-hidden="true"></i>Contact Katherine</a>

              </div>
          </div>
      </div>
    </div>