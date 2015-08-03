<?php get_header(); ?>
    
    <section class="row">
        
        
        <!--BEGIN SIDEBAR AREA-->
        <div class="four columns">
            
            <div>

           <?php dynamic_sidebar('face-widget'); ?> </div>
        
            </div>


        
        <!--END SIDEBAR AREA-->
        
        
        <div class="eight columns">
           
           <!-- BEGIN PAGE PHP -->
            
            <div class="content stay">
            
            <?php if (have_posts()) : 
                /* OUR DATA CONTEXT IS DEFINED  */      
                while (have_posts()) : the_post(); ?> 
                    
                    <h2><?php the_title(); ?></h2>
                    
                    <?php the_content();
                endwhile;
            endif; ?>
                
                </div>

<!-- END PAGE PHP -->
        
        </div>

    </div>

    </div>  

    </section>

<?php get_footer(); ?>



