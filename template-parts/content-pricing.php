<section class="section bg-custom-gray" id="price">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">Packs</span> Pricing</h1>
            <div class="row align-items-center">

            <?php
                 $args = array(
                'post_type' => 'exam_pricing_post',
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) :  
                    while ( $the_query->have_posts() ) : 
                    $the_query->the_post(); 
                       if ( has_post_thumbnail() ) {
                            $image_url = get_the_post_thumbnail_url(get_the_ID());
                        }
                        $postid = $the_query->post->ID;
                        $price = get_post_meta($postid, 'price', true);
            ?>




                <div class="col-md-6 col-lg-3">
                    <div class="price-card text-center mb-4">
                        <h3 class="price-card-title"><?php echo get_post_meta(get_the_ID(),'what_type_price',true); ?></h3>
                        <div class="price-card-cost">
                            <sup class="ti-money"></sup>
                            <span class="num"><?php echo get_post_meta(get_the_ID(),'ampunt',true); ?></span>
                            <span class="date">MO</span>
                        </div>
                        <ul class="list">

                        <?php
                        // for feather
                        $postfeature=get_post_meta($postid,'feature',true);
                        if(!empty($postfeature)){
                            foreach((array)$postfeature as $feature){
                                ?>
                                 <li class="list-item text-center"><span class="text-muted"><?php echo $feature; ?></span></li>
                                  
                                <?php
                            }
                        }


                        ?>


 
                        </ul>
                        <button class="btn btn-primary btn-rounded w-lg"><?php echo get_post_meta(get_the_ID(),'btn_price',true); ?></button>
                    </div>
                </div>

                    <?php endwhile; ?>

                    <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
             </div>
        </div>
    </section>