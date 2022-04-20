<?php
require_once("bootstrap.php");
/*
**adding the  custom style files
**added by bahaa 
*/
function add_style_files(){
    wp_enqueue_style("bootstrap-css",get_template_directory_uri()  ."/css/bootstrap.css");
    wp_enqueue_style("fontawosome",get_template_directory_uri()  ."/css/all.min.css");
    wp_enqueue_style("main-css",get_template_directory_uri()  ."/css/main.css");
}
/*
**adding the  custom script files
**added by bahaa 
*/
function add_script_files(){
    wp_deregister_script("jquery");//remove registeration the old jquery
    wp_register_script("jquery",includes_url("/js/jquery/jquery.js") ,false,"",true);//regiister the new jqueery
    wp_enqueue_script("jquery"); //enqueue jquery
    wp_enqueue_script("bootstrap-js",get_template_directory_uri()  ."/js/bootstrap.js",array("jquery"),false,true);
    wp_enqueue_script("main-js",get_template_directory_uri() ."/js/main.js",array(),false,true);

}


//add the action
add_action("wp_enqueue_scripts","add_style_files");
add_action("wp_enqueue_scripts","add_script_files");
/*
** add custom menu
** added by bahaa
*/
function register_custum_menu(){
    register_nav_menu("bootstrap-menu",__("navigation "));
}
add_action("init","register_custum_menu");
function add_bootstrap_menu(){
    wp_nav_menu(array(
        'theme_location'=>"bootstrap-menu",
        'menu_class'    =>'navbar-nav ml-auto',
        "container"     =>false,
        'depth'         =>2, 
        'walker'        =>new wp_bootstrap_navwalker()
    ));
}

add_theme_support( 'post=thumbnails' );  
add_theme_support( 'post-thumbnails' );
/**
 **custimize the funtion (excerpt)
 **
 */
function change_the_length($l){ //change the length of the excerpt
    if (is_author()){
        return 30;
    }else{
        return 50;
    }
}
add_filter("excerpt_length","change_the_length");
function change_more($l){
    return "   ...";
}
add_filter("excerpt_more","change_more");
