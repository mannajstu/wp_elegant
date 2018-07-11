<?php

/**
 * Template Name: Package Page
 *
 * @package WP Elegant
 
 */

get_header(); ?>
<!-- =========================
     Pre-loader 
============================== -->
<style type="text/css">
.dodo{
     margin-left: 5px;
    text-transform: capitalize;
    color: #919ca5;
    margin-bottom: 1px; 
}
.checkdate{
    width: 20% !important;
    float: left !important;
    margin-right: 5px !important;
        margin-bottom: 10px;
}

</style>



<!-- =========================
     Section1 - Header   
============================== -->
  <div class="jumbotron" style="background-image: url('<?php echo $wp_elegant['package-choosen-backgorud-image']['url']; ?>');">
    <div class="container"> 
      <div class="row">
        <!-- Header Left -->
        <div class="col-sm-7">
          <div class="logo"><a href="<?php echo get_home_url(); ?>"><img alt="" src="<?php echo $wp_elegant['top-section-logo']['url'] ?>"></a></div>
          <div class="verticle-line">
            <h1>You have chosen <br>
              the 
              <?php 
              $queryURL = parse_url(html_entity_decode(esc_url(add_query_arg($arr_params))));
              parse_str($queryURL['query'], $getVar);
              if (!empty($getVar)) {
                $name = $getVar['var'];
                echo $name;
              } else {
                echo "No";
              }
              ?>
              PACKAGE</h1>
          </div>
          
        </div>
        <!-- /End Header Left --> 
        <!-- Header Form -->
        <div class="col-sm-5" id="join-us-form" style="    background: white;
    padding: 0;"> 
          <!-- Form Title -->
            <h2 class="form-title"><?php echo $wp_elegant['package-choosen-form-title'] ?>
          <span class="arrow-down"></span>
              </h2>
          <!--- /End Form Title -->




    <div class="form-bg">
        
          <?php echo do_shortcode($wp_elegant['package-choosen-form']); ?>
        
        
      
    </div>
         



          <!-- /End Form --> 
        </div>
        <!-- /End Header Form --> 
      </div>
    </div>
  </div>

<!-- =========================
     Section2 - Advertised   
============================== -->
<div id="advertised-section">
  <div class="container"> 
    <div class="row">
    
    <?php foreach ($wp_elegant['package-choosen-name'] as $packname) : {
      # code...
    } ?>
    <div class="col-md-4">
      <div class="advertised">
        <p><a href="<?php echo get_home_url(); ?>#pack" style="color:white;text-transform:uppercase;text-decoration:none"><?php echo $packname; ?></a></p>
      </div>
    </div>
    <?php endforeach; ?>
    <!-- /End Box4 --> 
  </div>
</div>
</div>

</div>




<footer class="copyright-section">
  <div class="container">
    <div class="col-md-12 ">
     <?php echo $wp_elegant['copy-right-text']; ?>
    </div>
  </div>
</footer>


<?php

/**
 * The package template file
 */

get_footer(); ?>

