<?php get_header(); ?>		
	<section id="content" class="widecol alignleft">	
					 <?php while ( have_posts() ) : the_post(); ?>
					 		<div>
								<?php the_post_thumbnail( 'page-featured-image' ); ?>
							</div><!-- featured image -->
							
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>
								<header>
									<h1 class="text-shad-lt"><?php the_title(); ?></h1>
									<p class="meta">Posted <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate="pubdate"><?php the_time( 'M n' ); ?></time> &#149; <a href="<?php the_permalink(); ?>#comments" title="<?php the_title_attribute() ?> Comments"><?php comments_number( '0 comments', 'only 1 comment', '% comments' ); ?></a></p>
								</header>						
								<div class="content">
									<?php the_content(); ?>
								</div><!-- content -->
								<footer>
									<div class="tax clearfix">
										<div class="alignleft">
											<p>Filed Under: <?php the_category( ', ' ); ?></p>
										</div>
										<?php if( get_the_tags() ) { ?>
											<div class="alignright">
												<p><?php the_tags(); ?></p>
											</div>
										<?php } ?>
									</div>
								</footer>
								<nav id="pagi" class="clearfix">
									<ul>
										<?php previous_post_link( '<li>%link</li>', '&lt; Previous Post' ); ?>
										<?php next_post_link( '<li>%link</li>', 'Next Post &gt;' ); ?>
									</ul>
								</nav><!-- .pagination -->
							</article>
												
							<div class="author clearfix">
								<h3>Written by: <?php the_author_posts_link(); ?></h3>
								<?php echo get_avatar( get_the_author_meta( 'email' ), '150', 'Mystery Man', 'Avatar of '.get_the_author_meta( 'first_name' ).' '.get_the_author_meta( 'last_name' ) ); ?>
								<?php if( get_the_author_meta( 'description' ) ) { ?>
									<p><?php the_author_meta( 'description' ); ?></p>
								<?php } ?>
								<?php if( get_the_author_meta( 'user_url' ) ) { ?>
									<a href="<?php the_author_meta( 'user_url' ); ?>" title="<?php the_author_meta( 'first_name' ); ?>'s Website" target="_blank">
								<?php the_author_meta( 'user_url' ); ?></a> 
								<?php } ?>
							</div><!-- author -->
							<div class="comments">
						<?php comments_template( '', true ); ?>
							</div><!-- comments-->
					<?php endwhile; ?>
					
		</section>
			<?php get_sidebar(); ?>
<?php get_footer(); ?>
						