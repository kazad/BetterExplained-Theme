<?php get_header(); ?>

<?php
$i=0;
if ($posts) {
foreach($posts as $post) { start_wp();
?>
<?php $i++; ?>
<div class="post">
<!-- step 1 -->
	 <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" style="text-decoration:none;" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a><?php edit_post_link('( Edit Post)'); ?></h3>	
		<?php the_content(); ?>

	<div align=center><?php wp_link_pages(); ?><?php comments_popup_link(__('0 Comments'), __('1 Comment'), __('% Comments'), 'comment', ''); ?></div>
	<br>
	
<?php if ($i < count($posts)) { ?>
	<hr class="hr1" />
<?php } ?>

<hr class="hr1" />

</div>
<?php } // closes printing entries with excluded cats ?>

<?php } else { ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php } ?>

<?php get_footer(); ?>
