<section class="w-full">
  <div class="w-[1080px] mx-auto flex flex-col gap-5 py-20">
    <div class="flex justify-between items-center">
        <div class="flex w-2/3 flex-col gap-4 mb-5">
          <p class="sue-ellen-font text-primary-red text-2xl"><?php the_field('our_events_sub_title'); ?></p>
          <h1 class="text-5xl leading-[3.5rem]"><?php the_field('our_events_title'); ?></h1>
        </div>
        <div>
          <button href="<?php the_field('our_events_button_link'); ?>" class="<?php the_field('our_events_button_class'); ?>"><?php the_field('our_events_button_text'); ?></button>
        </div>
    </div>
    

    <div class="flex gap-4">
      <div class="flex flex-col relative">
        <?php if( get_field('our_events_image') ): ?>
          <img class="relative" src="<?php the_field('our_events_image'); ?>" />
        <?php endif; ?>
        <div class="flex flex-col text-center top-0 absolute bg-primary-red p-5 text-primary-white">
          <p class="shippori font-bold text-3xl"><?php the_field('our_events_date_day'); ?></p>
          <p class="shippori"><?php the_field('our_event_date_month'); ?></p>
        </div>
        <div class="flex justify-between text-sm text-gray-400 border-b ">
          <p><?php the_field('our_events_by'); ?></p>
          <p class="mb-4"><?php the_field('our_events_time'); ?></p>
        </div>
        <h4 class="text-lg font-bold shippori text-gray-500"><?php the_field('our_event_title'); ?></h4>
        <p class="text-sm text-gray-400 mb-4"><?php the_field('our_events_text'); ?></p>
        <p class="p-4 bg-primary-gray w-fit text-sm text-gray-500"><?php the_field('our_events_location'); ?></p>
      </div>
      <div class="flex gap-4 flex-col">
        <?php
        
          // check if the repeater field has rows of data
          if ( have_rows('more_events') ):
          
              // loop through the rows of data
              while ( have_rows('more_events') ) : the_row(); ?>
              <div class="flex gap-4 items-center border-b mb-2 pb-6">
                <div class="flex flex-col py-5 px-3 bg-primary-black text-white text-center min-w-[95px]">
                  <div class="text-4xl shippori"><?php the_sub_field('event_day')?></div>
                  <div class="text-md shippori"><?php the_sub_field('event_month')?></div>
                </div>
                <div class="flex flex-col gap-2">
                  <div class="text-xs"><?php the_sub_field('organized_by')?></div> 
                  <h4><?php the_sub_field('event_title')?></h4>
                  <p class="text-xs"><?php the_sub_field('event_text')?></p>
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
</section>