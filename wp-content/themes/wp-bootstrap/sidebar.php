<div class="col-md-3 sidebar">
	    <div id = "company_info">
	    	<img src ="<?php the_field('logo', 'option'); ?>" alt = "<?php the_field('company_name', 'option'); ?>" title = "<?php the_field('company_name', 'option'); ?>" />
	     		<div id = "address"><?php if ( get_field('company_address', 'option') ) { ?><i class="fa fa-map-marker" aria-hidden="true"></i><p><?php the_field('company_address', 'option'); ?></p> <?php } ?></div>
	     		<div id = "phone"><?php if ( get_field('company_phone', 'option') ) { ?><i class="fa fa-phone" aria-hidden="true"></i><p><?php the_field('company_phone', 'option'); ?></p> <?php } ?></div>
	     		<div id = "email"><?php if ( get_field('company_email', 'option') ) { ?><i class="fa fa-envelope" aria-hidden="true"></i><p><?php the_field('company_email', 'option'); ?></p> <?php } ?></div>
	    </div><!-- #company_info -->
  <?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
    <h3>Sidebar</h3>
    <p>Please add widgets to the page sidebar to have them display here.</p>
  <?php endif; ?>
</div>