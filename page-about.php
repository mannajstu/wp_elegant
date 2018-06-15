
 <?php
/**
 * Template Name: About Page
 *
 * @package WP Elegant
 
 */

get_header(); ?>
  


<div  class="services-section main-container scroll-section clearfix" data-anchor="services">
                <section class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="page-sub-title textcenter box">
                                <h2>Type of Services</h2>
                                <div class="line"></div>
                            </div><!-- end .page-sub-title -->

                        </div><!-- end .col-lg-12 -->

                        <div class="services">

                            <div class="col-md-3 col-sm-6">

                                <article class="service box">

                                    <i class="fa fa-music"></i>

                                    <div class="service-info">
                                        <div class="service-content beige-color">

                                                <?php echo $wp_elegant['type-section-descriptio-1'];?>
                                                
                                          <h4> <a href="#" class="read-more dinamic" data-type="<?php echo $wp_elegant['type-section-project-no-1'];?>" btn green-color btn-lg">READ MORE>> </a>
                                            </h4>
                                            </a>


                                        </div>
                                    </div><!-- end .service-info -->

                                </article><!-- end .service -->

                            </div><!-- end .col-md-3 -->

                            <div class="col-md-3 col-sm-6">

                                <article class="service box">

                                    <i class="fa fa-lightbulb-o "></i>

                                    <div class="service-info">
                                        <div class="service-content beige-color">
                                              <?php echo $wp_elegant['type-section-descriptio-2'];?>
                                                
                                          <h4> <a href="#" class="read-more dinamic" data-type="<?php echo $wp_elegant['type-section-project-no-2'];?>" btn green-color btn-lg">READ MORE>> </a>
                                            </h4>
                                            </a>

                                        </div>
                                    </div><!-- end .service-info -->

                                </article><!-- end .service -->

                            </div><!-- end .col-md-3 -->

                            <div class="col-md-3 col-sm-6">

                                <article class="service box">

                                    <i class="fa fa-camera-retro"></i>

                                    <div class="service-info">
                                        <div class="service-content beige-color">
                                              <?php echo $wp_elegant['type-section-descriptio-3'];?>
                                                
                                          <h4> <a href="#" class="read-more dinamic" data-type="<?php echo $wp_elegant['type-section-project-no-3'];?>" btn green-color btn-lg">READ MORE>> </a>
                                            </h4>
                                            </a>

                                        </div>
                                    </div><!-- end .service-info -->

                                </article><!-- end .service -->

                            </div><!-- end .col-md-3 -->

                         

                            <div class="col-md-3 col-sm-6">

                                <article class="service box">

                                    <i class="fa fa-cutlery"></i>

                                    <div class="service-info">
                                        <div class="service-content beige-color">
                                             <?php echo $wp_elegant['type-section-descriptio-4'];?>
                                                
                                          <h4> <a href="#" class="read-more dinamic" data-type="<?php echo $wp_elegant['type-section-project-no-4'];?>" btn green-color btn-lg">READ MORE>> </a>
                                            </h4>
                                            </a>
                                        </div>
                                    </div><!-- end .service-info -->

                                </article><!-- end .service -->

                           </div><!-- end .col-md-3 -->
                           
                            

           

                       </div><!-- end .services -->

                    </div><!-- end .row -->

              </section><!-- end .container -->

            </div><!-- end .services-section --> 
            

          

      
          
<?php
/**
 * The main template file
*/

get_footer(); ?>
