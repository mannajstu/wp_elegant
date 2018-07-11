<?php

/**
 *
 *
 * @package WP Elegant

 */

get_header();?>

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
    'theme_location'  => 'page-menu',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'navbar-menu',
    'menu_class'      => 'nav navbar-nav navbar-center',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
));?>
        <!-- /.navbar-collapse -->
    </div>
</nav>
<div class="container">

    </div>


  <?php get_footer();?>

