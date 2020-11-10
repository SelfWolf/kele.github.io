<div class="sidebar">
<ul>
<div class="bloginfo">
<?php 
if (is_page())  { 
bloginfo ('description');}
elseif (is_single()) { 
the_author_description();
}
else { 
bloginfo ('description');
} ?>
  <h4 class="h4_title">大手牵小手</h4>
  <h4 class="h4_title">一起走到白发苍苍的时候...</h4>
  <embed src="<?php bloginfo('template_url'); ?>/images/countdown.swf" flashvars="yy=2008&mm=07&dd=30&hh=0&titler=" width="180" height="180" wmode="transparent"></embed>
  <li>
    <h2>音乐分享</h2>
    <ul>
      <embed src="http://ons.me/wp-content/uploads/2010/05/music_player.swf" flashvars="mp3=http://haipia.com/wp-content/uploads/2010/09/baobei.mp3&autoplay=0" height="20" width="160" wmode="transparent" type="application/x-shockwave-flash" />
    </ul>
  </li>
  <li>
    <h2>页 面</h2>
    <ul>
      <?php  wp_list_pages('depth=1&title_li=0&sort_column=menu_order&sort_order=ASC');?>
    </ul>
  </li>
  <li>
    <h2>日志分类</h2>
    <ul>
      <?php wp_list_categories('show_count=1&title_li=0'); ?>
    </ul>
  </li>
  
<!-- Search Begin -->
<form name="form" id="searchform" action="<?php bloginfo( 'url' ); ?>/" role="search" method="get">
<input type="text" value="" name="s" id="s"  class="searchInput"/>
<input class="searchBtn" type="submit" id="searchsubmit" value="搜 索"  />
</form>
<!-- Search End -->
</div>
<div class="clear"></div>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) ?>
</ul>
</div>