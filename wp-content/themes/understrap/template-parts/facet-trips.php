

<div class="container">
	<div class="row">
	<?php while ( have_posts() ) : the_post(); 
		$locations = get_the_terms( $post->ID, 'location' );
		$location = array_shift( $locations );
		$locationslug = $location->slug;
		$locationname = $location->name;
		$date = get_field( 'open_date' , false, false);
		$date = new DateTime($date); ?>
		<div class="col-md-4">
			<div class="trip-block">
				<div class="image">
					<?php if ( have_rows( 'slider' ) ) : ?>
						<?php while ( have_rows( 'slider' ) ) : the_row(); ?>
							<?php $image = get_sub_field( 'image' ); ?>
							<?php if ( $image ) { ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php } ?>
						<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
				</div>
				<div class="info-box">
					<div class="trip-info-wrapper">
						<div class="trip-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="trip-date">
							<?php the_field( 'open_date' ); ?> - <?php the_field( 'close_date' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php endwhile; ?>	
	</div>
</div>

