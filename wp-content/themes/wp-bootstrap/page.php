<?php get_header();

if( is_page( 'contact' ) ) {
      get_template_part( 'template-parts/content', 'contact' );
    }

elseif( is_page( 'writing' ) ) {
    get_template_part( 'template-parts/content', 'writing' );
  }

elseif( is_front_page() ) {
    get_template_part( 'template-parts/content', 'homepage' );
  }

else {
   get_template_part( 'template-parts/content', 'page' );
  }
      
get_footer(); ?>