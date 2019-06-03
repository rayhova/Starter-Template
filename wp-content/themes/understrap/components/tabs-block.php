<?php $tabs_title = get_sub_field( 'tabs_title' ); 
$tabs_id = preg_replace("/[^a-zA-Z]+/", "", $tabs_title);
$caption = get_sub_field( 'caption' );?>
<h2 class="center"><?php echo $tabs_title ?></h2>
<?if ($caption):?><p><?php echo $caption ?></p><?php else: ?><p></p><?php endif; ?>
<?php if( have_rows('tabs') ): ?>
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<?php $i=0; while ( have_rows('tabs') ) : the_row(); ?>
			<?php 
				$string = sanitize_title( get_sub_field('tab_title') ); 
			?>
			<li role="presentation" <?php if ($i==0) { ?>class="active"<?php } ?>  >
				<a href="#<?php echo $string ?>-<?php echo $tabs_id; ?>" aria-controls="<?php echo $string ?>" role="tab" data-toggle="tab" <?php if ($i==0) { ?>class="active show"<?php } ?>><?php the_sub_field('tab_title'); ?></a>
			</li>
		<?php $i++; endwhile; ?>
	</ul>
	<div class="tab-content">
		<?php $i=0; while ( have_rows('tabs') ) : the_row(); ?>
			<?php 
				$string = sanitize_title( get_sub_field('tab_title') ); 
			?>
		    <div role="tabpanel" class="tab-pane text-center fade <?php if ($i==0) { ?>in active show<?php } ?>" id="<?php echo $string; ?>-<?php echo $tabs_id; ?>">
		    	
		    	<?php the_sub_field('tab_text'); ?>

		    	<?php if ( have_rows( 'page_blocks' ) ) : ?>
		    		<div class="row">
					<?php while ( have_rows( 'page_blocks' ) ) : the_row(); 
						$type = get_sub_field( 'type' );
						$post_object = get_sub_field( 'page' );
						$image = get_sub_field( 'image' ); 
						$bottom_title = get_sub_field( 'bottom_title' );
						$bottom_description = get_sub_field( 'bottom_description' );
						$page_title = get_sub_field( 'page_title' );
						$outside_url = get_sub_field( 'outside_url' );
						$new_window = get_sub_field( 'open_in_new_window'); ?>
						<div class="col">
							<?php if($type == 'custom'): ?>
								<div class="page-block <?php if ( $image ) { ?>pgb-img<?php }?>">
								<?php if ( $image ) { ?>
										<a href="<?php echo $outside_url ?>" <?php if ( $new_window == 1 ) { ?>target="_blank"<?php } ?> ><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
									<?php } ?>
									<?php if ( $image ) { ?><div class="pb-title"><?php } ?>
									<div class="page-title"><a href="<?php echo $outside_url ?>" <?php if ( $new_window == 1 ) { ?>target="_blank"<?php } ?>><?php echo $page_title ?></a></div>
									<?php if ( $image ) { ?></div><?php } ?>
								</div>
							<?php else: ?>
								<?php $post = $post_object; ?>
								<div class="page-block <?php if ( $image ) { ?>pgb-img<?php }?>"> 
								<?php setup_postdata( $post ); ?>
									<?php if ( $image ) { ?>
										<a href="<?php the_permalink(); ?>" <?php if ( $new_window == 1 ) { ?>target="_blank"<?php } ?>><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
									<?php } ?>
									<?php if ( $image ) { ?><div class="pb-title"><?php } ?>
									<div class="page-title"><a href="<?php the_permalink(); ?>" <?php if ( $new_window == 1 ) { ?>target="_blank"<?php } ?>><?php the_title(); ?></a></div>
									<?php if ( $image ) { ?></div><?php } ?>
								<?php wp_reset_postdata(); ?>
								</div>
							<?php endif; ?>
								
								<h2><?php echo $bottom_title ?></h2>
								<p><?php echo $bottom_description ?></p>
						</div>
					<?php endwhile; ?>
					</div>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
		    </div>
		<?php $i++; endwhile; ?>
	</div>
<?php endif; ?>

<script type="text/javascript">
jQuery(function($) {
	$('ul#myTab li').click(function() {
  		$('ul#myTab li').removeClass('active');
  		$(this).addClass('active');
	});
});
</script>