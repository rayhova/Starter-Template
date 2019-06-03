

<div class="container">
	<div class="row">
	<?php while ( have_posts() ) : the_post(); 
		?>
	
			<div class="col-md-4">
				<div class="blog-box">
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
					<h3 class="blog-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h3>
					<p class="author"><?php the_field( 'author' ); ?></p>
					<p><?php the_field( 'excerpt' ); ?></p>
					<div class="row">
						<div class="col-md-6 p-0">
							<p class="tags"><?php echo get_the_tag_list('<span>', ',','</span>');?></p>
		        		</div>
		        		<!-- <div class="col-md-6 p-0">
							<p class="date">
								<?php the_date(); ?>
							</p>
		        		</div> -->
		        	</div>
				</div>
			</div><!-- col-md-4 -->
		
		<?php endwhile; ?>	
	</div>
</div>

