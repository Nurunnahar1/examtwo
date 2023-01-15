<section class="section" id="service">
        <div class="container">
            <h2 class="mb-5 pb-4"><span class="text-danger">My</span> Services</h2>
            <div class="row">
            <?php $prefix= get_option('_prefix');
                $Services_details=$prefix['Services_details'];
                                
              foreach((array)$Services_details as $Services_dtl){

                        ?>
                 <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="<?php echo  $Services_dtl['Services_icon']; ?>" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark"><?php echo  $Services_dtl['Services_title']; ?></h5>
                            <P class="subtitle"><?php echo  $Services_dtl['Services_description']; ?></P>
                        </div>
                    </div>
                </div>


            <?php } ?>
             </div>
        </div>
    </section>