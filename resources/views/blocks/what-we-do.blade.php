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
    <div class="w-[1080px] mx-auto flex flex-col gap-5 py-20">
        <div class="w-full flex flex-col gap-4 items-center mb-5">
            <p class="sue-ellen-font text-primary-red text-2xl"><?php the_field('what_we_do_sub_title'); ?></p>
            <h1 class="text-5xl"><?php the_field('what_we_do_title'); ?></h1>
        </div>
        <div class="flex flex-wrap">
            <?php
                
                // check if the repeater field has rows of data
                if( have_rows('what_we_do') ):
                
                    // loop through the rows of data
                    while ( have_rows('what_we_do') ) : the_row(); ?>
                        <div class="flex w-1/3 gap-4">
                            <div class="flex flex-col items-center mb-20 gap-2">
                                <?php if( get_sub_field('what_we_do_icon') ): ?>
                                    <img class="w-[50px]" src="<?php the_sub_field('what_we_do_icon'); ?>" />
                                <?php endif; ?>
                                <h1 class="text-lg font-extrabold">
                                    <?php the_sub_field('what_we_do_repeater_title')?>
                                </h1>
                                <div class="text-center text-primary-black">
                                    <?php the_sub_field('what_we_do_text')?>
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