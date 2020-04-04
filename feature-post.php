<?php $img_array = array("https://trongggg.com/wp-content/uploads/2019/01/black-evil-cat.png","https://trongggg.com/wp-content/uploads/2019/01/batman-logo.png","https://trongggg.com/wp-content/uploads/2019/01/halloween-pumpkin.png","https://trongggg.com/wp-content/uploads/2019/01/fright-cat.png","https://trongggg.com/wp-content/uploads/2019/01/flying-broom-and-witch.png","https://trongggg.com/wp-content/uploads/2019/01/flying-bat.png","https://trongggg.com/wp-content/uploads/2019/01/cute-owl.png","https://trongggg.com/wp-content/uploads/2019/01/creepy-ghost.png", "https://trongggg.com/wp-content/uploads/2019/01/butterfly.png"); 


?>
					<div class="feature-post">
						<div class="content-post">
							<h2 class="news-title">Feature News</h2>
							<?php 
									$args = array(
										'post_status' => 'publish', // Chỉ lấy những bài viết được publish
										'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
										'showposts' => 3, // số lượng bài viết
										'cat' => 3, // lấy bài viết trong chuyên mục có id là 1
									);
								?>
								<?php $getposts = new WP_query($args); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<div class="row">
										<div class="col-md-3">
											<a href="<?php the_permalink(); ?>">
										<?php if ( has_post_thumbnail() ) {
														echo get_the_post_thumbnail( get_the_id(), 'post-thumbnail', array( 'class' =>'post-thumnail img-responsive') );
														} else { 
															$img_array_ran = array_rand($img_array); ?>
														<img src="<?php echo $img_array[$img_array_ran]; ?>" alt="<?php the_title(); ?>" />
														<?php } ?>
									</a>
										</div>
										<div class="col-md-9">
											<h4>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h4>
									<div class="meta">
										<span>Posted: <?php echo get_the_date(); ?></span>
										<!-- <span>Lượt xem: 2344 Lượt</span> -->
									</div>
										</div>
									</div>
									
									
								
								<?php endwhile; wp_reset_postdata(); ?>

						</div> <!-- end content-post -->
					
					</div> <!-- end feature-post -->
					