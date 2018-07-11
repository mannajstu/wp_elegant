
<div  class="services-section main-container scroll-section clearfix" data-anchor="services" >
                <section class="container"  >


                    <div class="row">
                    <div class="parallax-content clearfix">
                        <div class="col-lg-12">

                            <div class="page-sub-title textcenter box">
                                <h2>Type of Services</h2>
                                <div class="line"></div>
                            </div><!-- end .page-sub-title -->

                        </div><!-- end .col-lg-12 -->

                        <div class="services" >
<?php $args = array('post_type' => 'service', 'posts_per_page' => 5);
$services   = new WP_Query($args);
if ($services->have_posts()): while ($services->have_posts()): $services->the_post();

        ?>
                                    <div class="col-md-20 col-sm-6" >

                                        <article class="service box">

                                            <i class="<?php echo strip_tags( get_the_excerpt() );?>"></i>

                                            <div class="service-info">
                                                <div class="service-content beige-color">
         <h3><strong><?php the_title();?></strong></h3>
                                                        <?php the_content();?>

                                                  <h4> <a href="<?php the_permalink();?>" class="dinamic" target="_blank" btn green-color btn-lg">READ MORE>> </a>
                                                    </h4>
                                                    </a>


                                                </div>
                                            </div><!-- end .service-info -->

                                        </article><!-- end .service -->

                                    </div><!-- end .col-md-20 -->

        <?php endwhile;
    wp_reset_query();?>

          <?php endif;?>



                       </div><!-- end .services -->

                    </div><!-- end .row -->

              </section><!-- end .container -->

            </div><!-- end .services-section -->