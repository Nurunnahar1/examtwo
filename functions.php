<?php
/**
 * EXAMONE functions and definitions
 
 */

if(!function_exists('examone')){
    function examone(){
      add_theme_support('title-tag');
      add_theme_support("custom-header");
      add_theme_support("custom-background");



     add_theme_support( 'post-thumbnails', array( 'post'  ) );
        add_theme_support( 'responsive-embeds' );
       
        add_theme_support( 'editor-styles' );
        add_theme_support( 'html5', array('style','script', ) );
        add_theme_support( 'automatic-feed-links' );
        //add_theme_support( 'custom-background');
        add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
     	load_theme_textdomain( 'examone', get_template_directory() . '/languages' );

      
       function examone_about_page_template_banner(){
        if(is_front_page()){
          if(current_theme_supports("custom-header")){
      ?>
      <style>
        .header{
          background-image:  -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),  url(<?php echo header_image(); ?>);
          background-image: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url(<?php echo header_image(); ?>);
          background-repeat: no-repeat;
          background-size: cover;
          color: #fff;
           /* background-attachment: fixed;  */
           
        }
      </style>
      
      <?php
          }
        }

       }
        add_action("wp_head","examone_about_page_template_banner");
    }
  }
add_action( 'after_setup_theme', 'examone' );

//menu
if(!function_exists('examone_menus')){
  function examone_menus() {

    $locations = array(
      'primary-left'  => __( 'primary Menu Left', 'examone' ),
      'primary-right' => __( 'primary Menu Right', 'examone' ),
      'mobile'   => __( 'Mobile Menu', 'examone' ),
      'footer'   => __( 'Footer Menu', 'examone' ),
      'social'   => __( 'Social Menu', 'examone' ),
    );
  
    register_nav_menus( $locations );
  }
}
add_action( 'init', 'examone_menus' );
require 'inc/enqueue-css.php';
 require 'inc/codestar-framework-master/codestar-framework.php';
 require 'inc/codestar-framework-master/samples/admin-options.php';
 require 'inc/nav-menu.php';
 require 'inc/cmb2/example-functions.php';
 require 'inc/cmb2/init.php';
 