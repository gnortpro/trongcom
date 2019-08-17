<?php $img_array = array("https://blog.trongggg.com/wp-content/uploads/2019/01/black-evil-cat.png","https://blog.trongggg.com/wp-content/uploads/2019/01/batman-logo.png","https://blog.trongggg.com/wp-content/uploads/2019/01/halloween-pumpkin.png","https://blog.trongggg.com/wp-content/uploads/2019/01/fright-cat.png","https://blog.trongggg.com/wp-content/uploads/2019/01/flying-broom-and-witch.png","https://blog.trongggg.com/wp-content/uploads/2019/01/flying-bat.png","https://blog.trongggg.com/wp-content/uploads/2019/01/cute-owl.png","https://blog.trongggg.com/wp-content/uploads/2019/01/creepy-ghost.png", "https://blog.trongggg.com/wp-content/uploads/2019/01/butterfly.png"); 


?>
					<div class=" widget post-sidebar">
							<h3>Random posts</h3>
							<ul>
									<?php 
										$postquery = new WP_Query(array('posts_per_page' => 5, 'orderby' => 'rand'));
										if ($postquery->have_posts()) {
										while ($postquery->have_posts()) : $postquery->the_post();
										$do_not_duplicate = $post->ID;
									?>
									<li>
										<a href="<?php the_permalink(); ?>">
											<?php if ( has_post_thumbnail() ) {
														echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' =>'main-sidebar-img img-responsive img-circle') );
														} else { 
															$img_array_ran = array_rand($img_array); ?>
														<img src="<?php echo $img_array[$img_array_ran]; ?>" class="main-sidebar-img img-responsive img-circle" alt="<?php the_title(); ?>" />
														<?php } ?>
										</a>
										<h4>
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h4>
										<div class="meta">
											<span>Posted at: <?php echo get_the_date('d - m - Y'); ?></span>
										</div>
									</li>
									<?php endwhile; }  wp_reset_postdata(); ?>
							</ul>
					</div>
					<div class="widget">
						<h3>Most viewed</h3>
						<div class="content-mostv">
							<ul>
								<?php $i = 1; ?>
								<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=post&meta_key=views&orderby=meta_value_num'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<li>
										<span><?php echo $i; ?></span>
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<div class="clear"></div>
									</li>
									<?php $i++; ?>
								<?php endwhile; wp_reset_postdata(); ?>
							</ul>
						</div>
					</div>


					
