<?php
/* Template Name: buddypress */
get_header();
 ?>
<div class="content-section">
	<div class="title-section">
	</div>
	<div class="container">
	   <div class="row">
		     <div class="col-md-8">
			        <?php get_template_part('content',''); //Also ouputs a closing div to close: <div class="col-md-8"> ?>
         <div class="col-md-3 col-md-offset-1">
      <?php

				//Displays sidebar for members with level one access and above(artists to admin level can see the sidebar)
			  if(current_user_can(access_s2member_level1)){
    				if ( is_active_sidebar( 'sidebar_primary' ) ){ //checks if sidebar primary is active then dispolays the sidebar
    				 dynamic_sidebar( 'sidebar_primary' );
            }
			  }

        if ( !bp_is_register_page() && !bp_is_activation_page() && !current_user_can(access_s2member_level1)){//outputs sidebar if current page is not registration or activation

            if (is_active_sidebar('sidebar_primary_two')){
  						dynamic_sidebar( 'sidebar_primary_two' );
  					}
        }
			?>
		</div>
	   </div>
	</div>
</div>

<?php get_footer(); ?>
