
 <?php
 
 if(!function_exists('examone_jscss')){
    function examone_jscss(){
        wp_enqueue_style( 'style', get_stylesheet_uri() );

        wp_register_style('customcss', get_template_directory_uri().'/assets/vendors/themify-icons/css/themify-icons.css', array(), null, 'all');
        wp_enqueue_style('customcss');

        wp_register_style('assetscss', get_template_directory_uri().'/assets/css/johndoe.css', array(), null, 'all');
        wp_enqueue_style('assetscss');
        wp_enqueue_style("dashicons");

        //js
        wp_enqueue_script('jqueryjs', get_template_directory_uri().'/assets/vendors/jquery/jquery-3.4.1.js', array(), '3.4.1', true );
        wp_enqueue_script('bundlejs', get_template_directory_uri().'/assets/vendors/bootstrap/bootstrap.bundle.js', array(), null, true );
        wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/assets/vendors/bootstrap/bootstrap.affix.js', array(), null, true );

        wp_enqueue_script('vendorsjs', get_template_directory_uri().'/assets/vendors/isotope/isotope.pkgd.js', array(), null, true );

        wp_enqueue_script('googleapis', get_template_directory_uri().'//maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap', array(), null, true );

        wp_enqueue_script('johndoeis', get_template_directory_uri().'/assets/js/johndoe.js', array(), null, true );
   }
}
 add_action( 'wp_enqueue_scripts', 'examone_jscss' );
 
 
?>     