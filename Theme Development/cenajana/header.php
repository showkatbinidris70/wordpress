<html>
    <head>
        <title> <?php bloginfo('name');?></title>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/comment_template.css">
    <?php wp_head();?>
	</head>
    <body>
        <!-- Start Coding for Head Menu -->
        <div class="head_menu_flud">
            <div class="head_menu">
                <div class="head_menu_left">
                    <?php wp_nav_menu(array('theme_location'=> 'main_menu'));?>
                </div>
                <div class="head_menu_right">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/socail1.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/socail2.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/socail3.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/socail4.png">
                </div>
            </div>
        </div>


        <!-- Start Coding for Header -->
        <div class="header">
            <div class="logo">
                <a href="<?php bloginfo('home'); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
				</a>
			</div>
            <div class="banner">
                <img src="<?php echo get_template_directory_uri(); ?>/images/banner.png">
            </div>
        </div>

        <!-- Start Coding for Menu -->
        <div class="menu_flud">
            <div class="menu">
                <?php wp_nav_menu(array('theme_location'=> 'main'));?>
            </div>
        </div>

