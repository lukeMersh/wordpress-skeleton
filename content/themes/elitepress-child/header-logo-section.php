<!-- Logo and buttons go here -->
	<div class="container-fluid">
		<div class="row">
	<?php $current_options = get_option('elitepress_lite_options',theme_data_setup());

	 if($current_options['logo_section_settings']=='on') { ?>
			<div class="col-md-8">
				<div class="site-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="The Arches Project">
					<?php
						if($current_options['text_title'] =="on") //If the value of 'text_title' in the 'current_options' array equals 'on' then the following line of code within the if statement block will be output to the DOM
						{ echo "<div class=elitepress_title_head>" . get_bloginfo( ). "</div>"; }//Since there is no text_title selected in the options panel then nothing will be displayed
						else if($current_options['upload_image_logo']!='')
						{ ?>
						<img src="<?php echo esc_url($current_options['upload_image_logo']); ?>" class="img-responsive" style="height:<?php if($current_options['height']!='') { echo esc_html($current_options['height']); } ?>px; width:<?php if($current_options['width']!='') { echo esc_html($current_options['width']); } ?>px;" alt="logo" />
						<?php } ?>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div id="header-btn-container">
						<?php if(is_user_logged_in()){?>
							<a class="my-btn my-btn-default btn-apply my-btn-lg" href="<?php echo wp_logout_url(); ?>" role="button">Logout</a>
						<?php } ?>
						<?php if(!is_user_logged_in()){?>
							<a class="my-btn my-btn-default btn-apply my-btn-lg" href="<?php echo wp_login_url(); ?>" role="button">Login</a>
						<?php } ?>

						<a class="my-btn my-btn-default btn-apply my-btn-lg" href="<?php echo home_url();?>/donate" 
role="button">Donate</a>


				</div>
			</div>
		</div>
	<?php } ?>
	</div>
<!-- /Logo and buttons go here -->
