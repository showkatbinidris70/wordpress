<?php get_header(); ?>
        <!-- Start Coding for Main Content -->
        <div class="content_flud">
            <div class="content">
                <!-- Start Coding for Main Content Left -->
                <div class="content_left">
                   <?php if ( have_posts() ) : while( have_posts()  ) : the_post(); ?>
				<div class="post">
          
                <div class="admin">
                        <div class="admin_left">
                         <img src="<?php echo get_template_directory_uri(); ?>/images/admin.png">
                         <a href="#">Admin </a><?php the_time('d M- Y'); ?>
                        </div>
						
                <div class="comment">
                         <img src="<?php echo get_template_directory_uri(); ?>/images/comment.png">
                          <a href="#"><?php comments_popup_link('No Comment', '1 comment', '% comments');?></a>
                </div>
				
                </div>
                 <h2> <a class="single-post-head" href="<?php the_permalink();?>"><?php the_title(); ?> </a></h2>
				<p>
				 <?php the_content(); ?>
                </p>
			
                 <a class="readmore" href="<?php the_permalink();?>"> Read More </a>
    </div>
<?php endwhile; endif; ?>
					



                    
					<!---       --->
                </div>

                <!-- Start Coding for Right Side Bar  -->
                <?php get_sidebar(); ?>
            </div>
        </div>

<?php get_footer(); ?>