    <?php global $wp_elegant;?>

<?php if(!is_page( 'Choosepack' )):?>
    <?php require_once get_template_directory() .'/template-parts/contact.php';?> 

    </div><!-- end .main-section -->



<?php require_once get_template_directory() .'/template-parts/project.php';?> 

                                                    
 <?php endif;?>

  <div class="project-nav invisible-element">
                                                        <div class="prev"><i class="fa fa-chevron-left"></i></div>
                                                        <div class="next"><i class="fa fa-chevron-right"></i></div>
                                                    </div>
 </div>                          
        

        <?php wp_footer(); ?>
        <script>
            PopupWithSub = 'off'; //this will run after 9 seconds of loading the page , change it too 'off' if you want to disable it !
            PopupWithoutSub = 'off'; //this will run after 20 seconds of loading the page , change it too 'on' if you want to enable it !



            if (PopupWithSub == 'on') {
             setTimeout(myFunctionone, 5000);
            }
            if (PopupWithoutSub == 'on') {
             setTimeout(myFunctiontwo, 5000);
            }


            function myFunctionone() {
                document.getElementById('linkone').click();
            }

            function myFunctiontwo() {
                document.getElementById('linktwo').click();
            }

          $(document).ready(function() {
            $('.overlay').overlay();
          });
        </script>
<script>
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $("#bgvid").css("display","none !important"); 
        $("#logobigo").css("opacity","1 !important"); 
    }

</script>

<script>

$("#menu-trigger").click(function(){
    //var className = $('#menu-trigger').attr('class');
    //if (className == 'is-clicked') {
    if ( $("#menu-trigger").hasClass("is-clicked") ) {
        $('#menu-nav').css("z-index", "1");
    }else{
         $('#menu-nav').css("z-index", "20");
    }

});


</script>

</body>
</html>