
    <div class="team-section main-container scroll-section" data-anchor="our mission">

                <section class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="page-sub-title textcenter box">
                                <h2><?php echo $wp_elegant['pricing-section-title']?></h2>
                                <div class="line"></div>
                            </div>

                        </div><!-- end .col-lg-12 -->

                        <div class="team">
                        
                             <div class="col-md-2 col-sm-2 col-lg-2"></div>
                            <div class="col-md-8 col-sm-8 col-lg-8">
                            <div style="text-align: center; margin-bottom: 25px;font-size: 15px;">
<h3><?php echo $wp_elegant['pricing-section-title-below']?></h3>
                            </div>
                            </div><!-- end .team-member  -->
                            <div class="col-md-2 col-sm-2 col-lg-2"></div>

                        </div><!-- end .team -->

                    </div><!-- end .row -->

                </section><!-- end .container -->

            </div><!-- end .team-section -->

            <div class="pricing-section fullscreen background parallax" style="background-image:url('<?php echo $wp_elegant['pricing-section-backgroud-image']['url']?>');" data-img-width="1600" data-img-height="1064" data-diff="100"  data-anchor="testimonials">

                <div class="main-parallax-content">

                    <div class="second-parallax-content">

                        <section class="container">

                            <div class="row">

                                <div class="parallax-content clearfix">

                                    <div class="col-lg-12">

                                        <div class="page-sub-title textcenter box">
                                            <h2><strong><?php echo $wp_elegant['pricing-list-section-title']?></strong></h2>
                                            <div class="line"></div>
                                                                 
                                        </div>

                                      <div class="mini-about-us box beige-color textleft">

<?php echo $wp_elegant['pricing-list-section-description']?>
                                    </div><!-- end .mini-about-us -->

                                        <br>
                                    </div>


                                     <div class="pricing-tables">



<?php foreach ($wp_elegant['pricing-list-section-package'] as $pricepackage) : ?>
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 box ">
                                           <?php echo $pricepackage['description'];?>
                                        </div><!-- end .col-xs-4 -->


           <?php endforeach ;?>                          
                                        
                       </div><!-- end .pricing-tables -->

                                  <div class="clearfix"></div>
<?php if(!empty($wp_elegant['pricing-list-include-description'])):?>
<div class="mini-about-us box beige-color textleft ">
<?php echo $wp_elegant['pricing-list-include-description'];?>
                                   </div><!-- end .mini-about-us -->
                                    
                   <?php endif;?>                 
                                </div><!-- end .parallax-content -->
        
                            </div><!-- end .row -->
                                         

                        </section><!-- end .container -->

                    </div><!-- end .second-parallax-content -->

                </div><!-- end .main-parallax-content -->

            </div><!-- end .pricing-section -->