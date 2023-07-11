<?php
/**
 * Template part for displaying a what we do section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Humanity
 */

?>

<section class="">
    <div class="w-full flex flex-col pb-20">
        <div class="flex">
            <div class="bg-primary-black text-white w-1/2 py-8 px-10 flex flex-col gap-2">
                <p class="sue-ellen-font text-primary-red text-1xl"><?php the_field('projects_sub_title'); ?></p>
                <h1 class="text-2xl font-bold"><?php the_field('projects_title'); ?></h1>
                <p><?php the_field('projects_text'); ?></p>
                <button class="red-btn mt-5" href="<?php the_field('projects_link'); ?>"><?php the_field('projects_link_text'); ?></button>
            </div>
            <div class="flex w-1/2">
                <?php
                    
                    // check if the repeater field has rows of data
                    if( have_rows('top_images') ):
                    
                        // loop through the rows of data
                        while ( have_rows('top_images') ) : the_row(); ?>
                            <div class="flex gap-4">
                                <div class="project-content relative flex flex-col items-center gap-2">
                                    <?php if( get_sub_field('top_image') ): ?>
                                        <img class="object-cover" src="<?php the_sub_field('top_image'); ?>" />
                                    <?php endif; ?>
                                    <div class="project-info flex-col text-white items-center justify-center">
                                        <div class="flex gap-3 ">
                                            <p class="tag"><?php the_sub_field('tag_1')?></p>
                                            <p class="tag"><?php the_sub_field('tag_2')?></p>
                                        </div>
                                        <h1 class="text-lg font-extrabold">
                                            <?php the_sub_field('project_image_title')?>
                                        </h1>
                                    </div>
                                    
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
        <div class="flex">
        <?php
                    
                    // check if the repeater field has rows of data
                    if( have_rows('bottom_images') ):
                    
                        // loop through the rows of data
                        while ( have_rows('bottom_images') ) : the_row(); ?>
                            <div class="flex gap-4">
                                <div class="project-content relative flex items-center gap-2">
                                    <?php if( get_sub_field('bottom_image') ): ?>
                                        <img class="object-cover" src="<?php the_sub_field('bottom_image'); ?>" />
                                    <?php endif; ?>
                                    <div class="project-info flex-col text-white items-center justify-center">
                                        <div class="flex gap-3 ">
                                            <p class="tag"><?php the_sub_field('bottom_tag_1')?></p>
                                            <p class="tag"><?php the_sub_field('bottom_tag_2')?></p>
                                        </div>
                                        <h1 class="text-lg font-extrabold">
                                            <?php the_sub_field('bottom_project_image_title')?>
                                        </h1>
                                    </div>
                                    
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
</section>