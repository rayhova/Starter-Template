<?php $post_type = get_sub_field( 'post_type' ); ?>
<?php $posts_per_page = get_sub_field( 'posts_per_page' ); ?>
<?php $order = get_sub_field( 'order' ); ?>
<?php $orderby = get_sub_field( 'orderby' ); ?>
<?php
			   // WP_Query arguments
				$args = array(
					'post_type'              => $post_type,
					'posts_per_page'         => $posts_per_page,
					'order'                  => $order,
					'orderby'                => $orderby,
				);

				// The Query
				$query = new WP_Query( $args );
				?>
				<?php if ( $query->have_posts() ) : ?>
					<h2 class="centered"><?php the_sub_field( 'title' ); ?></h2>
					<?php if($post_type == 'trips'):?><h2 class="row-title">Upcoming Trips</h2><?php endif; ?>
					<div class="row">
			
						<?php /* Start the Loop */ ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>

							<div class="col-md-4">
								<?php if($post_type == 'trips'): 
									$locations = get_the_terms( $post->ID, 'location' );
									$location = array_shift( $locations );
									$locationslug = $location->slug;
									$locationname = $location->name;
									$date = get_field( 'open_date' , false, false);
									$date = new DateTime($date); ?>
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
								<?php else: ?>
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
						        		<div class="col-md-6 p-0">
											<p class="date">
												<?php the_date(); ?>
											</p>
						        		</div>
						        	</div>
								</div>
								<?php endif; ?>
							</div><!-- col-md-4 -->
							

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>