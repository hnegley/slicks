<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php wp_head(); ?>
	<!-- Links to our Style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

</head>
<body>
	<div class="container">
	
	<header class="row">
			
			<div class="twelve columns blog-content">

                <?php wp_nav_menu(array (
                    'sort_column' => 'menu_order',
                    'container_class' => 'blank-menu-header'

                    )); ?>
    			
                <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    		
    		</div>	
    	</header>

    	<div class="row">
    		<div class="twelve columns blog-content">
    			

<!--END OF HEADER AREA-->