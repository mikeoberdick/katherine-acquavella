<div class="col-md-3 sidebar">
	    <div id = "company_info">
	    		<h3>Get In Touch</h3>
	     		<div id = "phone"><?php if ( get_field('company_phone', 'option') ) { ?><i class="fa fa-phone" aria-hidden="true"></i><p><?php the_field('company_phone', 'option'); ?></p> <?php } ?></div>
	     		<div id = "email"><?php if ( get_field('company_email', 'option') ) { ?><a href = "<?php the_field('company_email', 'option'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php the_field('company_email', 'option'); ?></a> <?php } ?></div>
	    </div><!-- #company_info -->

	    <div id = "sidebarCategories">
	    	<h3>Stories by Media Outlet</h3>
				<?php
				$tags = get_terms( array('taxonomy' => 'media-outlet', 'exclude' => '20, 23') );
				if ($tags) {
				echo '<ul id = "sidebarCategoryList">';
				foreach ($tags as $tag) {
				echo '<li><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'</a></li>';
				} echo '</ul>';
				} ?>	    	
		</div>

	    <div id = "sidebarTags">
	    	<h3>Stories by Sport</h3>
				<?php
				$tags = get_terms( array('taxonomy' => 'sport') );
				if ($tags) {
				echo '<ul id = "sidebarTagList">';
				foreach ($tags as $tag) {
				echo '<li><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'</a></li>';
				} echo '</ul>';
				} ?>	    	
		</div>

  		<?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
    	<h3>Sidebar</h3>
    	<p>Please add widgets to the page sidebar to have them display here.</p>
  		<?php endif; ?>
</div>