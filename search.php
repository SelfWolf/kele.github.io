<?php get_header(); ?>
<div class="header">
<div class="header-inner header_page">
<a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
</div>
</div>
<div class="wrapper wrapper_page">
<div class="content_boy single_content_boy">
<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
<?php if ($post->post_author == '1') { 
$style_item = 'boy'; 
} 
elseif ($post->post_author == '2') { 
$style_item = 'girl'; 
}  else { 
$style_item = 'normal'; 
} ?>
<div class="post <?php echo $style_item ;?> post_<?php echo $style_item ;?>" id="post-<?php the_ID(); ?>">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<div class="sub_desc"><?php the_author() ?> | 发表于: <?php the_time('F jS, Y') ?> | 分类: <?php the_category(',') ?> | 评论: <?php comments_popup_link('0 枚', '1 枚', '% 枚'); ?></div>
<div class="post_content"><?php the_content('......'); ?></div>
<div class="post_meta">
<div class="cmt-tag"><p>Tag: <?php the_tags('', ', ', ''); ?></p></div>
<div class="readmore"><a title="阅读全文" href="<?php the_permalink() ?>" rel="bookmark"><strong>阅读全文&raquo;</strong></a></div>
</div>
<div class="hori-line-<?php echo $style_item ;?>"></div>
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
<div class="post <?php echo $style_item ;?>" id="Not-Found">
<h2 class="center">Sorry,</h2>
<p class="center">没有找到您要搜索的文章 ^_^</p>
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
<?php get_sidebar(); ?>
</div>
<!-- Footer begin -->
<div class="footer footer_page">
<?php include (TEMPLATEPATH . '/footer_diy.php'); ?>
</div>
<!-- Footer end -->
</body>
</html>