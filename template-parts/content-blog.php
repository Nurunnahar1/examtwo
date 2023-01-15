<section class="section" id="blog">
        <div class="container">
            <h2 class="mb-5">Latest <span class="text-danger">News</span></h2>
            <div class="row">


                <?php
                $args = array(
                'post_type' => 'post',
               // 'orderby' => 'date',
                //'order' => 'DESC',
                'posts_per_page' => 3,
                );

                $this_query = new WP_Query( $args );
                 if ( $this_query->have_posts() ) :  
                while ( $this_query->have_posts() ) :
                    $this_query->the_post(); 
                    if ( has_post_thumbnail() ) {
                        $image_url = get_the_post_thumbnail_url(get_the_ID());
                    }
                
                    ?>

                 <div class="blog-card">
                    <div class="img-holder">
                        <img src="<?php echo $image_url; ?>" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="content-holder">
                        <a href="<?php the_permalink(); ?>"><h6 class="title"><?php the_title(); ?></h6></a>
                        

                        <p class="post-details">
                            <a href="#">By: Admin</a>
                            <a href="#"><i class="ti-heart text-danger"></i> 234</a>
                            <a href="#"><i class="ti-comment"></i> 123</a>
                        </p>
                        
                        <p><?php the_content(); ?></p>

                        <p><b><?php echo get_post_meta(get_the_ID(),'post_short_content',true); ?></b></p>
                        <p><?php echo get_post_meta(get_the_ID(),'post_short_content2',true); ?></p>

                        <a href="<?php the_permalink(); ?>" class="read-more">Read more <i class="ti-angle-double-right"></i></a>
                    </div>
                </div><!-- end of blog wrapper -->

                <?php
                endwhile;
                else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts found.' ); ?></p>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
 

            </div>
        </div>
    </section>