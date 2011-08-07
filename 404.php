<?php header("HTTP/1.1 404 Not Found"); ?>
<?php get_header(); ?>

<h2>We couldn't find that page, but we'll try to help.</h2>

<?php
		$search_term = substr($_SERVER['REQUEST_URI'],1);
		$search_term = urldecode(stripslashes($search_term));
		$find = array ("'.html'", "'.+/'", "'[-/_]'") ;
		$replace = " " ;
		$search_term = trim(preg_replace ( $find , $replace , 
$search_term ));
		$search_term_q = preg_replace('/ /', '%20', 
$search_term);
		$search_url = 
'http://www.betterexplained.com/index.php?s=';
		$full_search_url = $search_url . urlencode($search_term);
?>
		<p>Suggested results for "<?php echo $search_term; 
?>":</p>
		  
<?php $my_query = new WP_Query("s=" . $search_term_q); ?>
		<ul>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<li><h2><a href="<?php the_permalink(); 
?>"><?php the_title(); ?></a></h2>
			<p><?php the_excerpt(); ?></p>
			<p><a href="<?php the_permalink(); ?>">Read 
more...</a></p>
			</li>
<?php endwhile; ?>
		</ul>

<?php if (! $my_query->have_posts() ){?>
Sorry, no matching results were found.
<?php } ?>

<script src="http://feeds.feedburner.com/~s/Betterexplained?i=<?php the_permalink() ?>" type="text/javascript" charset="utf-8"></script>

<?php get_footer(); ?>
