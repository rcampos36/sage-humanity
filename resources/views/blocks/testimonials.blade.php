<?php
/**
 * Template part for displaying a testimonials section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Humanity
 */

?>

<section class="">
    <div class="w-[1080px] mx-auto flex flex-col gap-5 py-20">
        <div class="w-full flex flex-col gap-4 items-center mb-5">
            <p class="sue-ellen-font text-primary-red text-2xl"><?php the_field('testimonials_sub_title'); ?></p>
            <h1 class="text-5xl"><?php the_field('testimonials_title'); ?></h1>
        </div>
        <div id="testimonials" class="flex justify-center gap-4 owl-carousel">
            <?php
                
                // check if the repeater field has rows of data
                if( have_rows('testimonials') ):
                
                    // loop through the rows of data
                    while ( have_rows('testimonials') ) : the_row(); ?>
                        <div class="flex w-[95%] gap-4">
                            <div class="flex items-center p-4 gap-4 bg-secondary-gray">
                                <?php if( get_sub_field('testimonial_image') ): ?>
                                    <img class="" src="<?php the_sub_field('testimonial_image'); ?>" />
                                <?php endif; ?>
                                <div class="flex flex-col gap-1">
                                    <h1 class="text-lg -mb-2">
                                    <?php the_sub_field('testimonial_name')?>
                                    </h1>
                                    <div class="text-gray-400 text-sm mb-4">
                                        <?php the_sub_field('testimonial_title')?>
                                    </div>
                                    <p class="text-primary-black line-clamp-4">
                                        <?php the_sub_field('testimonial_text')?>
                                    </p>
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
        <div class="flex border-b items-center">
            <?php
                
                // check if the repeater field has rows of data
                if( have_rows('the_numbers') ):
                
                    // loop through the rows of data
                    while ( have_rows('the_numbers') ) : the_row(); ?>
                        <div class="flex w-[95%] gap-4 items-center justify-center">
                            <div class="flex items-center p-4 gap-4">
                                <div class="flex flex-col gap-2 items-center w-40 ">
                                    <h1 class="text-4xl font-extrabold -mb-2 text-primary-black´´">
                                    <?php the_sub_field('number')?>
                                    </h1>
                                    <p class="text-gray-400 text-center text-xs">
                                        <?php the_sub_field('the_numbers_text')?>
                                    </p>
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
        <div class="flex">
            <?php
                
                // check if the repeater field has rows of data
                if( have_rows('the_brands') ):
                
                    // loop through the rows of data
                    while ( have_rows('the_brands') ) : the_row(); ?>
                        <div class="flex w-[95%] gap-4 tems-center justify-center">
                            <div class="flex items-center p-4 gap-4">
                                <div class="flex gap-2 items-center ">
                                    <?php if( get_sub_field('brand') ): ?>
                                        <img class="w-20" src="<?php the_sub_field('brand'); ?>" />
                                    <?php endif; ?>
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