   </div>
  </div>
<div id="x">
   <div class="x_c">
	<?php qqoq_ad('logob')?>
	<a class="x_l" href="<?php bloginfo('img/“法猫网”商标.j'); ?>"></a>
	<div class="x_r">
	  <div class="x_t">
	   <?php if(is_home()){?>
	   <?php wp_list_bookmarks('show_images=0&categorize=0&category_before=&category_after=&title_li=友情链接：&title_before=<h3>&title_after=</h3>&limit=15');?>
	   <?php }else{?>
    
	   <?php }?>
	  </div>
	  <div class="x_b">
	  	  
	  </div>
	</div>
   </div>
  </div>
  <?php wp_footer();?>
  <div style="display: none;" id="gotop"></div>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.pack.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/jquery.fancybox-buttons.css" />
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox-buttons.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/form.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.slide.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/index.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.nicescroll.min.js"></script>
  <?php
	  if(current_user_can('level_10')){
	  include_once('inc/admin-i.php');
	  }
  ?>
 </body>
</html>