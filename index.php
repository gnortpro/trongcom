<?php get_header(); ?>
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col col-md-1 col-lg-1 nopadding">
				<div class="menu-function">

						<?php $categories = get_categories( array(
						    'orderby' => 'name',
						    'order'   => 'ASC'
							) );
						foreach ($categories as $category) {
							if ( $category->term_id == 1 )
       						 continue;
							echo '<a href="#cate'.$category->term_id.'" class="active">
								<p class="title-icon">'.$category->name.'</p>
							</a>';
							
						}
	 					?>
					

					
				</div>
		
</div> 
<?php $img_array = array("https://trongggg.com/wp-content/uploads/2019/01/black-evil-cat.png","https://trongggg.com/wp-content/uploads/2019/01/batman-logo.png","https://trongggg.com/wp-content/uploads/2019/01/halloween-pumpkin.png","https://trongggg.com/wp-content/uploads/2019/01/fright-cat.png","https://trongggg.com/wp-content/uploads/2019/01/flying-broom-and-witch.png","https://trongggg.com/wp-content/uploads/2019/01/flying-bat.png","https://trongggg.com/wp-content/uploads/2019/01/cute-owl.png","https://trongggg.com/wp-content/uploads/2019/01/creepy-ghost.png", "https://trongggg.com/wp-content/uploads/2019/01/butterfly.png"); 


?>

				<div class="col col-md-7 col-lg-7">
					<div class="main-content">
						<?php get_template_part('feature-post'); ?>
					<div class="other-news">
						<h2 class="news-title">Other News</h2>
							<div class="row">
								<div class="content-news">
									<!-- Get post mặt định -->
										<?php if (have_posts()) : ?>
										<?php while (have_posts()) : the_post(); ?>
											<div class="col-md-12 index-news-details">
												<div class="row">
													<div class="col-md-3">
														<a href="<?php the_permalink(); ?>">
													

													<?php if ( has_post_thumbnail() ) {
														echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' =>'post-thumnail img-responsive') );
														} else { 
															$img_array_ran = array_rand($img_array); ?>
														<img src="<?php echo $img_array[$img_array_ran]; ?>" alt="<?php the_title(); ?>" />
														<?php } ?>
												</a>
													</div>
													<div class="col-md-9">
														<div class="info-post">
													<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
													<div class="meta">
														<span>Posted at: <?php echo get_the_date('d - m - Y'); ?></span>
													</div>
													
												</div>
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
					</div>
					

				</div> <!-- end #main-content -->
				<div class="col col-md-4 col-lg-4 ">
					<div class="main-sidebar">
						<?php get_sidebar(); ?>
					</div>
					
				</div> <!-- end #main-sidebar -->
			</div>
		</div>
	</div> <!-- end content -->

<?php get_footer(); ?>