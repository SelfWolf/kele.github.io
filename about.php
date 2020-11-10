<?php
/*
Template Name: 关于
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
<h2><?php the_title(); ?></h2>
<?php thread_digu(); ?>
<div class="post_content">

</div>
</div>
<div class="clear"></div>
<?php comments_template(); ?>
<!-- You can start editing here. -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<!-- Girl end -->
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
</body>
<script type="text/javascript">            
        (function($){ 
            $.fn.slide = function(options){  
                var defaults = {   
                    sLength :10 //缩进长度        
                }  
                var options = $.extend(defaults,options);    
                this.each(function(){   
                     
                    var className = $(this).attr("class");        
                    $(this).mouseover(function(){           
                        $(this).animate({marginLeft :options.sLength+'px'}, {queue:false, duration:300});  
                    }).mouseout(function(){          
                        $(this).animate({marginLeft :'0px'}, {queue:false, duration:300});
                    });  
                    
                }); 
            };
        })(jQuery);        
    </script>        
 
</html>
