<?php 
/* Template Name: Archive Page */

get_header(); ?>
    
    <div class="row">
        <div class="twelve columns">
<?php the_post(); ?>

<!-- data context -->
            <h2>Archives by Month:</h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
            <h2>Archives by Category:</h2>
            <ul>
                 <?php wp_list_categories(); ?>
            </ul>
        </div>
    </div>
<?php get_footer(); ?>