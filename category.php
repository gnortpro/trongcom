<?php get_header(); ?>

	<div class="content">
		<div class="container">
		<?php 

			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p id="breadcrumbs">','</p>');
			}
		?>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-1">
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
						
				</div> <!-- end #menu-function -->
				<div class="col-md-7 main-content">
					<div class="other-news">
						<h1 class="category-title">Category: <?php single_cat_title(); ?></h1>
							<div class="content-news">
								<!-- Get post mặt định -->
									<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
										<div class="news-details">
											<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' =>'post-thumnail img-responsive') ); ?></a>
											<div class="info-post">
												<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
												<div class="meta">
													<span>Posted at: <?php echo get_the_date('d - m - Y'); ?></span>
												</div>
											
											</div>
											<div class="clear"></div>
										</div>
									<?php endwhile; else : ?>
									<p>This category is updating...</p>
									<?php endif; ?>
								<!-- Get post mặt định -->
							</div>
						

					</div> <!-- end other news -->

				</div> <!-- end #main-content -->
				<div class="col-md-4 main-sidebar">
					<?php get_sidebar(); ?>
						
					
				</div> <!-- end #main-sidebar -->
			</div>
		</div>
	</div> <!-- end content -->

<?php get_footer(); ?>