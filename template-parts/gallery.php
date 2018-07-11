<div class="portfolio-section main-container scroll-section clearfix" data-anchor="portfolio">
  <section class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="page-sub-title textcenter box">
          <h2><a name="mitv"><?php echo $wp_elegant['gallery-section-title'] ?></a></h2>
          <div class="line"></div>
        </div>
        </div><!-- end .col-lg-12 -->
        <div class="filter-options box ">
          <button class="filter-btn" data-group="all">Categories Of Service</button>
          <?php $category_detail = get_categories(); //$post->ID
          foreach ($category_detail as $cd): ?>
          <button class="filter-btn" data-group="<?php echo $cd->cat_name; ?>"><?php echo $cd->cat_name; ?></button>
          <?php endforeach?>
          </div><!-- end .filter-options -->
          <div class="portfolio shuffle" id="grid" style="position: relative; overflow: hidden;  transition: height 250ms ease-out;">
            <!-- start galler image box -->
            <?php $myposts = get_posts('numberposts=-1');
            if(!empty($myposts)):
            foreach ($myposts as $post): setup_postdata($post)?>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-4 project clearfix shuffle-item filtered"   <?php $category_detail = get_the_category(); //$post->ID
          foreach ($category_detail as $cd): ?>
            data-groups="[&quot;<?php echo $cd->cat_name; ?>&quot;]" 
            <?php endforeach?>  style="position: absolute; top: 0px; left: 0px;
              visibility: visible; transition: transform 250ms ease-out, opacity 250ms ease-
              out;"><?php require get_template_directory() . '/template-parts/gallery-image-box.php';?>   </div><!-- end .project -->
              <?php endforeach;?>
              <?php wp_reset_postdata();endif;?>

              <!-- end of gallery image box -->
              </div><!-- end .portfolio -->
              </div><!-- end .row -->
              </section><!-- end .container -->
              </div><!-- end .portfolio-section -->