
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

<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div id="object"></div>
        </div>
    </div>
</div>

<!-- =========================
     Section1 - Header   
============================== -->
  <div class="jumbotron">
    <div class="container"> 
      <div class="row">
        <!-- Header Left -->
        <div class="col-sm-7">
          <div class="logo"><a href="#"><img alt="" src="packf/img/logo.jpg"></a></div>
          <div class="verticle-line">
            <h1>You have chosen <br>
              the 
              <?php 
              $queryURL = parse_url( html_entity_decode( esc_url( add_query_arg( $arr_params ) ) ) );
parse_str( $queryURL['query'], $getVar );
if(!empty($getVar))
  {
    $name = $getVar['var'];
      echo $name;
    }
    else{
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
            <h2 class="form-title">WEDDING & EVENT PACKAGES
          <span class="arrow-down"></span>
              </h2>
          <!--- /End Form Title -->




    <div class="form-bg">
        
          <?php echo do_shortcode( '[contact-form-7 id="188" title="Contact Form"]' ); ?>
        
        
      
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
    
    <!-- Box2 -->
    <div class="col-md-4">
      <div class="advertised">
        <p><a href="index.html#pack" style="color:white;text-transform:uppercase;text-decoration:none">Silver</a></p>
      </div>
    </div>
    <!-- /End Box2 --> 
    
    <!-- Box3 -->
    <div class="col-md-4">
      <div class="advertised">
       <p><a href="index.html#pack" style="color:white;text-transform:uppercase;text-decoration:none">Gold</a></p>
      </div>
    </div>
    <!-- /End Box3 --> 
    
    <!-- Box4 -->
    <div class="col-md-4">
      <div class="advertised">
        <p><a href="index.html#pack" style="color:white;text-transform:uppercase;text-decoration:none">Platinum</a></p>
      </div>
    </div>
    <!-- /End Box4 --> 
  </div>
</div>
</div>

</div>



<!-- =========================
     Section9 - Copyright   
============================== -->
<footer class="copyright-section">
  <div class="container">
    <div class="col-md-12 ">
      <P>© Copyright 2016 <a href="http://elegantdreams.net/">Elegant Dreams, Inc., Weston, Fl 33327</P>
    </div>
  </div>
</footer>

<!-- =========================
     Scripts   
============================== -->
<script src="packf/js/jquery.min.js"></script>
<script src="packf/js/jquery.ajaxchimp.js"></script>
<script type="packf/text/javascript" src="js/bootstrap.min.js"></script>
<script src="packf/js/custom.js"></script>
<?php
/**
 * The package template file
*/

get_footer(); ?>

