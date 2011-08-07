<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
	<div id="primary" class="twocol-stories">
		<div class="inside">
			<div class="story first">
				<h2>Post Categories</h2>
				<ul class="dates"><?php list_cats(0, '', 'name', 'ASC', '/', true, 0, 1);    ?></ul>
			</div>
			<!--
			<div class="story">
				<h2>Monthly Archives</h2>
				<ul class="dates"><?php wp_get_archives('type=monthly'); ?></ul>
			</div>
				<div class="clear"></div>
				-->
 		</div>
	</div>
	<!-- [END] #primary -->
<h2>Posts By Date</h2>
<ul class="archive-items">
<?php>
$posts =
get_posts('order=DESC&numberposts=50000');
foreach ($posts as $post) :
?>
<li><span class="date"><?php the_time('M d Y') ?></span> <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>

<?php get_footer(); ?>