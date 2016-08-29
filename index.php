<?php get_header(); ?>	
	<div class="main">
		<div class="conatiner">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()): the_post(); ?>
					<article class="post">
						<h3>
							<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
							</a>
						</h3>
						<div class="meta">
							Created By <?php the_author(); ?> on <?php the_time('F j, Y g:i a'); ?>
						</div>
						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<?php echo wpautop('Sorry, No posts were found'); ?>
			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>