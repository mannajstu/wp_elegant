<div class="portfolio-section main-container scroll-section clearfix" data-anchor="portfolio">

                <section class="container">

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <div class="page-sub-title textcenter box">
                                <h2><a name="mitv"><?php echo $wp_elegant['gallery-section-title']?></a></h2>
                                <div class="line"></div>
                            </div>

                        </div><!-- end .col-lg-12 -->

                        <div class="filter-options box">
                            <button class="filter-btn" data-group="all">Categories Of Service</button>
                            <button class="filter-btn" data-group="wedx">Weddings</button>
                            <button class="filter-btn" data-group="sweetx">Sweet Sixteen</button>
                            <button class="filter-btn" data-group="quincex">Quinceaneras</button>
                            <button class="filter-btn" data-group="mitzx">Mitzvah</button>
                            <button class="filter-btn" data-group="corpx">Corporate Events</button>
                            <button class="filter-btn" data-group="lifex">Life Celebrations</button>
                            <button class="filter-btn" data-group="schoolx">School Events</button>
                        </div><!-- end .filter-options -->

                        <div class="portfolio" id="grid">

                            
<!-- start galler image box -->
                       
                      <?php foreach ($wp_elegant['gallery-section-description'] as $gallerydes) : ?>
    <?php if($gallerydes['url']=='project-1' ||$gallerydes['url']=='project-8' ||$gallerydes['url']=='project-15'):?>
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-4 project clearfix" data-groups='["wedx"]' >
       <?php require get_template_directory() .'/template-parts/gallery-image-box.php';?> 
  </div><!-- end .project -->
<?php endif;?>
                  <?php endforeach;?>

                <?php foreach ($wp_elegant['gallery-section-description'] as $gallerydes) : ?>
    <?php if($gallerydes['url']=='project-3'):?>
 <div class="col-xs-12 col-sm-6 col-md-3 col-lg-4 project clearfix" data-groups='["quincex"]'>
       <?php require get_template_directory() .'/template-parts/gallery-image-box.php';?> 
</div><!-- end .project -->
<?php endif;?>
                  <?php endforeach;?>

                            


                                 <?php foreach ($wp_elegant['gallery-section-description'] as $gallerydes) : ?>
    <?php if($gallerydes['url']=='project-4' ||$$gallerydes['url']=='project-10'):?>
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-4 project clearfix" data-groups='["mitzx"]'>

    
       <?php require get_template_directory() .'/template-parts/gallery-image-box.php';?> 
 </div><!-- end .project -->
<?php endif;?>
                  <?php endforeach;?>

                           <?php foreach ($wp_elegant['gallery-section-description'] as $gallerydes) : ?>
    <?php if($gallerydes['url']=='project-5'):?>
 <div class="col-xs-12 col-sm-6 col-md-3 col-lg-4 project clearfix" data-groups='["corpx"]'>
       <?php require get_template_directory() .'/template-parts/gallery-image-box.php';?> 
</div><!-- end .project -->
<?php endif;?>
                  <?php endforeach;?>

                            

<?php foreach ($wp_elegant['gallery-section-description'] as $gallerydes) : ?>
    <?php if($gallerydes['url']=='project-6'):?>
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-4 project clearfix" data-groups='["lifex"]'>

       <?php require get_template_directory() .'/template-parts/gallery-image-box.php';?> 
</div><!-- end .project -->
<?php endif;?>
                  <?php endforeach;?>

                            
                              <?php foreach ($wp_elegant['gallery-section-description'] as $gallerydes) : ?>
    <?php if($gallerydes['url']=='project-7'):?>
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-4 project clearfix" data-groups='["schoolx"]'>
       <?php require get_template_directory() .'/template-parts/gallery-image-box.php';?> 
</div><!-- end .project -->
<?php endif;?>
                  <?php endforeach;?>
                            
                     <?php foreach ($wp_elegant['gallery-section-description'] as $gallerydes) : ?>
    <?php if($gallerydes['url']=='project-9'||$gallerydes['url']=='project-2'):?>
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-4 project clearfix" data-groups='["sweetx"]'>
       <?php require get_template_directory() .'/template-parts/gallery-image-box.php';?> 
 </div><!-- end .project -->
<?php endif;?>
                  <?php endforeach;?>

                           
           <?php foreach ($wp_elegant['gallery-section-description'] as $gallerydes) : ?>
    <?php if($gallerydes['url']=='project-12'):?>
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-4 project clearfix" data-groups='["corpx"]'>
       <?php require get_template_directory() .'/template-parts/gallery-image-box.php';?> 
</div><!-- end .project -->
<?php endif;?>
                  <?php endforeach;?>   
                            
                            
                                <?php foreach ($wp_elegant['gallery-section-description'] as $gallerydes) : ?>
    <?php if($gallerydes['url']=='project-13'):?>
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-4 project clearfix" data-groups='["lifex"]'>
       <?php require get_template_directory() .'/template-parts/gallery-image-box.php';?> 
</div><!-- end .project -->
<?php endif;?>
                  <?php endforeach;?>  

                 
                              

                               

                            
                            
        <!-- end of gallery image box -->



                        </div><!-- end .portfolio -->

                    </div><!-- end .row -->

                </section><!-- end .container -->

            </div><!-- end .portfolio-section -->
            