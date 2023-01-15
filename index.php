<?php get_header();  ?>
      <!-- Navbar Start -->
      <?php get_template_part( 'template-parts/content','navbar' );    ?>
    <!-- Navbar End --> 
       <!-- About Start -->
       <?php get_template_part( 'template-parts/content','about' );    ?>
    <!-- About End -->

     <!--Resume Section-->
     <?php get_template_part( 'template-parts/content','resume' );    ?>
    <!-- Resume End -->

    <!--coundown Section-->
    <?php get_template_part( 'template-parts/content','coundown' );    ?>
    <!-- coundown End -->

    <!--service Section-->
    <?php get_template_part( 'template-parts/content','service' );    ?>
    <!-- service End -->

    <!--pricing Section-->
    <?php get_template_part( 'template-parts/content','pricing' );    ?>
    <!-- pricing End -->

    <!--pricing Section-->
    <?php get_template_part( 'template-parts/content','detailme' );    ?>
    <!-- pricing End -->
	 

   <!-- Portfolio Section  start-->
   <?php get_template_part( 'template-parts/content','portfolio' );    ?>
    <!-- Portfolio Section  end-->

    <!--  portfolio section -->
	<?php get_template_part( 'template-parts/content','blog' );    ?>
    <!-- Portfolio Section  end-->

    <!--  map section -->
	<?php get_template_part( 'template-parts/content','map' );    ?>
    <!-- map Section  end-->
  <!-- Footer Start -->
  <?php  get_footer();  ?>
