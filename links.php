<?php
/*
Template Name: Links
*/
?>
<?php get_header(); ?>
<body>
<?php if (is_page())  { 
$style_item = 'page'; 
} elseif (is_single()) { 
if ($post->post_author == '1') { 
$style_item = 'boy'; 
} 
elseif ($post->post_author == '2') { 
$style_item = 'girl'; 
} 
} else { 
$style_item = 'normal'; 
} ?>	
<div class="header">
<div class="header-inner header_<?php  echo $style_item ;?>">
<a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
</div>
</div>
<div class="wrapper wrapper_<?php echo $style_item ;?>">
<div class="content_boy single_content_boy">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post boy post_boy" id="post-<?php the_ID(); ?>">
<h2><?php the_title(); ?></h2><div id="post_nav">位置：<span><a href="<?php bloginfo('url') ?>/" >主页</a> ▷</span>
 <span class="post_nav_title"><?php the_title() ?></span></a></div>
<div class="post_content">
<div class="linkpage">
<ul>
<?php wp_list_bookmarks('categorize=1&
category_orderby=id&before=<li>&after=</li>&show_images=0&
show_description=1&orderby=name&title_before=<h3>&title_after=</h3>'); ?>
</ul>
</div>

<?php wp_link_pages(array('before' =>'<p><strong>Pages:</strong>', 'after' =>'</p>', 'next_or_number' =>'number')); ?>
</div>
</div>
<div class="clear"></div>

<?php endwhile; else: ?>
<p><?php _e('��Ǹ��û�з��������¡�'); ?></p>
<?php endif; ?>
<!-- Girl end -->
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
</body>
</html>
