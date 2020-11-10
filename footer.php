<?php if (is_page())  { 
$style_item = 'page'; 
} 

	elseif (is_category()){
	$style_item = 'page'; 
	}
elseif (is_single()) { 
if ($post->post_author == '1') { 
$style_item = 'boy'; 
} 
elseif ($post->post_author == '2') { 
$style_item = 'girl'; 
} 
} 

else { 
$style_item = 'normal'; 
} ?>

<div class="footer footer_<?php echo $style_item ;?>">
  <?php include (TEMPLATEPATH . '/footer_diy.php'); ?>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/comments-ajax.js"></script> 
<script type="text/javascript">$('#top').click(function(){$('html,body').animate({scrollTop: '0px'}, 800);return false;});</script> 
<script type="text/javascript">/*图片透明度*/  
$(function () {
$('img').hover(
function() {$(this).fadeTo("fast", 0.5);},
function() {$(this).fadeTo("fast", 1);
});
});
</script> 
<script type="text/javascript">  /*超链接滑动*/          
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
<script>            
        $(function(){                
            $(".sidebar ul li ul a").slide({sLength:10,className:"hoverClass"});            
        })        
    </script> 
