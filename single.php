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
							<div class="post-news post-news-single">
								<!-- Get post mặt định -->
								<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<?php setpostview(get_the_id()); ?>
									<h1 class="single-title"><?php the_title(); ?></h1>
									<div class="meta">
										<span>Posted at: <?php echo get_the_date('d - m - Y'); ?></span>
										<span>Author: <?php the_author( ); ?></span>
										<span>in <?php the_category(', '); ?></span>
										<span>Views: <?php echo getpostviews(get_the_id()); ?></span>
									</div>
									<article class="post-content">
										<?php the_content(); ?>
										<?php the_tags(); ?>
									</article>

									<div class="comment">
										<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" data-width="100%"></div>
									</div>
									<div class="related-posts">
										<?php
										    $categories = get_the_category($post->ID);
										    if ($categories) 
										    {
										        $category_ids = array();
										        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
										 
										        $args=array(
										        'category__in' => $category_ids,
										        'post__not_in' => array($post->ID),
										        'showposts'=>5, // Số bài viết bạn muốn hiển thị.
										        'caller_get_posts'=>1
										        );
										        $my_query = new wp_query($args);
										        if( $my_query->have_posts() ) 
										        {
										            echo '<h2>Related Posts</h2><ul style="list-style:none;" class="list-news">';
										            while ($my_query->have_posts())
										            {
										                $my_query->the_post();
										                ?>
										                <li>
										                	<div class="new-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(85, 75)); ?></a></div>
										                	<div class="item-list">
										                		<h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
										                		
										                	</div>
										                </li>
										                <?php
										            }
										            echo '</ul>';
										        }
										    }
										?>
									</div>
									
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