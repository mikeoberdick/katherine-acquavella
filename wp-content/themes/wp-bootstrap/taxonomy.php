<?php get_header(); ?>

    <div class="container">
      <div class="row">
        <div class = "col-sm-12">
          <div class = "page-header">
            <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo '<h1>' . $term->name . ' Archive</h1>'; ?>
          </div>
        </div>
      </div>
      <div class = "row">
                
              <?php
              // The Loop
              while ( have_posts() ) : the_post(); ?>
              <article class = "col-sm-6 col-lg-3 post">
                <div class = "workImage"><a href = "<?php the_field('article_link'); ?>" target = "_blank"><img src = "<?php the_field('featured_image'); ?>" /></a></div>
                <div class = "workHeader"><a href = "<?php the_field('article_link'); ?>" target = "_blank"><h3><?php the_title(); ?></h3></a><span><?php the_field('article_date'); ?></span></div>
                <div class = "categoryList"><?php echo get_the_term_list( $post->ID, 'media-outlet', ' ' ); ?></div>
                <div class = "tagList"><?php echo get_the_term_list( $post->ID, 'sport', ' ' ); ?></div>
              </article>

        <?php endwhile; ?>
      </div>
      <div id = "postNavigation" class = "clearfix">
            <span id = "newerPosts" class = "col-xs-6 text-left"><?php previous_posts_link( '<i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Previous Page' ); ?></span>
            <span id = "olderPosts" class = "col-xs-6 text-right"><?php next_posts_link( 'Next Page <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>' ); ?></span>
        </div>
       </div>
        
<?php get_footer(); ?>