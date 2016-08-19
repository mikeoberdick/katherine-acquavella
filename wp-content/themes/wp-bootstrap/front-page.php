<?php get_header(); ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-8">
          This is where the bulk of the page content will live.
        </div>
    	<div class = "col-md-4">
        	<div id="recentWork">
				<h2>Most Recent Work</h2>
				<?php
					$newQuery = new WP_Query( 'post_type=ka-work&posts_per_page=5' );
					// The Loop!
					if ($newQuery->have_posts()) { ?>
    				<ul class = "fa-ul">
    				<?php while ($newQuery->have_posts()) {
        			$newQuery->the_post();
        			?>
        			<li><i class="fa fa-li fa-chevron-right" aria-hidden="true"></i><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    				<?php } ?>
    				</ul>
    				<?php } ?>
			</div>
		</div>
    </div>
        
<?php get_footer(); ?>