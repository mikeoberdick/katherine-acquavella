<?php get_header(); ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <div class = "page-header">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class = "row">
            <div id = "contact" class = "col-md-4">
              <div><img src = "<?php the_field('contact_photo'); ?>" alt = "Katherine Acquavella" title = "Katherine Acquavella"/></div>
              <p><a href = "mailto:<?php the_field('company_email', 'option'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i>katherineacquavella@gmail.com</p>
              <div id = "social_icons">
                    <ul>
                <?php if ( get_field('facebook', 'option') ) { ?><li><a href = "<?php the_field('facebook', 'option'); ?>" alt = "Facebook" title = "Facebook" target = "_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li><?php } ?>
                <?php if ( get_field('google_plus', 'option') ) { ?><li><a href = "<?php the_field('google_plus', 'option'); ?>" alt = "Google Plus" title = "Google Plus" target = "_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><?php } ?>
                <?php if ( get_field('instagram', 'option') ) { ?><li><a href = "<?php the_field('instagram', 'option'); ?>" alt = "Instagram" title = "Instagram" target = "_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php } ?>
                <?php if ( get_field('linked_in', 'option') ) { ?><li><a href = "<?php the_field('linked_in', 'option'); ?>" alt = "Linked In" title = "Linked In" target = "_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><?php } ?>
                    <?php if ( get_field('twitter', 'option') ) { ?><li><a href = "<?php the_field('twitter', 'option'); ?>" alt = "Twitter" title = "Twitter" target = "_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php } ?>
                    <?php if ( get_field('youtube', 'option') ) { ?><li><a href = "<?php the_field('youtube', 'option'); ?>" alt = "YouTube" title = "YouTube" target = "_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li><?php } ?>
                    </ul>
                </div><!-- #social_icons -->
            </div>
            <div class = "col-md-8">
              <h2 class = "visible-sm-block">Let's Work Together</h2>
               <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
            </div>
          </div>
        </div>
      </div>
        
<?php get_footer(); ?>