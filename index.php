<?php get_header(); ?>
<div class="container">
	<?php 
		$args = array('post_type' => 'recipe', 'posts_per_page' => 10);
		$loop = new WP_Query($args);
	if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?> 
		<div class="post-wrap">
			<h3 class="post-title"><?php the_title(); ?></h3>
			<h4 class="post-author">By <?php the_author(); ?></h4>
			<?php the_date(); ?>
			<div class="post-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
			<p><?php the_excerpt(); ?></p>
			<footer class="post_foot">
				<?php the_category(); ?>
			</footer>
		</div>
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched.' ); ?></p>
		<?php endif; ?>
	<?php get_sidebar('custom'); ?>
</div>
<?php get_footer(); ?>