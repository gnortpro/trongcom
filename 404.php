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
						<div class="col-xs-12 col-sm-12 col-md-9">
							<div class="post-news post-news-single">
									<h1 class="single-title">Page not found!</h1>
									<article class="post-content">
										<p>Page not found!</p>
										<a href="<?php bloginfo('url'); ?>">Back to Home</a>
									</article>
									
								
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3">
							<div class="sidebar">
								<?php get_sidebar(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php get_footer(); ?>
