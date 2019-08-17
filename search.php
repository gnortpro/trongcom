<?php get_header(); ?>
			<div id="content">
				<div class="container">
					<div class="break">
						<?php 

							if (function_exists('yoast_breadcrumb')) {
								yoast_breadcrumb('<p id="breadcrumbs">','</p>');
							}
						 ?>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="post-news">
								<h1 class="title-news">Search Result: </h1>
								<div class="content-news">
									<!-- Get post mặt định -->
									<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
										<div class="news-details">
											<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' =>'post-thumnail') ); ?></a>
											<div class="info-post">
												<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
												<div class="meta">
													<span>Posted at: <?php echo get_the_date('d - m - Y'); ?></span>
												</div>
												<?php the_excerpt(); ?>
											</div>
											<div class="clear"></div>
										</div>
									<?php endwhile; else : ?>
									<p>Không có</p>
									<?php endif; ?>
									<!-- Get post mặt định -->
								</div>
									<?php if(paginate_links()!='') {?>
									<div class="page-number">
										<?php
										global $wp_query;
										$big = 999999999;
										echo paginate_links( array(
											'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
											'format' => '?paged=%#%',
											'prev_text'    => __('«'),
											'next_text'    => __('»'),
											'current' => max( 1, get_query_var('paged') ),
											'total' => $wp_query->max_num_pages
											) );
									    ?>
									</div>
									<?php } ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="main-sidebar">
								<?php get_sidebar(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php get_footer(); ?>