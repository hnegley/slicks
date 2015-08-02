<?php get_header(); ?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
    <div class="row">
        <div class="twelve columns">
            <?php if (have_posts()) : 
                while (have_posts()) : the_post(); ?> 
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(__('Continue reading »','example'));
                endwhile; ?>
                <div class="navigation">
                    <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
                </div>
                <?php else: ?>
                <div class="404-section">
                    <p><?php _e('None found.','example'); ?></p>
                </div>
            <?php endif; wp_reset_query(); ?>
        </div>
    </div>
<?php get_footer(); ?>