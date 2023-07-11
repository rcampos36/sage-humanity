<?php
/**
 * Template part for displaying a team section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Humanity
 */

?>

<section class="text-white bg-secondary-gray">
    <div class="w-[1080px] mx-auto flex flex-col gap-10 py-20">
        <div class="w-full flex flex-col gap-4 items-center mb-5">
            <p class="sue-ellen-font text-primary-red text-2xl"><?php the_field('team_sub_title'); ?></p>
            <h1 class="text-5xl text-primary-black"><?php the_field('team_title'); ?></h1>
        </div>
        <div class="flex gap-4">
            <?php
                
                // check if the repeater field has rows of data
                if( have_rows('team') ):
                
                    // loop through the rows of data
                    while ( have_rows('team') ) : the_row(); ?>
                        <div class="flex w-1/4 justify-center">
                            <div class="flex flex-col items-center gap-2">
                                <?php if( get_sub_field('team_image') ): ?>
                                    <img class="" src="<?php the_sub_field('team_image'); ?>" />
                                <?php endif; ?>
                                <div>
                                    <h4 class="text-primary-black"><?php the_sub_field('team_name'); ?></h4>
                                </div>
                                <div class="flex gap-3">
                                    <?php
                    
                                        // check if the repeater field has rows of data
                                        if( have_rows('team_social_media') ):
                                        
                                            // loop through the rows of data
                                            while ( have_rows('team_social_media') ) : the_row(); ?>
                                                <div class="flex w-5 gap-1">
                                                    <div class="flex text-sm text-primary-black items-center gap-1">
                                                        <?php the_sub_field('social_icon'); ?>
                                                    </div>
                                                </div> 
                                            <?php
                                            endwhile;
                                        
                                            else :
                                        
                                            // no rows found
                                        
                                        endif;
                                    
                                    ?>
                                </div>
                            </div>
                        </div> 
                    <?php
                    endwhile;
                
                    else :
                
                    // no rows found
                
                endif;
            
            ?>
            <div class="w-1/4 bg-primary-green justify-center gap-4 py-5 px-4">
                <div class="flex flex-col items-center justify-center h-full gap-2">
                    <?php if( get_field('team_volunteer_icon') ): ?>
                        <img class="" src="<?php the_field('team_volunteer_icon'); ?>" />
                    <?php endif; ?>
                    <h4 class="text-xl font-bold text-primary-black">
                        <?php the_field('team_volunteer_title'); ?>
                    </h4>
                    <p class="text-center text-primary-black mb-5"><?php the_field('team_volunteer_text'); ?></p>
                    <button class="<?php the_field('button_class'); ?> hover:shadow-lg" href="<?php the_field('team_volunteer_button'); ?>"><?php the_field('team_volunteer_button_text'); ?></button>
                </div>
            </div>
        </div>
    </div>
</section>