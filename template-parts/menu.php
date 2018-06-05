<div class="menu-btn">

            <a id="menu-trigger"  href="#0"><span class="menu-icon"></span></a>

            <a id="close-trigger" href="#0" class="invisible-element"><span class="close-icon"></span></a>


        </div><!-- end .menu-btn -->

        <nav id="menu-nav">

            <ul class="main-menu clearfix">
                <?php if(is_page('home')):?>
                <li class="menu-item active-element">
                    <a href="#" data-scroll="home" data-anchor-offset="0">Home</a>
                </li>
                
                </li>
                <?php else:?>
                    <li class="menu-item active-element">
                    <a href="<?php echo get_home_url();?>" >Home</a>
                </li>
            <?php endif;?>
            <li class="menu-item active-element">
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'About' ) ) ); ?>" >About</a></li>
            <?php if(is_page('about')):?>
                <li class="menu-item">
                    <a href="#" data-scroll="services" data-anchor-offset="-2">Type of Services</a>
                </li>
                <?php endif;?>
                <?php if(is_page('home')):?>
                <li class="menu-item">
                    <a href="#" data-scroll="testimonials" data-anchor-offset="-2">Testimonials</a>
                </li>
                <li class="menu-item">
                    <a href="#" data-scroll="portfolio" data-anchor-offset="-2">Gallery of Services</a>
                </li>
                
                
                <li class="menu-item">
                    <a href="#" data-scroll="our mission" data-anchor-offset="-2">Packages</a>
                </li>
                <?php endif;?>
                <li class="menu-item">
                    <a href="#" data-scroll="contact" data-anchor-offset="-2">Contact</a>
                </li>
            </ul><!-- end .main-menu -->

        </nav><!-- end .menu-nav -->

     