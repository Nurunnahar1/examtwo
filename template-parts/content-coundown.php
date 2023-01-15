<section class="section bg-dark text-center">
        <div class="container">
            <div class="row text-center">
            <?php $prefix= get_option('_prefix');
                   $coundown_details=$prefix['coundown_details'];
                                
                     foreach((array)$coundown_details as $coundown_dtl){

                        ?>
                 <div class="col-md-6 col-lg-3">
                    <div class="row ">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="<?php echo $coundown_dtl['coundown_icon']; ?>"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40"><?php echo $coundown_dtl['coundown_number']; ?></h1>
                            <p class="text-light mb-1"><?php echo $coundown_dtl['what_type_coundown']; ?></p>
                        </div>
                    </div>
                </div>


<?php } ?>
             </div>
            
        </div>
    </section>
