<?php get_header(); ?>
        <!-- Start Coding for Main Content -->
        <div class="content_flud">
            <div class="content">
                <!-- Start Coding for Main Content Left -->
                <div class="content_left">
                    <?php get_template_part( 'slide' ); ?>



                    



					<?php get_template_part( 'posts' ); ?>
                </div>

                <!-- Start Coding for Right Side Bar  -->
                <?php get_sidebar(); ?>
            </div>
        </div>

<?php get_footer(); ?>