<?php get_header(); ?>

	<section class="row">
    	<div class="twelve columns">

            <h1>Welcome to Slick's Autobody</h1>

                <p>Here at Slick's, we put the customer first. 
                We know that your car is your baby and that you 
                want it back to normal as soon as possible. Let us
                take care of everything. We're family owned and 
                operated, we'll give you a fair price and we want 
                to help.
                </p>

    		<!-- BEGIN LOOP -->
            	<?php 
            	if ( have_posts() ) {
                	while ( have_posts() ) {
                    	the_post(); ?>

                    	<h3><?php the_title(); ?></h3>
                    	<div class="post-thumbnail-container">
                    		<?php 
                    			if(has_post_thumbnail() ) {
                    				the_post_thumbnail('large');
                    			} ?>
                    		</div>
                    	<?php the_excerpt(); ?>
                    	<div class="clear"></div>
                	<?php } // end while
            	} // end if
            	?>

            	

			<!-- END LOOP -->
    	</div>
    </section>

<?php get_footer(); ?>
