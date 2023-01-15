<section class="section" id="resume">
        <div class="container">
            <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
            <div class="row">
            <?php $prefix= get_option('_prefix'); ?>
                <div class="col-md-6 col-lg-4">
                            <div class="card">
                        <div class="card-header">
                                    <div class="mt-2">
                                        <h4><?php echo $prefix['Resume_title']; ?></h4>
                                        <span class="line"></span>  
                                    </div>
                                </div>
                                <div class="card-body">
                                <?php
                            $Resume=$prefix['Resume'];
                            $Resume_detail=$Resume['Resume_detail'];
                            foreach((array)$Resume_detail as $Resume_details){
                            ?>
                                    <h6 class="title text-danger"><?php echo $Resume_details['Resume_time']; ?></h6>
                                    <P><?php echo $Resume_details['Resume_designation']; ?></P>
                                    <P class="subtitle"><?php echo $Resume_details['Resume_description']; ?></P>
                                    <hr>

                                    <?php } ?>
                               </div>
                            </div>
                </div>
                 <div class="col-md-6 col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="mt-2">
                                <h4><?php echo $prefix['Education_title']; ?></h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body">
                        <?php
                            $Education_detail=$prefix['Education_detail'];
                            $Education_details=$Education_detail['Education_details'];
                            foreach((array)$Education_details as $Education_dtl){
                            ?>




                            <h6 class="title text-danger"><?php  echo  $Education_dtl['education_year']; ?></h6>
                            <P><?php  echo  $Education_dtl['department']; ?></P>
                            <P class="subtitle"><?php  echo  $Education_dtl['education_description']; ?></P>
                            <hr>
                               <?php }     ?>

 
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2"><?php echo $prefix['Skills_title']; ?></h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body pb-2">




                                    <?php
                                $Skills_detail=$prefix['Skills_detail'];
                                
                                foreach((array)$Skills_detail as $Skills_dtl){
                                ?>
                                    <h6><?php echo  $Skills_dtl['Skill']; ?></h6>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 97%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                <?php } ?>
 

                        </div>
                    </div>
                    <div class="card">
                       <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2"><?php  echo $prefix['Languages_title']; ?></h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body pb-2">

                                 <?php
                                    $Languages_detail=$prefix['Languages_detail'];
                                    
                                    foreach((array)$Languages_detail as $Languages_dtl){
                                    ?>
                                <h6><?php echo  $Languages_dtl['Language']; ?></h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                   <?php } ?>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>