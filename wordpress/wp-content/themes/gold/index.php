<?php 
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
?>
<?php get_header();?>
<div class="row"> 
    <div class="col-lg-8 col-sm-8 col-xs-12">
    <?php 
        rewind_posts();
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args=array(
                 'post_type' => 'post',
                 'posts_per_page' => get_option('posts_per_page'),          
                 'paged' => $paged
                 );
        $query = new WP_Query($args);
    ?>
    <?php if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post(); ?>
   
      <div class="page-header">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a> 
          <br>
         <small class="cat-font">
         <span>Categories :-</span>
           <?php $categories = get_the_category();
               $separator = ' ';
               $output = '';
               if($categories){
                 foreach($categories as $category) {
                   $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s",'Gold' ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
                 }
               echo trim($output, $separator);
           }?>   
         </small>
        </h1>
          <div class="post-meta">
            <p>- By <a href="<?php echo  get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author();?></a> 
             <div class="tags col-lg-12 overflow">
              <?php if(has_tag()): ?> under- <?php the_tags( $before = null, $sep = '', $after = '' );?><?php endif;?>
            </div> 
              <span class="pull-right">Dated - <a href="<?php the_permalink(); ?>"><?php the_time('j M Y');?></a></span>
            </p>            
          </div> 
      </div>
     <div class="post-content">
        <p class="justify">
          <a href="<?php the_permalink();?>"><?php 
            if ( has_post_thumbnail() ):
              the_post_thumbnail();
            endif;
          ?>
          </a> 
           <?php the_content();?>        
        </p>
        <?php gold_link_pages(); ?> 
       <?php comments_popup_link('Leave a reply');?>
      </div>       
        <?php endwhile; ?>
         <div class="clearfix"></div>
           <div class="row"><?php gold_pager(); ?></div>
         <?php else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.','Gold'); ?></p>
  <?php endif; ?>
    </div>
  <div class="col-lg-4 col-sm-4 col-xs-12 sidebar">
      <?php get_sidebar(); ?>
  </div>      
</div>    
<?php get_footer();?>