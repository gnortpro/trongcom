<?php get_header(); ?>
			<div id="content">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="post-news post-news-single">
								<!-- Get post mặt định -->
								<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<?php setpostview(get_the_id()); ?>
									<h1 class="single-title"><?php the_title(); ?></h1>
									<article class="post-content">
										<?php the_content(); ?>
										<?php the_tags(); ?>
									</article>
									
								<?php endwhile; else : ?>
								<p>Không có</p>
								<?php endif; ?>
								<!-- Get post mặt định -->
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
