<?php get_header(); ?>
<?php $this_post = false; ?>

<?php
$i=0;
if ($posts) {
foreach($posts as $post) { start_wp();
?>
<?php $i++; ?>
<div class="post">
<div id="breadcrumb">
<a href="<?php bloginfo('url'); ?>/archives/">All Posts</a> > <?php the_category(',') ?>
</div>
<div class="post-content">
	 <h1 id="post-<?php the_ID(); ?>" class="post-title"><a href="<?php the_permalink() ?>" style="text-decoration:none;" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a><?php edit_post_link(__('Edit This')); ?>
</h1>
		<?php the_content(); ?>
</div>

<div id="post-meta">

	<div align=center><?php wp_link_pages(); ?><?php comments_popup_link(__('0 Comments'), __('1 Comment'), __('% Comments'), 'comment', '' ); ?></div>
	<br>
	
<?php if ($i < count($posts)) { ?>
	<hr class="hr1" />
<?php } ?>

	<!--
	<?php trackback_rdf(); ?>
	-->

<script src="http://feeds.feedburner.com/~s/Betterexplained?i=<?php the_permalink() ?>" type="text/javascript" charset="utf-8"></script>

<?php 
  $this_post = $post;
  $footer_ad = get_post_meta($post->ID, "ad_footer", true);
  $footer_ad_url = get_post_meta($post->ID, "ad_footer_url", true);
  if ($footer_ad && $footer_ad_url){

?>

<hr class="hr1" />
<div class="sponsored_footer ">
<div class="meta">Sponsored by</div>
<a href="<?php echo $footer_ad_url ?>" rel="nofollow" onClick="javascript:urchinTracker('/ads/<?php echo $footer_ad_url ?>');"><img src="<?php echo $footer_ad ?>"></img></a>
</div>

<?php } ?>

<hr class="hr1" />

<iframe src="http://www.facebook.com/plugins/like.php?href=betterexplained.com&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action=like&amp;font&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>

	<div class="meta">Posted <?php the_time("F j, Y") ?>, 
<?php _e(" under "); ?> <?php the_category(',') ?><br>
<?php _e("Tags:"); ?> 
<?php if (function_exists('UTW_ShowTagsForCurrentPost')) UTW_ShowTagsForCurrentPost("commalist"); ?>
<br/>
Related Posts: 

<?php if (function_exists('related_posts')) related_posts(5, 10, '< li >', '< /li >',"","",false, false); ?>

<?php if (function_exists('sociable_html')) print sociable_html(); ?>

<div>
<a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>">
<img src="<?php bloginfo('stylesheet_directory');?>/images/rss.png" border="0" style="text-decoration:none"></img> RSS
</a> or
<a href="http://www.feedburner.com/fb/a/emailverifySubmit?feedId=624359">Email Subscription</a> | 

<?php if(function_exists('wp_print')) { print_link(); } ?>

</div>

</div>

<hr class="hr1" />

<style>
.adbox{
  xborder: 1px solid #ccc;
  padding: 5px;
  xfont-size: 1.2em;
  background: #f1f1f1;
  border: 2px solid #eaeaea;
}

.adbox img{
  border: 0px;
}
</style>
<div class="adbox">
<div style="float:left;">
<a href="http://betterexplained.com/articles/math-betterexplained-ebook-available/">
<img src="http://betterexplained.com/ebook/be-MAG003-125.png"></img>
</a>
</div>
<div style="float: left; width: 340px; height: 100%; padding-left: 20px;">
<h2>BetterExplained: Get the eBook</h2>
Like the site? A lot? Take it with you. Develop your math sense using insights, not memorization.

<div style="padding-top: 10px;">
<a href="http://betterexplained.com/articles/math-betterexplained-ebook-available/">
<img src="http://betterexplained.com/examples/ebook/get-the-ebook.png"></img>
</a>
</div>
</div>
<div style="clear: both;"></div>
<?php if (function_exists('bex_premium')) : ?>
	<?php echo bex_premium(); ?>
<?php endif; ?>
</div>

<hr class="hr1" />

<?php comments_template(); // Get wp-comments.php template ?>
</div>
<?php } // closes printing entries with excluded cats ?>

<?php } else { ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php } ?>

</div>

<?php get_footer(); ?>
