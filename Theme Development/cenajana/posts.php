<?php if ( have_posts() ) : while( have_posts()  ) : the_post(); ?>
  	<div class="post">
        <div class="images">
		<?php the_post_thumbnail( 'post_image', array( 'class' => 'thumbnail' ) );?>
        </div>
            <div class="post_content">
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
                 <h2> <a href="<?php the_permalink();?>"><?php the_title(); ?> </a></h2>
				<p>
				 <?php the_excerpt('40'); ?>
                </p>
                 <a class="readmore" href="<?php the_permalink();?>"> Read More </a>
			</div>
    </div>
<?php endwhile; endif; ?>
					



                    