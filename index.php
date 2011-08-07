<?php get_header(); ?>
<h1>Latest Articles (<a href="/archives">View All</a>)</h1>
<?php
$i=0;
if ($posts) {
foreach($posts as $post) { start_wp();
?>
<?php $i++; ?>
<div class="post">
	 <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" style="text-decoration:none;" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a><?php edit_post_link(__('Edit This')); ?>
</h3>
<div>
<span class="meta">Posted <?php the_time("m.d.Y") ?>, 
<?php _e(" under "); ?> <?php the_category(',') ?></span>
</div>

	<?php /* the_excerpt('Read more...'); */ ?> 
	<!--
		<?php /*the_content(); */ ?>
		-->

<?php if ($i == 1) { ?>
	<?php if (function_exists('the_excerpt_reloaded')) the_excerpt_reloaded(60, '<img><a><h1><h2><h3><b><i>', 'content', TRUE, 'Read more...'); ?>
<?php } ?>

	<?php if ($i < count($posts)) { ?>
	<!-- <hr class="hr1" /> -->
<?php } ?>

<hr class="hr1" />
	<div class="meta">
</div>
<?php } // closes printing entries with excluded cats ?>

<h1>Crowd Favorites</h1>

<h2>Math & Numbers</h2>
<ul>
<li>Mental math shortcuts, adding 1-100</li>
<li>Understanding exponents and the natural log</li>
<li>Div, Curl, Flux, Gradient and other Vector Calculus topics</li>
</ul>

<h2>Programming & Web Development</h2>
<ul>
<li>Site speedups with HTTP caching, gzip compression</li>
<li>Understanding Rails, Web debugging, and Javascrtipt</li>
<li>Swap bytes with XOR, byte order, unicode</li>
</ul>

<h2>Business, Writing & Communication</h2>

<div class="navigation bottom">
<?php next_posts_link('< Previous Entries') ?> <?php previous_posts_link('Next Entries >') ?>
</div>

<?php } else { ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php } ?>

<?php get_footer(); ?>
