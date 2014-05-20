<!DOCTYPE html>
<html  <?php language_attributes();?>>
  <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php wp_title('|', true, 'right'); ?></title>
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"> 
     <?php wp_head();?>  
  </head>

  <body <?php body_class();?>>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>></div>
    <div class="container radius10">
      <header>

        <div class="head-top row ">
	        <!--/*****************Top Menu******************/-->	
		        <?php 
		       
		        if(has_nav_menu('top_menu')):
		        ?>
		          <div class="col-lg-12 hidden-xs">
			          	<?php
			                	wp_nav_menu( array(
					              'theme_location'  => 'top_menu',
					              'container'       => '',
					              'container_class' => '', 
					              'container_id'    => '',
					              'menu_class'      => 'top-menu right hidden-sm',               
					              'echo'            => true,
					              'fallback_cb'     => 'wp_page_menu',                            
					              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					              'depth'           => -1,
					            ) );               
			            ?> 
		          </div>
		        <?php 
		           endif;
		        ?>  
	        <!--/*****************/Top Menu******************/-->	  
	        
	        <!--/*****************Site Logo******************/-->	
		        <div id="logo" class="col-lg-8 col-sm-6 col-xs-12">
		            <div class="col-lg-7 col-sm-12 col-xs-12">
			          	<?php
			          
			             	if ( of_get_option('logo') != ''){
			                    $img=of_get_option('logo');
			            ?>
			            	    <a href="<?php echo esc_url(home_url());?>">
				                	<img src="<?php echo esc_url($img);?>" class="img-responsive" alt="Reponsive image">
				                    <!--h1>Invasion Technologies</h1-->
			                 	</a> 
			            <?php
			                }
			                else
			                {
			            ?>
			                    <a href="<?php echo esc_url(home_url());?>">         
			                    	<h1><?php echo esc_attr(bloginfo('name'));?></h1>
			                    </a> 
			                    <h3 class="visible-lg"><?php echo esc_attr(bloginfo('description'));?></h3>
			            <?php 
			                }
			            ?>
			        </div>    
		        </div>
		    <!--/*****************/Site Logo******************/-->	    

		    <!--/*****************Top Social Icons******************/-->

	          	<div class="head-top-right col-lg-4 col-sm-6 col-xs-12">                        

	            	<?php
	                    if(of_get_option('enable')!=''):
	                ?>
	                    <div class="social col-lg-12 col-sm-12 col-xs-12">
		                    <?php
			                    if(of_get_option('fb')!='' ):
			                        $l1=of_get_option('fb');
			                        echo ' <span class="fb-icon social-icon"><a href='.esc_url($l1).'></a></span>';
			                    endif;    
		                    ?>   
		                    <?php
			                    if(of_get_option('twitter')!=''):
			                        $l1=of_get_option('twitter');
			                        echo ' <span class="tw-icon social-icon"><a href='.esc_url($l1).'></a></span>';
			                    endif;    
		                    ?> 
		                    <?php
			                    if(of_get_option('youtube')!=''):
			                        $l1=of_get_option('youtube');
			                        echo ' <span class="yt-icon social-icon"><a href='.esc_url($l1).'></a></span>';
			                    endif;    
		                    ?> 
		                    <?php
			                    if(of_get_option('flicker')!=''):
			                        $l1=of_get_option('flicker');
			                        echo ' <span class="fl-icon social-icon"><a href='.esc_url($l1).'></a></span>';
			                    endif;    
		                    ?> 
		                    <?php
			                    if(of_get_option('rss')!=''):
			                        $l1=of_get_option('rss');
			                        echo ' <span class="rss-icon social-icon"><a href='.esc_url($l1).'></a></span>';
			                    endif;    
		                    ?>               
	            		</div>
	                <?php
	                    endif;        
	            	?>


	            <div class="clearfix hidden-sm"></div>
	            <!--/*****************Search Form *****************/-->		
	            	<?php
	              
	                	get_search_form();

	            	?>
	            <!--/*****************/Search Form *****************/-->			
	          </div>
	        <!--/*****************/Top Social Icons*****************/-->		  

        </div>
        <!--/*****************Main Menu*****************/-->		
	         <div class="navbar-wrapper">

          <div class="container">          

            <div class="navbar navbar-inverse">

              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>               

                <div class="navbar-collapse collapse">
	                <?php

	                  /******** Main Menu *********/

	                      if (has_nav_menu( 'main_menu' )) {
	                       wp_nav_menu( array(

	          						  'theme_location'  => 'main_menu',

	          						  'container'       => '', 

	          						  'container_class' => '', 

	          						  'container_id'    => '',

	          						  'menu_class'      => 'nav navbar-nav',               

	          						  'echo'            => true,

	          						  'fallback_cb'     => 'wp_page_menu',                            

	          						  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',

	          						  'depth'           => 0,

	          						  'walker'			=>new gold_wp_bootstrap_navwalker()

	          						  ) ); 
	                      }else{
	                       wp_nav_menu( array(
	                       			  'menu_class'      => 'nav navbar-nav',               

	          						  'echo'            => true,

	          						  'fallback_cb'     => 'wp_page_menu',                            

	          						  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',

	          						  'depth'           => 0,

	          						  'walker'			=>new gold_wp_bootstrap_navwalker()
	          						  
	          						  ) ); 
	                    }

	                 /************End Of Main Menu.**********/    
	              ?> 
	                 </div>

	              	</div>

            	</div>          

          	  </div>      

        	</div>
        <!--/*****************/Main Menu *****************/-->		
      </header>
    <!--/*****************Main Container *****************/-->		  
      <div class="container">