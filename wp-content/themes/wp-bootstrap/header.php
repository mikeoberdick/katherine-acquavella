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

    <div id = "hp_header">
        <a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><h1>Katherine</h1><h1>Acquavella</h1></a>
    </div>

    <nav>
      <div class="container">
        <div class="navbar-header">
          <button type="button" id = "navBtn" class="visible-xs-block collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <div>
                Page Menu <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
          </button>
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