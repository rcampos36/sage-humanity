<?php
/**
 * Template part for displaying a cta section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Humanity
 */

?>

<section>
    <div class="w-[1080px] mx-auto flex -mt-20 mb-40">
        <?php
			
            // check if the repeater field has rows of data
            if( have_rows('call_to_actions') ):
            
                // loop through the rows of data
                while ( have_rows('call_to_actions') ) : the_row(); ?>
            
                <div class="icons">
                    <div class="text-xs"><?php the_sub_field('social_icon')?></div> 
                </div>
                <div class="<?php the_sub_field('cta_class'); ?> w-1/3 px-7 py-12 flex flex-col gap-3" style="background-image: url(<?php echo the_sub_field('cta_image')?>);">
                    <h2 class="text-4xl font-extrabold"><?php the_sub_field('cta_title')?></h2>
                    <p><?php the_sub_field('cta_text')?></p>
                    <button class="<?php the_sub_field('button_class'); ?>" href="<?php the_sub_field('cta_button_url')?>"><?php the_sub_field('cta_button_text')?></button>
                    <div class="cover w-full h-full flex justify-center items-center text-6xl text-white" ><?php the_sub_field('cta_icon')?></div>
                </div>
                <?php
                endwhile;
            
                else :
            
                // no rows found
            
            endif;
        
        ?>
        
    </div>
</section>