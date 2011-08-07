</div>

</td>
<td valign=top class="sidebar">
<!-- google_ad_section_start(weight=ignore) -->

<b>Subscribe (<a href="http://feeds.feedburner.com/Betterexplained">RSS</a> or <a href="http://www.feedburner.com/fb/a/emailverifySubmit?feedId=624359">Email</a>)</b><br/>
<table width="100%">
<tr>
<td width="40"><a href="http://feeds.feedburner.com/Betterexplained" title="Subscribe to my feed" rel="alternate" type="application/rss+xml"><img src="http://www.feedburner.com/fb/images/pub/feed-icon32x32.png" alt="" style="border:0"/></a></td>
<td align="left">
<a href="http://feeds.feedburner.com/Betterexplained"><img src="http://feeds.feedburner.com/~fc/Betterexplained?bg=FF9900&amp;fg=444444&amp;anim=0" height="26" width="88" style="border:0" alt="" /></a>
</td>
</tr>

</table>

<form style="border:0px solid #ccc;padding:2px 0px;text-align:left;" action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com/fb/a/emailverifySubmit?feedId=624359', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">Get new articles by email:<br/><input type="text" style="width:122px" name="email" value="you@youremail.com"/><input type="hidden" value="http://feeds.feedburner.com/~e?ffid=624359" name="url"/><input type="hidden" value="BetterExplained" name="title"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Sign up" style="margin-left: 5px;" /></form>

<hr class="hr1" />

<div class="adsection">

<!--
<div class="advertise">
  <a href="/advertise">Advertise on BetterExplained</a>
</div>
-->

<div class="buysellads">

<!--
<script type="text/javascript">
Vertical1242628 = false;
ShowAdHereBanner1242628 = false;
RepeatAll1242628 = false;
NoFollowAll1242628 = false;
BannerStyles1242628 = new Array(
    "a{display:block; float: left; font-size:11px;color:#888;font-family:verdana,sans-serif;margin:0 4px 4px 0;text-align:center;text-decoration:none;overflow:hidden;}",
    "img{border:1px solid #ccc;clear:right;}",
    "a.adhere{color:#666;font-weight:bold;font-size:12px;border:1px solid #ccc;background:#e7e7e7;text-align:center;}",
    "a.adhere:hover{border:1px solid #999;background:#ddd;color:#333;}"
);
document.write(unescape("%3Cscript src='"+document.location.protocol+"//s3.buysellads.com/1242628/1242628.js?v="+Date.parse(new Date())+"' type='text/javascript'%3E%3C/script%3E"));
</script>
-->

<div id="myads" class="adblock">
  <a href="http://instacalc.com" title="InstaCalc Online Calculator" id="" class="adhere myad" target="_blank">
  <img src="http://betterexplained-cdn.s3.amazonaws.com/images/instacalc_ad.png">
  </a>

  <a href="http://completeandroidguide.com/" title="Complete Android Guide" id="" class="adhere myad" target="_blank">
  <img src="http://betterexplained-cdn.s3.amazonaws.com/images/completeandroid125x125.jpg">
  </a>
</div> <!-- end myads -->

<div style="clear: both;"></div>

<div style="float: left; width: 125px;">
  <a href="http://betterexplained.com/articles/math-betterexplained-ebook-available/" title="Math, BetterExplained ebook" class="adhere myad">
  <img src="http://betterexplained-cdn.s3.amazonaws.com/images/be-MAG003-125.png">
  </a>
</div>

<div style="float: left; width: 125px; padding-left: 10px;">
Get the <a href="http://betterexplained.com/articles/math-betterexplained-ebook-available/">Math, BetterExplained ebook</a> for clear insights into key math concepts. <br/><br/> <a href="http://betterexplained.com/articles/math-betterexplained-ebook-available/">Get the ebook</a>
</div>

<div style="clear: both;"></div>

</div> <!-- end buysellads -->

</div> <!-- end adsection -->

<hr class="hr1" />

<b>About (<a href="/contact/">Contact Kalid</a>)</b><br>
<?php bloginfo('description'); ?> <a href="/about/">Read more...</a>

<hr class="hr1" />

<form id="searchform" method="get" action="<?php bloginfo('home'); ?>/">
 <input type="text" name="s" id="search" size="15" onFocus='form.s.value=""' />
  <input type="submit" value="Search" />
</form> 

<hr class="hr1" />

<b>Popular</b> | <b><a href="/archives">All</a></b> | <b><a href="/random">Random Post</a></b>

<ul id="popular-comments">

<?php
$pc = new WP_Query('orderby=comment_count&posts_per_page=10'); ?>

<?php while ($pc->have_posts()) : $pc->the_post(); ?>
<li>
   <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
</li>

<?php endwhile; ?>
</ul>

<hr class="hr1" />

<b>Categories</b><br>
	<?php wp_list_cats('list=0'); ?><br>

<hr class="hr1" />

<!-- google_ad_section_end -->
</td>
</tr></table>

</td></tr></table>
<br>
<hr class="hr1" width="700" align="center" />
<center><table cellpadding=0 cellspacing=0 width=700><tr><td align=center>
<div class="metaBottom">
Like it? Try
<a href="/archives">All articles</a>, <a href="<?php bloginfo('rss2_url');?>">RSS Feed</a> or <a href="http://www.feedburner.com/fb/a/emailverifySubmit?feedId=624359">Email Subscription</a> | 
Idea or suggestion? <a href="/contact/">Contact me</a><br/>

copyright &copy; 2011 Kalid Azad <br/>
</div>
</td></tr></table></center>
<br>

<?php wp_footer(); ?>

<!-- Start of StatCounter Code -->
<script type="text/javascript" language="javascript">
var sc_project=2152111; 
var sc_invisible=1; 
var sc_partition=19; 
var sc_security="01b7b28e"; 
</script>

<script type="text/javascript" language="javascript" src="http://www.statcounter.com/counter/counter.js"></script><noscript><a href="http://www.statcounter.com/" target="_blank"><img  src="http://c20.statcounter.com/counter.php?sc_project=2152111&amp;java=0&amp;security=01b7b28e&amp;invisible=1" alt="web stats analysis" border="0"></a> </noscript>
<!-- End of StatCounter Code -->

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-360903-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
