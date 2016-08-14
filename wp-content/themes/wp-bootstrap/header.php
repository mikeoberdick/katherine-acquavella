<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--<meta name="description" content=""> -->
    <!-- <meta name="author" content=""> -->
    <link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon.ico">

    <title><?php wp_title( '|', true, "right"); ?><?php bloginfo( 'name' ); ?></title>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

<?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php
              if ( get_field('logo', 'option') ) { ?>
                  <div id = "logo"><a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><img src = "<?php the_field('logo', 'option'); ?>" alt = "<?php bloginfo( 'name' ); ?> logo" title = "<?php bloginfo( 'name' ); ?>" /></a></div>
              <?php } else { ?>
                  <!-- If no image uploaded return the site name -->
                  <h1><a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php } ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        
          <?php
            $args = array(
                'menu'  =>  'header-navigation',
                'menu_class'  =>  'nav navbar-nav',
                'container'   =>  'false'
                );
            wp_nav_menu( $args);
            ?>

        </div><!--/.navbar-collapse -->
      </div>
    </nav>