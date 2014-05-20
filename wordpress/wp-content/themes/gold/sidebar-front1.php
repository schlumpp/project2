<?php 
  if(of_get_option('box-1')!='' && of_get_option('b1_title')!='')
  {
  ?>
    <div class="front-panel">
      <div class="panel panel-default sub-panel">
        <div class="panel-heading">
          <h3 class="panel-title"><?php echo of_get_option('b1_title');?></h3>
        </div>
        <div class="front-widget">  
         <?php 
            if(of_get_option('b1_editor')!=''){
                echo of_get_option('b1_editor');
            }
            else{
               $admin_url = esc_url(admin_url());
               echo "<strong class='right'>Please Add the Box Content <a href='".$admin_url."themes.php?page=options-framework'>here</a></strong>";
           }
         ?>            
        </div>
        <div class="clearfix"></div>
      </div>
    </div>    
<?php  
  }
  elseif(of_get_option('d-box-1')!=''){
?>
<?php
 
?>
<div class="front-panel">
  <div class="panel panel-default sub-panel">
    <div class="panel-heading">
      <h3 class="panel-title">Image Gallery</h3>
    </div> 
    <div class="front-widget">  
      <?php
          $cat=of_get_option('ycategory');
          $args=array('post_type'=>'post',
                      'posts_per_page'=>9,
                      'category_name'=>$cat
                    );
          $my_query=  new WP_Query($args);
          if($my_query->have_posts()){
            while($my_query->have_posts()): $my_query->the_post(); 
      ?>
        <?php if(has_post_thumbnail()): ?>
          <div class="col-lg-4 col-sm-4 col-4 top5 post-thumbnail-home">
           <a class="img-thumbnail" href="<?php the_permalink();?>"><?php echo get_the_post_thumbnail();?></a>
          </div>
        <?php endif;?>  
      <?php endwhile; 
        } 
        else{

          echo "Please create a post under the category :-<b>".$cat."</b>";
        }
        wp_reset_query();
      ?>            
    </div>
    <div class="clearfix"></div>
  </div>
</div> 
<?php 

} ?>
