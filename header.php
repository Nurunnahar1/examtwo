<?php $prefix= get_option('_prefix');
    
      $button=$prefix["button"];
      $buttons1=$button["button_1"];
    

      //header hero 

 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>JohnDoe Landing page | Free Bootstrap 4.3.x landing page</title>
    <!-- font icons -->
    <!-- <link rel="stylesheet" href=""> -->
    <!-- Bootstrap + JohnDoe main styles -->
	<!-- <link rel="stylesheet" href=""> -->
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
 
            <?php
                    $top_header=$prefix['header_right'];
                    foreach((array)$top_header as $icon){
                    ?>

                    <li class="social-item"  >
                        <a class="social-link text-light" href="<?php echo $icon['add_url']; ?>">
                          <i class="<?php echo $icon['add_social_icon']; ?>" aria-hidden="true"></i>
                        </a>
                    </li>
            <?php } ?>


                <li class="social-item">
                    <a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a>
                </li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
 
            </ul>  
            <div class="header-content">
                <h4 class="header-subtitle" ><?php echo $prefix["short_title"]; ?></h4>
                <h1 class="header-title"><?php echo $prefix["hero_title"]; ?></h1>
                <h6 class="header-mono" ><?php echo $prefix["hero_description"]; ?> | <?php echo $prefix["hero_description2"]; ?></h6>
                <button class="btn btn-primary btn-rounded"><a href="<?php echo $buttons1["btn_1_url"]; ?>"><i class="<?php echo $buttons1["btn_icon"]; ?>"></i></a><?php echo $buttons1["btn_1"]; ?></button>
            </div>
        </div>
    </header>
	<?php wp_head();  ?>



 



                            

 



 



                            
