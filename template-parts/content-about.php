
<?php $prefix= get_option('_prefix');
      $button=$prefix["button_who"];
      $buttons1=$button["button__who"];
?>
<div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light"><?php echo $prefix['short_title_who']; ?></h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3"><?php echo $prefix['hero_title_who']; ?></h5>
                <p class="mt-20"><?php echo $prefix['hero_description_who']; ?></p>
                <button class="btn btn-outline-danger"><i class="icon-down-circled2 "></i><?php echo $buttons1['btn_1_who']; ?></button>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light"><?php echo $prefix['short_title_Personal']; ?></h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                <?php
               
                    $Personal_dtl=$prefix['Personal_dtl'];
                    $Personal_details = $Personal_dtl['Personal_details'];
                    foreach((array)$Personal_details as $per_dtl){
                    ?>

                        <li><span><?php echo $per_dtl['Personal_detail_info_name']; ?></span> : <?php echo $per_dtl['Personal_detail_info_dtl']; ?></li>

 
                <?php } ?>

                </ul>
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


                    <!-- <li class="social-item">
                        <a class="social-link" href="#">
                            <i class="ti-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-github" aria-hidden="true"></i></a></li> -->





                </ul>  
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light"><?php echo $prefix['expertise']; ?></h3>
                <span class="line mb-5"></span>

<?php
$Expertise=$prefix['Expertise'];
$Expertise_detail=$Expertise['Expertise_detail'];
foreach((array)$Expertise_detail as $Expertise_details){
 ?>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="<?php echo $Expertise_details['Expertise_icon']; ?>"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6><?php echo $Expertise_details['Expertise_title']; ?></h6>
                        <p class="subtitle"><?php echo $Expertise_details['Expertise_description']; ?></p>
                        <hr>
                    </div>
                </div>
  <?php } ?>
 
            </div>
        </div>
    </div>