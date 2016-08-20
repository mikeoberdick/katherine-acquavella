			<div id="footerCopyWrapper">
				<div class = "container">
					<footer id="colophon" class="site-footer" role="contentinfo">
						<div class="row">
						    <div id= "copyLeft" class = "col-md-8">
						        <span style = "font-weight:800;"><?php the_field('company_name', 'option'); ?></span>
						        <span id = "copyright">© <?php echo date('Y'); ?></span>
						    </div><!-- #copyLeft -->
						                
						    <div id = "social_icons" class = "col-md-4">
						        <ul>
								<?php if ( get_field('facebook', 'option') ) { ?><li><a href = "<?php the_field('facebook', 'option'); ?>" alt = "Facebook" title = "Facebook" target = "_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li><?php } ?>
								<?php if ( get_field('google_plus', 'option') ) { ?><li><a href = "<?php the_field('google_plus', 'option'); ?>" alt = "Google Plus" title = "Google Plus" target = "_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><?php } ?>
								<?php if ( get_field('instagram', 'option') ) { ?><li><a href = "<?php the_field('instagram', 'option'); ?>" alt = "Instagram" title = "Instagram" target = "_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php } ?>
								<?php if ( get_field('linked_in', 'option') ) { ?><li><a href = "<?php the_field('linked_in', 'option'); ?>" alt = "Linked In" title = "Linked In" target = "_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><?php } ?>
						        <?php if ( get_field('twitter', 'option') ) { ?><li><a href = "<?php the_field('twitter', 'option'); ?>" alt = "Twitter" title = "Twitter" target = "_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php } ?>
						        <?php if ( get_field('youtube', 'option') ) { ?><li><a href = "<?php the_field('youtube', 'option'); ?>" alt = "YouTube" title = "YouTube" target = "_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li><?php } ?>
						        </ul>
						    </div><!-- #social_icons -->
						</div><!-- .row -->
					</footer><!-- #colophon -->
				</div>
			</div>
    <?php wp_footer(); ?>
  </body>
</html>