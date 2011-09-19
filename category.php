<?php get_header(); ?>

	<div id="primary" class="single-post">
	<div class="inside">
		<div class="primary">
		
		
		<?php>
$posts =
get_posts('order=DESC&numberposts=50000&category=' . $cat);
?>
		<h2><a href="<?php bloginfo('url'); ?>/archives/">All Posts</a> > <?php echo single_cat_title(); ?> Category</h2>

		 <ul class="archive-items">
		 	<?php foreach ($posts as $post) :?>
			<li>
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
	
	<div class="secondary">
	<!--
		<h2>About the archives</h2>
		<div class="featured">
			<p>Welcome to the archives here at <?php bloginfo('name'); ?>. Have a look around.</p>
			
		</div>
		-->
	</div>
	<div class="clear"></div>
	</div>
	</div>

<?php get_footer(); ?>