<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = '_prefix';


//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'Theme Options',
  'menu_slug'  => 'csf-demo',
) );
//
// Create a section
//
CSF::createSection( $prefix, array(
  'title'  => 'Overview',
  'icon'   => 'fas fa-rocket',
  'fields' => array(

    //
    // A text field
    //
    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),
 
  )
) );
 //
  ///Header hero
  //
 
CSF::createSection( $prefix, array(
  'id'    => 'header_top',
  'title' => 'Header Area',
  'icon'  => 'fas fa-plus-circle',
  'fields'      => array(
    

    array(
      'id'    => 'header_right',
      'type'  => 'group',
      'title' => __('Header Top','examone'),
      'button'=>'call and email',
      'fields'=>array(
         array(
          'id'=>'add_social_icon',
         'type'=>'icon',
         'title'=>__(' Icon','examone')
         ),

         array(
          'id'=>'add_url',
         'type'=>'text',
         'title'=>__('Add URL','examone')
         )
      )
    ),

   
    
 
  )
) ); 
 //
  ///Header hero
  //
  CSF::createSection( $prefix, array(
    'title'  => 'Header Hero',
    'icon'   => 'fas fa-rocket',
    'fields' => array(
 
            array(
             'id'=>'short_title',
             'type'=>'text',
             'title'=>__('Short Title','examone')
             ),
            array(
             'id'=>'hero_title',
             'type'=>'text',
             'title'=>__('Title','examone')
             ),
             array(
              'id'=>'hero_description',
             'type'=>'text',
             'title'=>__('Designation','examone')
             ),
             array(
              'id'=>'hero_description2',
             'type'=>'text',
             'title'=>__('Designation','examone')
             ),
 

          //button 1
            array(
              'id'         => 'button',
              'type'       => 'fieldset',
              'title'      => 'Button',
              'fields' => array(
            
                array(
                  'id'     => 'button_1',
                  'type'   => 'fieldset',
                  'title'=>__('Button One','examone'),
                  'fields' => array(
                      array(
                        'id'      => 'btn_1',
                        'type'    => 'text',
                        'title'=>__('Button One','examone'),
                      ),
          
                      array(
                        'id'      => 'btn_1_url',
                        'type'    => 'text',
                        'title'=>__('Button One URL','examone'),
                      ),
                      array(
                        'id'=>'btn_icon',
                      'type'=>'icon',
                      'title'=>__('Button Icon','examone')
                      ),
                  ),
               
                ),

        
              )
            ),


        ),
    
    ));
    //
    ///who am i

    CSF::createSection( $prefix, array(
      'title'  => 'Whho Am I',
      'icon'   => 'fas fa-rocket',
      'fields' => array(
   
              array(
               'id'=>'short_title_who',
               'type'=>'text',
               'title'=>__('Short Title','examone')
               ),
              array(
               'id'=>'hero_title_who',
               'type'=>'text',
               'title'=>__('Title','examone')
               ),
               array(
                'id'=>'hero_description_who',
               'type'=>'text',
               'title'=>__('Designation','examone')
               ),
 
   
  
            //button 1
              array(
                'id'         => 'button_who',
                'type'       => 'fieldset',
                'title'      => 'Button',
                'fields' => array(
              
                  array(
                    'id'     => 'button__who',
                    'type'   => 'fieldset',
                    'title'=>__('Button One','examone'),
                    'fields' => array(
                        array(
                          'id'      => 'btn_1_who',
                          'type'    => 'text',
                          'title'=>__('Button One','examone'),
                        ),
            
                        array(
                          'id'      => 'btn_1_url_who',
                          'type'    => 'text',
                          'title'=>__('Button One URL','examone'),
                        ),
                      
                    ),
                 
                  ),
  
          
                )
              ),
  
  
          ),
      
      ));
  //
  ///Personal Info
 //
      CSF::createSection( $prefix, array(
        'title'  => 'Personal Info',
        'icon'   => 'fas fa-rocket',
        'fields' => array(
     
                array(
                 'id'=>'short_title_Personal',
                 'type'=>'text',
                 'title'=>__('Personal Title','examone')
                 ),
              //detail about person
                  array(
                    'id'         => 'Personal_dtl',
                    'type'       => 'fieldset',
                    'title'      => 'About Person',
                    'fields' => array(
                
                      array(
                        'id'    => 'Personal_details',
                        'type'  => 'group',
                        'title' => __('Give detail','examone'),
                        'button'=>'call and email',
                        'fields'=>array(
                        
                  
                          array(
                            'id'=>'Personal_detail_info_name',
                          'type'=>'text',
                          'title'=>__('Information name ','examone')
                          ),
                          array(
                            'id'=>'Personal_detail_info_dtl',
                          'type'=>'text',
                          'title'=>__('Information ','examone')
                          ),
                      )
                    ),
                  )
                ),
                  //icon
                array(
                  'id'    => 'header_right',
                  'type'  => 'group',
                  'title' => __('Header Top','examone'),
                  'button'=>'call and email',
                  'fields'=>array(
                     array(
                      'id'=>'add_social_icon',
                     'type'=>'icon',
                     'title'=>__(' Icon','examone')
                     ),
            
                     array(
                      'id'=>'add_url',
                     'type'=>'text',
                     'title'=>__('Add URL','examone')
                     )
                  )
                ),
           ),
        
        ));


 //
 ///My Expertise
 //
 CSF::createSection( $prefix, array(
    'title'  => 'My Expertise',
    'icon'   => 'fas fa-rocket',
    'fields' => array(
          array(
            'id'=>'expertise',
            'type'=>'text',
            'title'=>__('My Expertise','examone')
            ),
            array(
              'id'         => 'Expertise',
              'type'       => 'fieldset',
              'title'      => 'Button',
              'fields' => array(
            
                array(
                  'id'     => 'Expertise_detail',
                  'type'   => 'group',
                  'title'=>__('Button One','examone'),
                  'fields' => array(
                      array(
                        'id'      => 'Expertise_icon',
                        'type'    => 'icon',
                        'title'=>__('Expertise Icon','examone'),
                      ),
          
                      array(
                        'id'      => 'Expertise_title',
                        'type'    => 'text',
                        'title'=>__('Expertise Title','examone'),
                      ),
                      array(
                        'id'      => 'Expertise_description',
                        'type'    => 'text',
                        'title'=>__('Expertise Description','examone'),
                      ),
                  ),
                ),

              )
            ),
          ),
     ));
