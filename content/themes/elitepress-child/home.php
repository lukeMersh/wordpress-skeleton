<?php
		if('page' == get_option('show_on_front')){ get_template_part('index');}
		else {get_header();
		
		get_header();
		
		//****** get index static banner  ********
		get_template_part('index', 'slider');
				
		//****** get index service  ********				
		get_template_part('index', 'about-us-section');
				
		//****** get index portfolio  ********
		get_template_part('index', 'events');
				
		get_footer(); 
		
		}
?>