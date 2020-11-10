<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if ( post_password_required() ) { ?>
<p class="nocomments">这是一篇受密码保护的文章，请输入密码查看回复！</p>
<?php
		return;
	}
?>
<?php if ( have_comments() ) : ?>
<h3 id="comments">
  <?php comments_number('快来盖楼吧！', '已经盖了1 层楼，还不来盖楼！', '已经盖了% 层楼，还不来盖楼！' );?>
  <span class="maodian"><a href="#maodian">评论</a></span> </h3>
<ol class="commentlist">
  <?php wp_list_comments('avatar_size=60'); ?>
</ol>
<?php else : // this is displayed if there are no comments so far ?>
<?php if ('open' == $post->comment_status) : ?>
<?php else : // comments are closed ?>
<p class="nocomments">回复已关闭</p>
<?php endif; ?>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
<div class="comments-navi">
  <?php paginate_comments_links('prev_text=上一页&next_text=下一页');?>
</div>
<div id="respond"><a name="maodian"></a>
  <h2 class="pinglunkuang"><br/>
    <?php comment_form_title( '盖楼', '回复 %s' ); ?>
  </h2>
  <div class="cancel-comment-reply"> <small>
    <?php cancel_comment_reply_link(); ?>
    </small> </div>
  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    <?php if ( $comment_author != "" ) : ?>
    <script type="text/javascript">function setStyleDisplay(id, status){document.getElementById(id).style.display = status;}</script>
    <div class="form_row small"> <?php printf(__('小<strong>%s</strong>欢迎回来哦！！！~留个言吧！~.'), $comment_author) ?> <span id="show_author_info"><a href="javascript:setStyleDisplay('author_info','');setStyleDisplay('show_author_info','none');setStyleDisplay('hide_author_info','');">
      <?php _e('换个马甲试一试 &raquo;'); ?>
      </a></span> <span id="hide_author_info"><a href="javascript:setStyleDisplay('author_info','none');setStyleDisplay('show_author_info','');setStyleDisplay('hide_author_info','none');">
      <?php _e('取消呗！ &raquo;'); ?>
      </a></span> </div>
    <?php endif; ?>
    <div id="comments_corner">
    <div id="author_info">
      <p>
        <input type="text" class="ct_input_user"   name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
        <label for="author">您的昵称(*) </label>
      </p>
      <p>
        <input type="text" class="ct_input_mail" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
        <label for="email">您的邮箱(*) </label>
      </p>
      <p>
        <input type="text" class="ct_input_web" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
        <label for="url">您的网址</label>
      </p>
    </div>
    <?php if ( $comment_author != "" ) : ?>
    <script type="text/javascript">setStyleDisplay('hide_author_info','none');setStyleDisplay('author_info','none');</script>
    <?php endif; ?>
    <?php endif; ?>
    <p class="smile">
      <?php include(TEMPLATEPATH . '/smiley.php'); ?>
    </p>
    <p id="comment-txtarea">
      <textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4" onkeydown="if(event.ctrlKey&amp;event.keyCode==13)  {document.getElementById('submit').click();return false};"></textarea>
    </p>
    <p>
      <?php comment_id_fields(); ?>
      <input name="submit" type="submit" id="submit" tabindex="5" value="提交(Ctrl+Enter)" class="button" />
      <?php do_action('comment_form', $post->ID); ?>
  </form>
  </p>
  </div>
</div>

