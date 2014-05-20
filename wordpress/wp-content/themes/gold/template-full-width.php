<?php
/*
* Template Name: Full Width Template
*/
if ( !defined('ABSPATH')) exit;
?>
<?php get_header(); ?>
<div class="row">
  <div class="col-lg-12 col-sm-12">
    <?php if(have_posts()): the_post();?>
    <div class="page-header">
      <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a> 
       <br>
       <small>
         <?php $categories = get_the_category();
             $separator = ' ';
             $output = '';
             if($categories){
               foreach($categories as $category) {
                 $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . sprintf( __( "View all posts in %s",'Gold' ), $category->name )  . '">'.$category->cat_name.'</a>'.$separator;
               }
             echo trim($output, $separator);
         }?>   
       </small>
      </h1>
      <div class="post-meta">
        <p>- By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author();?></a> under-
        <a href="#"><span class="label"><?php the_tags();?></span></a>
        <span class="pull-right">Dated - <a href="<?php the_permalink(); ?>"><?php the_time('j F');?></a></span>
        </p>            
      </div>
    </div>
    <div class="post-content">
      <p class="justify">
      		<center>
            <?php 
        		  if ( has_post_thumbnail() ):
        		    the_post_thumbnail();
        		  endif;
        		?>
      		
      		</center>
		     <?php the_content();?>        
	    </p>
    </div>
    <?php endif;?>
  </div>    
</div>
<?php get_footer(); ?>