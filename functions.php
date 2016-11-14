<?php

/*
Theme Name: starrharris
Theme URI: https://starrharris.com
Description: A first attempt at designing a wordpress theme to use for my personal portfolio
Version: 1.0
Author: Starr Harris Print and Web Design
Author URI: http://www.starrharris.com
Tags: portfolio
License:
License URI:
*/


/*funtion to make one menu options appear

function register_my_menu(){
    register_nav_menu('header-menu' ,_( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


/*funtion to make two menu options appear
function register_my_menus(){
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu' ),
            'extra-menu' => __('Extra Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );
*/
?>

<!--from book-->



<?php register_nav_menus(); ?>



