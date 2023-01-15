<?php

if(!function_exists('exam_post')){
	function exam_post( ){
		$madinovaMetaBox= new_cmb2_box(array(
		   'title'=>'add fields',
		   'id'   =>'exam_post_Metabox',
		   'object_types'=>array('post')
		));
	   
		$madinovaMetaBox->add_field(array(
 		   'name'=>__('Short content','examtwo'),
		   'type'=>'text',
		   'id'=>'post_short_content'
	   )); 
		$madinovaMetaBox->add_field(array(
		   'name'=>__('Third content','examtwo'),
 		   'type'=>'text',
		   'id'=>'post_short_content2',
		   //"repeatable" => true,
	   )); 
	   }
	 
}
add_filter('cmb2_meta_boxes','exam_post');



//
///pricing
//
//label
if(!function_exists('exam_custom_menu')){
    function exam_custom_menu() {
        $labels=array(
            'name'          => __('Prices', 'madinova'),
            'singular_name' => __('Price', 'madinova'),
            'add_new'       => __( 'Add New Service', 'madinova' ),
            'add_new_item'  => __( 'Add New Service', 'madinova' ),
            'not_found'     => __( 'Not Service Found', 'madinova' )
        );

        register_post_type('exam_pricing_post',
            array(
                    'labels'              => $labels,
                    'public'              => true,
                    'supports'            => array( ),
                    'menu_position'       => 11,
                    'menu_icon'           => 'dashicons-portfolio'
            )
        );
    }
}
add_action('init', 'exam_custom_menu');


//menu
if(!function_exists('exam_pricing')){
	function exam_pricing( ){
		$madinovaMetaBox= new_cmb2_box(array(
		   'title'=>'add fields',
		   'id'   =>'mMetabox',
		   'object_types'=>array('exam_pricing_post')
		));
	   
		$madinovaMetaBox->add_field(array(
		  
		   'name'=>__('What type','examtwo'),
		   'type'=>'text',
		   'id'=>'what_type_price'
	   )); 
		$madinovaMetaBox->add_field(array(
		    
		   'name'=>__('Amount','examtwo'),
		   'type'=>'text',
		   'id'=>'ampunt'
	   )); 
	 
	  
		$madinovaMetaBox->add_field(array(
		    
		   'name'=>__('Feature','examtwo'),
		   'type'=>'text',
		   'id'=>'feature',
		   "repeatable" => true,
	   )); 
		$madinovaMetaBox->add_field(array(
		  
		   'name'=>__('Button','examtwo'),
		   'type'=>'text',
		   'id'=>'btn_price',
		  // "repeatable" => true,
	   )); 
	   }
	 
}
add_filter('cmb2_meta_boxes','exam_pricing');