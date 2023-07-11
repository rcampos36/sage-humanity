<?php
/**
 * Template part for displaying a about us section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Humanity
 */

?>

<section>
    <div class="w-[1080px] mx-auto flex gap-10 mb-40">
        <div class="w-1/2 flex flex-col gap-4">
            <p class="sue-ellen-font text-primary-red text-2xl"><?php the_field('about_sub_title'); ?></p>
            <h1 class="text-5xl"><?php the_field('about_title'); ?></h1>
            <p><?php the_field('about_text'); ?></p>
            <button class="mt-5 <?php the_field('about_button_class'); ?>" href="<?php the_field('about_button'); ?>" class="red-btn"><?php the_field('about_button_text'); ?></button>
        </div>
        <div class="px-10 py-14 bg-secondary-gray w-1/2 flex flex-col gap-5">
            <div class="flex flex-wrap">
                <?php
			
                    // check if the repeater field has rows of data
                    if( have_rows('donation_options') ):
                    
                        // loop through the rows of data
                        while ( have_rows('donation_options') ) : the_row(); ?>
                            <div class="w-1/2 flex gap-1 items-center"><?php the_sub_field('donation_title_and_icon')?></div> 
                        <?php
                        endwhile;
                    
                        else :
                    
                        // no rows found
                    
                    endif;
                
                ?>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class="text-2xl"><?php the_field('about_donation_title'); ?></h1>
                <?php if( get_field('donation_chart') ): ?>
                    <img class="w-[28rem]" src="<?php the_field('donation_chart'); ?>" />
                <?php endif; ?>
                <div class="flex justify-between items-center">
                    <h5><?php the_field('collection'); ?></h5>
                    <h5><?php the_field('collection_goal'); ?></h5>
                </div>
                <button class="mt-10 <?php the_field('donation_button_class'); ?>" href="<?php the_field('donation_button'); ?>" class="white-btn mt-4"><?php the_field('donation_button_text'); ?></button>
            </div>
        </div>
    </div>
</section>