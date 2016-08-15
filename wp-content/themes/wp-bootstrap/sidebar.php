<div class="col-md-3 sidebar">
	    <div id = "company_info">
	    		<h3>Get In Touch</h3>
	     		<div id = "phone"><?php if ( get_field('company_phone', 'option') ) { ?><i class="fa fa-phone" aria-hidden="true"></i><p><?php the_field('company_phone', 'option'); ?></p> <?php } ?></div>
	     		<div id = "email"><?php if ( get_field('company_email', 'option') ) { ?><i class="fa fa-envelope" aria-hidden="true"></i><p><?php the_field('company_email', 'option'); ?></p> <?php } ?></div>
	    </div><!-- #company_info -->
  <?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
    <h3>Sidebar</h3>
    <p>Please add widgets to the page sidebar to have them display here.</p>
  <?php endif; ?>
</div>