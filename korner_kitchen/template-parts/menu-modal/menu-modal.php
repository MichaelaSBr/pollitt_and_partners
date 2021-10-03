<?php
if( have_rows('menus', 5) ):
      while( have_rows('menus', 5) ): the_row();
       // YAMIKO MODEL 
            if (have_rows('yamiko')):
               while( have_rows('yamiko') ): the_row(); 
               $yamiko_desk_image = get_sub_field('yamiko_desktop');
               $yamiko_mob_image = get_sub_field('yamiko_mobile');
               ?>
                  <div id="yamiko" class="modal">
                     <img src="<?php echo esc_url($yamiko_desk_image['url']);  ?>" alt="YamiKo Menu">
                  </div>
                  <div id="yamiko-mob" class="modal">
                     <img src="<?php echo esc_url($yamiko_mob_image['url']); ?>" alt="YamiKo Menu">
                  </div>
               <?php  endwhile; ?>
            <?php endif;?>

         <!-- DIMIKO MODEL -->
          <?php  if (have_rows('dimko')):
               while( have_rows('dimko') ): the_row(); 
               $dimko_desk_image = get_sub_field('dimko_desktop');
               $dimko_mob_image = get_sub_field('dimko_mobile');
               ?>
                  <div id="dimko" class="modal">
                     <img src="<?php echo esc_url($dimko_desk_image['url']);  ?>" alt="Dimko Menu">
                  </div>
                  <div id="dimko-mob" class="modal">
                     <img src="<?php echo esc_url($dimko_mob_image['url']);  ?>" alt="Dimko Menu">
                  </div>
               <?php  endwhile; ?>
            <?php endif;?>

         
            <!-- MEXIKO MODEL-->
            <?php  if (have_rows('mexiko')):
                  while( have_rows('mexiko') ): the_row(); 
                  $mexiko_desk_image = get_sub_field('mexiko_desktop');
                  $mexiko_mob_image = get_sub_field('mexiko_mobile');
                  ?>
                     <div id="mexiko" class="modal">
                        <img src="<?php echo esc_url($mexiko_desk_image['url']);  ?>" alt="Mexiko Menu">
                     </div>
                     <div id="mexiko-mob" class="modal">
                        <img src="<?php echo esc_url($mexiko_mob_image['url']);  ?>" alt="Mexiko Menu">
                     </div>
                  <?php  endwhile; ?>
               <?php endif;?>
               
   <?php  endwhile; ?>
<?php endif;?>