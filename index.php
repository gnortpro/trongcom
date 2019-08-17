<?php get_header(); ?>
	<div class="content">
		<div class="container">
			<div class="row">
<!-- 				<div class="col-md-1">
	<div class="menu-function">
		<a href="#" class="active">
			<i class="ion-fireball"></i>
			<p class="title-icon">Nong</p>
		</a>
		<a href="#" class="active">
			<i class="ion-images"></i>
			<p class="title-icon">Nong</p>
		</a>
		<a href="#" class="active">
			<i class="ion-ios-pulse-strong"></i>
			<p class="title-icon">Nong</p>
		</a>
		<a href="#" class="active">
			<i class="ion-videocamera"></i>
			<p class="title-icon">Nong</p>
		</a>

		
	</div>
		
</div> end #menu-function -->
<?php $img_array = array("https://blog.trongggg.com/wp-content/uploads/2019/01/black-evil-cat.png","https://blog.trongggg.com/wp-content/uploads/2019/01/batman-logo.png","https://blog.trongggg.com/wp-content/uploads/2019/01/halloween-pumpkin.png","https://blog.trongggg.com/wp-content/uploads/2019/01/fright-cat.png","https://blog.trongggg.com/wp-content/uploads/2019/01/flying-broom-and-witch.png","https://blog.trongggg.com/wp-content/uploads/2019/01/flying-bat.png","https://blog.trongggg.com/wp-content/uploads/2019/01/cute-owl.png","https://blog.trongggg.com/wp-content/uploads/2019/01/creepy-ghost.png", "https://blog.trongggg.com/wp-content/uploads/2019/01/butterfly.png"); 


?>

				<div class="col-md-8 main-content">
					<?php get_template_part('feature-post'); ?>
					<div class="other-news">
						<h2 class="news-title">Other News</h2>
							<div class="row">
								<div class="content-news">
									<!-- Get post mặt định -->
										<?php if (have_posts()) : ?>
										<?php while (have_posts()) : the_post(); ?>
											<div class="col-sm-4 index-news-details">
												<a href="<?php the_permalink(); ?>">
													

													<?php if ( has_post_thumbnail() ) {
														echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' =>'post-thumnail img-responsive') );
														} else { 
															$img_array_ran = array_rand($img_array); ?>
														<img src="<?php echo $img_array[$img_array_ran]; ?>" alt="<?php the_title(); ?>" />
														<?php } ?>
												</a>
												<div class="info-post">
													<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
													<div class="meta">
														<span>Posted at: <?php echo get_the_date('d - m - Y'); ?></span>
													</div>
													
												</div>
												<div class="clear"></div>
											</div>
										<?php endwhile; else : ?>
										<p>Không có</p>
										<?php endif; ?>
									<!-- Get post mặt định -->
								</div>
							</div>
						

					</div> <!-- end other news -->
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

				</div> <!-- end #main-content -->
				<div class="col-md-4 main-sidebar">
					<?php get_sidebar(); ?>
				</div> <!-- end #main-sidebar -->
			</div>
		</div>
	</div> <!-- end content -->

<?php get_footer(); ?>