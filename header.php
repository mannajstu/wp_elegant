


<?php global $wp_elegant ;?>


 <html <?php language_attributes(); ?> class="no-js no-svg">
 <!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
   
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">

<title><?php bloginfo('name')?></title>


        <meta name="keywords" content="Wedding DJ Miami, Mitzvah DJ, Fort Lauderdale DJ, Miami Wedding DJ Prices, Miami Djs For Hire, All Inclusive DJ Services, DJ Services Miami"/>
       
       <meta name="Description" content="Elegant Dreams, Premium DJ Entertainment, Uplighting, Photobooth Rental & More. The Finest Wedding, Mitzvah, Sweet 16 & Quinceanera DJ Provider in South Florida."/>
        <meta name="author" content="Miami Wedding DJ - Mitzvah DJ - Miami Photobooth"/>
      <meta name="DC.title" content="Miami Wedding DJ - Mitzvah DJ - Miami Photobooth" />
         <meta name="geo.region" content="US-FL" />
             <meta name="geo.placename" content="Miami" />
             <meta name="geo.position" content="25.76168;-80.19179" />
            <meta name="ICBM" content="25.76168, -80.19179" />
<meta name="p:domain_verify" content="35ee37479c6e4012a9ca48927b881923"/>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108804984-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108804984-1');
</script>
       
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
<?php wp_head(); ?>
    </head>

    <body>
    <?php if(is_page('home') ):?>
         <?php require_once get_template_directory() .'/template-parts/menu.php';?> 



 
        <?php require_once get_template_directory() .'/template-parts/top-section.php';?> 
        <?php require_once get_template_directory() .'/template-parts/second-section.php';?>
<?php else:?>
   <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">      
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img alt="Elegant" style="height:1.5em" src="<?php echo $wp_elegant['top-section-logo']['url']; ?>" ></a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
       
        
        <?php wp_nav_menu(array(
            'theme_location' => 'page-menu',
            'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbar-menu',
            'menu_class' => 'nav navbar-nav navbar-center',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker(),
        )); ?>
        <!-- /.navbar-collapse -->
    </div>   
</nav>
<?php endif?>
           
             