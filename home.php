<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<!-- page content -->
<?php

$posts = query_posts('pagename=home'); // static home page
$i=0;
if ($posts) {
foreach($posts as $post) { start_wp();
?>
<?php $i++; ?>
<div class="post home2">
	 <h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
		<?php the_content(); ?>
<?php if ($i < count($posts)) { ?>
	<hr class="hr1" />
<?php } ?>

</div>

<h1>Recent Articles (<a href= "/archives">See all</a>)</h1>
<?php rewind_posts(); ?>
<?php
$i=0;
$posts = get_posts('order=DESC&numberposts=15');
foreach($posts as $post) { start_wp();
  $i++;
  $class="tmp";
  $secondary = "";
  if ($i > 1){$class = "indent"; $secondary = "post-secondary";} else {$class= "";}
?>

<div class="post <?php echo $class; ?> <?php echo $secondary; ?>">
	<h3 id="post-<?php the_ID(); ?>">
    <a href="<?php the_permalink() ?>" style="text-decoration:none;" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>
    <?php edit_post_link(__('Edit This')); ?>
  </h3>
  <span class="meta">Posted <?php the_time("m.d.Y") ?>, <?php _e(" under "); ?> <?php the_category(',') ?>
  </span>
  
  <?php if ($i == 1) { ?>
    <?php if (function_exists('the_excerpt_reloaded')) the_excerpt_reloaded(60, '<img><a><h1><h2><h3><b><i>', 'content', TRUE, 'Read more...'); ?>
  <?php } ?>
  <!-- <hr class="hr1"/> -->
</div>


<?php } ?>


<?php } // closes printing entries with excluded cats ?>

<?php } else { ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php } ?>

<?php get_footer(); ?>
