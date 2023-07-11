<?php
/**
 * Template part for displaying a volunteer section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Humanity
 */

?>

<section class="text-white" style="background-image: url(<?php echo the_field('volunteer_section_bg')?>);">
    <div class="w-[1080px] mx-auto flex gap-10 py-20">
        <div class="w-1/2 flex flex-col gap-4">
            <p class="sue-ellen-font text-primary-white text-2xl"><?php the_field('volunteer_sub_title'); ?></p>
            <h1 class="text-5xl"><?php the_field('volunteer_title'); ?></h1>
            <p><?php the_field('volunteer_text'); ?></p>
            <?php if( get_field('volunteer_image') ): ?>
                <img class="w-full" src="<?php the_field('volunteer_image'); ?>" />
            <?php endif; ?>
            <button class="mt-5 <?php the_field('button_class'); ?>" href="<?php the_field('volunteer_button'); ?>"><?php the_field('volunteer_button_text'); ?></button>
        </div>
        <div class="px-10 py-10 w-1/2 flex flex-col gap-5 border-2">
            <div class="flex flex-wrap">
                <?php 
                    $form = get_field('volunteer_form');
                    gravity_form($form['id']);
                ?>
            </div>
        </div>
    </div>
</section>