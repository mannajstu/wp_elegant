<?php if(is_page('home')):?>
<div class="menu-btn">

            <a id="menu-trigger"  href="#0"><span class="menu-icon"></span></a>

            <a id="close-trigger" href="#0" class="invisible-element"><span class="close-icon"></span></a>


        </div><!-- end .menu-btn -->

        <nav id="menu-nav">

            <ul class="main-menu clearfix">
               
               
                </li>
                
                    <li class="menu-item active-element">
                    <a href="<?php echo get_home_url();?>" >Home</a>
                </li>
            
            <li class="menu-item">
                    <a href="#" data-scroll="about" data-anchor-offset="-2">About</a>
                </li>
                <li class="menu-item">
                    <a href="#" data-scroll="services" data-anchor-offset="-2">Type of Services</a>
                </li>
                
                <li class="menu-item">
                    <a href="#" data-scroll="testimonials" data-anchor-offset="-2">Testimonials</a>
                </li>
                <li class="menu-item">
                    <a href="#" data-scroll="portfolio" data-anchor-offset="-2">Gallery of Services</a>
                </li>
                
                
                <li class="menu-item">
                    <a href="#" data-scroll="our mission" data-anchor-offset="-2">Packages</a>
                </li>
                
                <li class="menu-item">
                    <a href="#" data-scroll="contact" data-anchor-offset="-2">Contact</a>
                </li>
            </ul><!-- end .main-menu -->

        </nav><!-- end .menu-nav -->


     <?php endif;?>
     
    
    