//
///Resume
//
CSF::createSection( $prefix, array(
  'title'  => 'My Resume',
  'icon'   => 'fas fa-rocket',
  'fields' => array(
    array(
      'id'      => 'Resume_title',
      'type'    => 'text',
      'title'=>__('Resume Title','examone'),
    ),
 
          array(
            'id'         => 'Resume',
            'type'       => 'fieldset',
            'title'      => 'Resume',
            'fields' => array(
          
              array(
                'id'     => 'Resume_detail',
                'type'   => 'group',
                'title'=>__('Resume','examone'),
                'fields' => array(

                    array(
                      'id'      => 'Resume_time',
                      'type'    => 'text',
                      'title'=>__('Resume Time','examone'),
                    ),
        
                    array(
                      'id'      => 'Resume_designation',
                      'type'    => 'text',
                      'title'=>__('Resume Designation','examone'),
                    ),
                    array(
                      'id'      => 'Resume_description',
                      'type'    => 'text',
                      'title'=>__('Resume Description','examone'),
                    ),
                ),
              ),

            )
          ),
        ),
   ));

//
///Education
//
CSF::createSection( $prefix, array(
  'title'  => 'Education',
  'icon'   => 'fas fa-rocket',
  'fields' => array(
    array(
      'id'      => 'Education_title',
      'type'    => 'text',
      'title'=>__('Resume Title','examone'),
    ),
 
          array(
            'id'         => 'Education_detail',
            'type'       => 'fieldset',
            'title'      => 'Resume',
            'fields' => array(
          
              array(
                'id'     => 'Education_details',
                'type'   => 'group',
                'title'=>__('Resume','examone'),
                'fields' => array(

                    array(
                      'id'      => 'education_year',
                      'type'    => 'text',
                      'title'=>__('Education Year','examone'),
                    ),
        
                    array(
                      'id'      => 'department',
                      'type'    => 'text',
                      'title'=>__('Department','examone'),
                    ),
                    array(
                      'id'      => 'education_description',
                      'type'    => 'text',
                      'title'=>__('Description','examone'),
                    ),
                ),
              ),

            )
          ),
        ),
   ));

//
///Skills
//
CSF::createSection( $prefix, array(
  'title'  => 'Skills',
  'icon'   => 'fas fa-rocket',
  'fields' => array(
          array(
            'id'      => 'Skills_title',
            'type'    => 'text',
            'title'=>__('Resume Title','examone'),
          ),
 
          array(
            'id'         => 'Skills_detail',
            'type'       => 'group',
            'title'      => 'Resume',
            'fields' => array(
          
              array(
                'id'      => 'Skill',
                'type'    => 'text',
                'title'=>__('Your Skills','examone'),
              ),
  
            

            )
          ),
        ),
   ));
