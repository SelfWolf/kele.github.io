<?php get_header(); ?>
<!-- Wrapper begin -->
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
<!-- Header begin --> 
<?php wp_nav_menu( array('menu' => 'header_menu' )); ?>
<div class="header"> 
<div class="header-inner header_<?php  echo $style_item ;?>">
<a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
</div>
</div> 
<!-- Header end --> 
<div class="wrapper wrapper_<?php  echo $style_item ;?>">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- Content begin -->
<div class="content content_nng">
<!-- Girl begin -->
<div class="content_<?php  echo $style_item ;?> single_content_<?php  echo $style_item ;?>">
<div class="post <?php  echo $style_item ;?> post_<?php  echo $style_item ;?>" id="post-<?php the_ID(); ?>">
<div id="post_nav"><span><a href="<?php bloginfo('url') ?>/" >主页</a> ▷</span>
<?php the_category(',') ?> ▷ <span class="post_nav_title"><?php the_title() ?></span></a></div><h2><?php the_title(); ?></h2>
<div class="sub_desc"><?php the_author() ?> | 在 <?php the_time('F jS, Y') ?> 发表在 <?php the_category(',') ?> | 评论数: <?php comments_popup_link('0', '1', '%'); ?><span class="maodian"><a href="#maodian">我要评论</a></span></div>
<div class="post_content">
<?php the_content(''); ?>

<div id="info">
<p>分类:<b><?php the_category(', ') ?></b>  Tag: <b><?php the_tags('', ', ', ''); ?></b></p>
<p>本文地址：<?php the_permalink() ?></p>
<p>转载请注明来自：<span class="title"><?php bloginfo(’name’); ?> </span></p>

</div>
<div class="nearbypost">
  <div class="alignleft"><?php previous_post_link('♀上一篇：%link'); ?></div>
  <div class="alignright"><?php next_post_link('下一篇：%link♂'); ?></div>
 </div>
</div>
<div class="post_meta post_meta2">

</div>
</div>
<div class="clear"></div>
<div class="post_pro_next">
</div>
<!-- You can start editing here. -->
<?php comments_template(); ?>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
<!-- Girl end -->

</div>
<!-- Content end -->
<!-- Sidebar begin -->
<?php get_sidebar(); ?>
<!-- Sidebar end -->
</div></div>
<!-- Wrapper end -->
<!-- Footer begin -->
<?php get_footer(); ?>
<!-- Footer end -->
</body>
</html>