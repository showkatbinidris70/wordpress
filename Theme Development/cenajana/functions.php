<?php 
/*Add read more */

function excerpt($limit){
	$limit = $limit+1;
	$excerpt  = implode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ", $excerpt)."<a href='".get_permalink($post->ID)." 'class='".readmore."'>Read More</a>";
	
	//echo $excerpt;
}



/*Enable featured image*/

add_theme_support('post-thumbnails', array('post'));
set_post_thumbnail_size( 200, 200, true );
add_image_size('post_image',200,200,true);


/*Enable comment*/
function comment_scripts(){
	if(is_singular()) wp_enqueue_script('comment_reply');
}
add_action('', 'wp_enqueue_scripts',' comment_scripts');

/*add dynamic menu*/
function wp_dinamic_menu(){
	if (function_exists( 'register_nav_menu' ) ) {
		register_nav_menu('main_menu',__('Main Menu'));
		register_nav_menu('main',__('2nd  Menu'));
	}
}
add_action( 'init', 'wp_dinamic_menu');
 
/*add new sidebar*/

function right_sidebar(){
	register_sidebar(array(
		'name'=>'Right Sidebar',
		'id'=>'right_sidebar',
		'before_widget'=>'<div class="single_widget">',
		'after_widget'=>'</div>',
		'before_title'=>'<h1 class="headline">',
		'after_title'=>'</h1>'
	
	));
}
add_action( 'widgets_init', 'right_sidebar');


/*add footer 1*/

function footer1(){
	register_sidebar(array(
		'name'=>'Footer 1',
		'id'=>'footer1',
		'before_widget'=>'<div class="single_widget">',
		'after_widget'=>'</div>',
		'before_title'=>'<h1 class="headline">',
		'after_title'=>'</h1>'
	
	));
}
add_action( 'widgets_init', 'footer1');

function footer2(){
	register_sidebar(array(
		'name'=>'Footer 2',
		'id'=>'footer2',
		'before_widget'=>'<div class="single_widget">',
		'after_widget'=>'</div>',
		'before_title'=>'<h1 class="headline">',
		'after_title'=>'</h1>'
	
	));
}
add_action( 'widgets_init', 'footer2');

function footer3(){
	register_sidebar(array(
		'name'=>'Footer 3',
		'id'=>'footer3',
		'before_widget'=>'<div class="single_widget">',
		'after_widget'=>'</div>',
		'before_title'=>'<h1 class="headline">',
		'after_title'=>'</h1>'
	
	));
}
add_action( 'widgets_init', 'footer3');

