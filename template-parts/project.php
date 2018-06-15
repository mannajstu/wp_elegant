<div class="all-projects2">
<!--******* Members description here !******-->
    <!--******* Members 1 ******-->
        <div class="project-container team team-member1">
            <img src="team/default.jpg" alt="team">
            <div class="project-content">
                <h3 class="nom-t">member 1 Name here</h3>
                <p>wedding dj, mitzvah dj, miami wedding dj, miami photobooth
wedding dj miami, bar/bat mitzvah dj,south florida dj,wedding djs in south florida,miami wedding dj prices,wedding djs in miami florida,DJ services miami,miami party djs,top miami club djs,miami djs for hire,affordable wedding djs,all inclusive dj services,fort lauderdale dj,south florida djs,DJ and photobooth package</p>
                <h4 class="team-info">Adress :<span> email@team.com</span></h4>
                <h4 class="team-info">Phone :<span> 123 456 789</span></h4>
                <h4 class="team-info">Other :<span> description here</span></h4>
            </div>
        </div> 
    <!--******* Members 2 ******-->
        <div class="project-container team team-member2">
            <img src="team/default.jpg" alt="team">
            <div class="project-content">
                <h3 class="nom-t">member 2 Name here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h4 class="team-info">Adress :<span> email@team.com</span></h4>
                <h4 class="team-info">Phone :<span> 123 456 789</span></h4>
                <h4 class="team-info">Other :<span> description here</span></h4>
            </div>
        </div> 
    <!--******* Members 3 ******-->
        <div class="project-container team team-member3">
            <img src="team/default.jpg" alt="team">
            <div class="project-content">
                <h3 class="nom-t">member 3 Name here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h4 class="team-info">Adress :<span> email@team.com</span></h4>
                <h4 class="team-info">Phone :<span> 123 456 789</span></h4>
                <h4 class="team-info">Other :<span> description here</span></h4>
            </div>
        </div> 
    <!--******* Members 4 ******-->
        <div class="project-container team team-member4">
            <img src="team/default.jpg" alt="team">
            <div class="project-content">
                <h3 class="nom-t">member 4 Name here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h4 class="team-info">Adress :<span> email@team.com</span></h4>
                <h4 class="team-info">Phone :<span> 123 456 789</span></h4>
                <h4 class="team-info">Other :<span> description here</span></h4>
            </div>
        </div> 
    <!--******* Members 5 ******-->
        <div class="project-container team team-member5">
            <img src="team/default.jpg" alt="team">
            <div class="project-content">
                <h3 class="nom-t">member 5 Name here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h4 class="team-info">Adress :<span> email@team.com</span></h4>
                <h4 class="team-info">Phone :<span> 123 456 789</span></h4>
                <h4 class="team-info">Other :<span> description here</span></h4>
            </div>
        </div> 

<!--******* end Members description here !******-->
</div>





        <div class="all-projects">

            <?php if (isset($wp_elegant['gallery-section-description']) && !empty($wp_elegant['gallery-section-description'])) :


for ($i=0; $i <count($wp_elegant['gallery-section-description']) ; $i++) : ?>
            <div class="project-container proj <?php echo $wp_elegant['gallery-section-description'][$i]['url']?> ">
                <img src="<?php echo $wp_elegant['gallery-section-description'][$i]['image']?>" alt="Wedding">

                <div class="project-content">

                    <h3><?php echo $wp_elegant['gallery-section-description'][$i]['title']?></h3>

                    <p><?php echo esc_html($wp_elegant['gallery-section-description'][$i]['description']  );?> 
                    </p>

                </div><!-- end .project-content -->

            </div> <!-- end .project-container -->

        <?php endfor;?>
<?php endif;?>

            
</div>
            
           