<?php

/**
 *
 *
 * @package WP Elegant

 */

get_header();?>


<div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">

            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">

                <div class="recent-post">
                  <!-- start single post -->
                 <?php
$args         = array('numberposts' => '3');
$recent_posts = wp_get_recent_posts($args);
foreach ($recent_posts as $recent): ?>

                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="<?php echo get_permalink() ?>">
                     <img src="<?php if (has_post_thumbnail($recent["ID"])) {
    echo get_the_post_thumbnail_url($recent["ID"], '');
}?>" alt=""> </a>
                    </div>
                    <div class="pst-content">
                      <p><a href="<?php echo get_permalink($recent["ID"]) ?>"> <?php echo $recent["post_title"]; ?></a></p>
                    </div>
                  </div>
<?php endforeach;?>
                 <?php wp_reset_query();?>
                  <!-- End single post -->



                </div>
              </div>
              <!-- recent end -->
            </div>


                    </div>
        </div>
        <!-- End left sidebar -->
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- single-blog start -->
              <?php if (have_posts()): while (have_posts()): the_post();?>

 <article class="blog-post-wrapper">
                        <div class="post-thumbnail">
                        <?php the_post_thumbnail();?>
                        </div>
<br>
                        <div class="post-information ">
                              <h2><p><a><?php the_title();?></a> </p></h2>
                            </div>

                          <div class="entry-content">
                            <p><?php the_content();?></p>
                          </div>
                        </div>
                      </article>
                      <div class="clear"></div>
                      <?php endwhile;?>
                  <?php endif;?>
              <!-- single-blog end -->
            </div>
          </div>
        </div>
      </div>
    </div>


  <?php get_footer();?>

