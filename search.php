<?php include "header.php"; ?>

<div class="clearer">&nbsp;</div>
 <div class="post">
  <h2 class="searchresult">Search results for "<?php echo ""."$s"; ?>"</h2>
  <?php if (have_posts()) : ?>
    <div class="searchdetails">  </div>
     <?php while (have_posts()) : the_post(); ?>
     <h2 class="searchresult"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to article"><?php the_title(); ?></a></h2>
     <div class="searchinfo" style="display:none"><?php _e("("); ?><?php the_category(' and') ?> <?php _e(")"); ?></div>
     <div class="clearer" style="display:none">&nbsp;</div>
      <?php the_excerpt() ?>
       <div class="searchinfo" style="display:none"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">(Read full article...)</a></div>

  <?php endwhile; ?>
<?php else : ?>
 Sorry, no matching posts were found.
<?php endif; ?>
</div>

<div class="postnavigation">
 <div class="right"><?php posts_nav_link('','','previous posts &raquo;') ?></div>
 <div class="left"><?php posts_nav_link('','&laquo; newer posts ','') ?></div>
</div>

<div id="bottomcontent">&nbsp;</div>

<?php include "footer.php"; ?>