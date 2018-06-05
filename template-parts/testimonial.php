 <div class="testimonials-section fullscreen background parallax scroll-section clearfix" style="background-image:url('<?php echo $wp_elegant['testimonial-section-backgroud-image']['url']?>');" data-img-width="1600" data-img-height="1064" data-diff="100"  data-anchor="testimonials">

                <div class="main-parallax-content">

                    <div class="second-parallax-content">

                        <section class="container">

                            <div class="row">

                                <div class="parallax-content clearfix">

                                    <div class="col-lg-12">

                                        <div class="page-sub-title textcenter box">
                                            <h2><?php echo $wp_elegant['testimonial-section-title']?></h2>
                                            <div class="line"></div>
                                        </div><!-- end .page-sub-title -->


<!-- // strat of testimonial section description -->
                                       <div class="list_carousel box">
                                            <ul id="carousel-testimonial" class="carousel-testimonial">
<?php foreach ($wp_elegant['testimonial-section-description'] as $textdes) : ?>

<li class="testimonial">
                                                      <div class="testimonial-centent">
                                                        <figure class="avatar">
                                                            <img width="80" height="80" src="<?php echo $textdes['image']?>" alt="Wedding Dj Miami">
                                                        </figure>
                                                        <p><?php echo $textdes['description']?> </p>
                                                    </div>
                                                </li><!-- end .testimonial -->
                                                
<?php endforeach ;?>  





                               </ul><!-- end #carousel-testimonial -->
                                        </div><!-- end .list_carousel -->

                                    </div><!-- end .col-lg-12 -->

                                </div><!-- end .parallax-content -->

                            </div><!-- end .row -->

                        </section><!-- end .container -->

                    </div><!-- end .second-parallax-content -->

                </div><!-- end .main-parallax-content -->

            </div><!-- end .testimonials-section -->

            
