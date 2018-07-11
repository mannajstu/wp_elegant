<div class="box animated fadeInDownBig  clearfix">
	<figure>
		<img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="wedding dj">
	</figure>
	<div class="animated-content  clearfix">
		<h3 class="dinamic"><?php echo the_title();?></h3>
		<a href="<?php the_permalink()?>" target="_blank" class="dinamic">
			<i data-toggle="tooltip" data-original-title="Read more" class="fa fa-angle-right tooltip-link"></i>
		</a>
		<a href="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="dinamic" data-rel="prettyPhoto">
			<i data-toggle="tooltip" data-original-title="View" class="fa fa-eye tooltip-link"></i>
		</a>
		</div><!-- end .animated-content -->
		</div><!-- end .box -->