//
///Languages
//
CSF::createSection( $prefix, array(
  'title'  => 'Languages',
  'icon'   => 'fas fa-rocket',
  'fields' => array(
          array(
            'id'      => 'Languages_title',
            'type'    => 'text',
            'title'=>__('Languages Title','examone'),
          ),
 
          array(
            'id'         => 'Languages_detail',
            'type'       => 'group',
            'title'      => 'Resume',
            'fields' => array(
          
              array(
                'id'      => 'Language',
                'type'    => 'text',
                'title'=>__('Languages','examone'),
              ),
  
            

            )
          ),
        ),
   ));
//
///coundown
//
CSF::createSection( $prefix, array(
  'title'  => 'Coundown',
  'icon'   => 'fas fa-rocket',
  'fields' => array(
   
 
          
          
              array(
                'id'     => 'coundown_details',
                'type'   => 'group',
                'title'=>__('Coundown','examone'),
                'fields' => array(

                    array(
                      'id'      => 'coundown_icon',
                      'type'    => 'icon',
                      'title'=>__('Coundown icon','examone'),
                    ),
        
                    array(
                      'id'      => 'coundown_number',
                      'type'    => 'text',
                      'title'=>__('Coundown Number','examone'),
                    ),
                    array(
                      'id'      => 'what_type_coundown',
                      'type'    => 'text',
                      'title'=>__('What Type Coundown','examone'),
                    ),
                ),
              ),

           
       
        ),
   ));

//
///My Services
//
CSF::createSection( $prefix, array(
  'title'  => 'Services',
  'icon'   => 'fas fa-rocket',
  'fields' => array(
   
 
          
          
              array(
                'id'     => 'Services_details',
                'type'   => 'group',
                'title'=>__('Coundown','examone'),
                'fields' => array(

                    array(
                      'id'      => 'Services_icon',
                      'type'    => 'icon',
                      'title'=>__('Services icon','examone'),
                    ),
        
                    array(
                      'id'      => 'Services_title',
                      'type'    => 'text',
                      'title'=>__('Services Title','examone'),
                    ),
                    array(
                      'id'      => 'Services_description',
                      'type'    => 'text',
                      'title'=>__('Services Description','examone'),
                    ),
                ),
              ),

           
       
        ),
   ));





//
///pricing
//





// CSF::createSection( $prefix, array(
//   'title'  => 'pricing',
//   'icon'   => 'fas fa-rocket',
//   'fields' => array(

 
//           array(
//             'id'         => 'pricing_detail',
//             'type'       => 'fieldset',
//             'title'      => 'Resume',
//             'fields' => array(
//               array(
//                 'id'      => 'price_card_title',
//                 'type'    => 'text',
//                 'title'=>__('price Card Title','examone'),
//               ),
//               array(
//                 'id'      => 'num',
//                 'type'    => 'text',
//                 'title'=>__('Number','examone'),
//               ),
//               array(
//                 'id'      => 'date',
//                 'type'    => 'text',
//                 'title'=>__('Date','examone'),
//               ),
          
//               array(
//                 'id'     => 'pricing_details',
//                 'type'   => 'group',
//                 'title'=>__('Resume','examone'),
//                 'fields' => array(

//                     array(
//                       'id'      => 'pricing_number',
//                       'type'    => 'text',
//                       'title'=>__('Education Year','examone'),
//                     ),
//                     array(
//                       'id'      => 'what_type',
//                       'type'    => 'text',
//                       'title'=>__('What Type','examone'),
//                     ),
        
                  
//                 ),
//               ),

//             )
//           ),
//         ),
//    ));

//
///detailme
//
CSF::createSection( $prefix, array(
  'title'  => 'Detail Me',
  'icon'   => 'fas fa-rocket',
  'fields' => array(

          array(
           'id'=>'detailme',
           'type'=>'text',
           'title'=>__('Detail','examone')
           ),
          array(
           'id'=>'detailme_button',
           'type'=>'text',
           'title'=>__('Title','examone')
           ),
         
 


      ),
  
  ));
  //
  ///footer
  //
  CSF::createSection( $prefix, array(
    'title'  => 'Footer Area',
    'icon'   => 'fas fa-rocket',
    'fields' => array(
  
            array(
             'id'=>'Created_With',
             'type'=>'text',
             'title'=>__('Created With','examone')
             ),
            array(
             'id'=>'Creator_name',
             'type'=>'text',
             'title'=>__('Creator Name','examone')
             ),
            array(
             'id'=>'Creator_url',
             'type'=>'text',
             'title'=>__('Creator URL','examone')
             ),
           
   
  
  
        ),
    
    ));