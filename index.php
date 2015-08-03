<?php get_header(); ?>

	<section class="row">
    	<div class="twelve columns">
           

            <h1>Welcome to Slick's Autobody</h1>

                <p class="center-align">Here at Slick's, we put the customers first. 
                We know that your car is your baby and that you 
                want it back to normal as soon as possible. Let us
                take care of everything. We're family owned and 
                operated, we'll give you a fair price and we want 
                to help.
                </p>

           
        </div><!--END OF "TWELVE COLUMNS"-->

    		<!-- BEGIN LOOP -->
            <div class="twelve columns">

      
                <?php 
            	if ( have_posts() ) {
                	while ( have_posts() ) {
                    	the_post(); ?>

                    	<div class="post-thumbnail-container">
                    		<?php 
                    			if(has_post_thumbnail() ) {
                    				the_post_thumbnail('large');
                    			} ?>

                            <div class="margin-fixes">

                            <h3 class="fix-top"><?php the_title(); ?></h3>

                            <h6><time datetime="<?php the_time('Y-m-d')?>"><?php the_time('F jS, Y') ?></time></h6>

                           
                    	<?php the_excerpt(); ?>
                    	<div class="clear"></div>
                	<?php } // end while
            	} // end if
            	?>
			<!-- END LOOP -->


            
            </div> <!--END OF FIX TOP-->
            </div> <!--END OF MARGIN-FIXES-->

            </div> <!--END OF POST-THUMBNAIL-CONTAINER-->
            </div> <!--END OF LEFT-SIDE-->


           



    	</div>


    </section>

<?php get_footer(); ?>



