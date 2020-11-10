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
<!-- Header begin -->
<?php wp_nav_menu( array('menu' => 'header_menu' )); ?>
<div class="header">
<div class="header-inner header_<?php  echo $style_item ;?>">
<a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
</div><div id="talk"><div id="left_boy" ></div><div id="right_girl" ><div id="dh"></div><div id="xy"></div></div></div>
</div>
<!-- Header end -->
<div class="clear"></div>
<!-- Wrapper begin -->
<div class="wrapper">
<!-- Content begin -->
<div class="content">
<!-- Boy begin -->
<div class="content_boy">
<?php  $limit = get_option('posts_per_page'); 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
query_posts('author=1' . '&paged=' . $paged);    ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post boy" id="post-<?php the_ID(); ?>">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<div class="sub_desc"><?php the_author() ?> | 发表于: <?php the_time('F jS, Y') ?> | 分类: <?php the_category(',') ?></div>
<div class="post_content"><?php  if (is_single() or is_page())  {the_content();}  else  {the_excerpt();}  ?></div>
<div class="post_meta">
<div class="cmtballoon-blue"><?php comments_popup_link('0', '1', '%'); ?></div>
<div class="cmt-tag">枚评论</div>
<div class="cmt-tag"><p>Tag: <?php the_tags('', ', ', ''); ?></p></div>
<div class="readmore"><a title="阅读全文" href="<?php the_permalink() ?>" rel="bookmark"><strong>阅读全文&raquo;</strong></a></div>
</div>
<div class="hori-line-boy"></div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<div class="clear"></div>
<!-- Page navi begin -->
<div class="pageNavi">
<div class="alignleft"><?php previous_posts_link('&laquo; 看看最新的') ?></div>
<div class="alignright"><?php next_posts_link('翻翻以前的 &raquo;') ?></div>
</div>
<!-- Page navi end -->
<div style=”clear”></div>
</div>
<?php else : ?>
<div class="post girl" id="Not-Found">
<h2 class="center">Sorry,</h2>
<p class="center">男主人已经没有文章了, 只能翻到这里了, 请注意查看女主人的文章, 也许还可以继续翻页哦~~  ^_^</p>
</div>
<div class="clear"></div>
<!-- Page navi begin -->
<div class="pageNavi2">
<div class="alignleft"><?php previous_posts_link('&laquo; 看看最新的') ?></div>
<div class="alignright"><?php next_posts_link('翻翻以前的 &raquo;') ?></div>
</div>
<!-- Page navi end -->
<div style=”clear”></div>
</div>
<?php endif; ?>
<!-- Boy end -->
<!-- Sidebar begin --> 
<?php get_sidebar();?>
<!-- Sidebar end --> 
<!-- Girl begin -->
<div class="content_girl">
<?php  $limit = get_option('posts_per_page'); 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
query_posts('author=2' . '&paged=' . $paged);    ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post girl" id="post-<?php the_ID(); ?>">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<div class="sub_desc"><?php the_author() ?> | 发表于: <?php the_time('F jS, Y') ?> | 分类: <?php the_category(',') ?></div>
<div class="post_content"><?php  if (is_single() or is_page())  {the_content();}  else  {the_excerpt();}  ?></div>
<div class="post_meta">
<div class="cmtballoon-pink"><?php comments_popup_link('0', '1', '%'); ?></div>
<div class="cmt-tag">枚评论</div>
<div class="cmt-tag"><p>Tag: <?php the_tags('', ', ', ''); ?></p></div>
<div class="readmore"><a title="阅读全文" href="<?php the_permalink() ?>" rel="bookmark"><strong>阅读全文&raquo;</strong></a></div>
</div>
<div class="hori-line-girl"></div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<div class="clear"></div>
<!-- Page navi begin -->
<div class="pageNavi2">
<div class="alignleft"><?php previous_posts_link('&laquo; 看看最新的') ?></div>
<div class="alignright"><?php next_posts_link('翻翻以前的 &raquo;') ?></div>
</div>
<!-- Page navi end -->
<div style=”clear”></div>
</div>
<?php else : ?>
<div class="post girl" id="Not-Found">
<h2 class="center">Sorry,</h2>
<p class="center">女主人已经没有文章了, 只能翻到这里了, 请注意查看男主人的文章, 也许还可以继续翻页哦~~  ^_^</p>
</div>
<div class="clear"></div>
<!-- Page navi begin -->
<div class="pageNavi2">
<div class="alignleft"><?php previous_posts_link('&laquo; 看看最新的') ?></div>
<div class="alignright"><?php next_posts_link('翻翻以前的 &raquo;') ?></div>
</div>
<!-- Page navi end -->
<div style=”clear”></div>
</div>
<?php endif; ?>
<!-- Girl end -->
</div>
<!-- Content end -->

</div>
<!-- Wrapper end -->
<!-- Footer begin --> 
<?php get_footer(); ?>
<!-- Footer end --> 
</body> 
</html>