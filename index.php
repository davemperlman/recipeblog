<?php get_header(); ?>
<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
		<div class="post-wrap">
			<h3 class="post-title"><?php the_title(); ?></h3>
			<h4 class="post-author">By <?php the_author(); ?></h4>
			<?php the_date(); ?>
			<p class="post-content"><a href="<?php the_permalink(); ?>"><?php the_content(); ?></a></p>
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