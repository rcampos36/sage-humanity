<header id="masthead" class="page-header h-[750px]">
	<div class="bg-primary-green h-10 flex flex-col items-center">
		<div class="w-[1080px] mx-auto flex justify-between">
			<div class="flex items-center gap-10">
				<p class="text-xs flex gap-1 items-center text-primary-black"><?php the_field("phone_number"); ?></p>
				<p class="text-xs flex gap-1 items-center"><?php the_field("email"); ?></p>
			</div>
			<div class="py-[.75rem] px-4 bg-secondary-green flex items-center justify-center gap-2">
				<?php
			
					// check if the repeater field has rows of data
					if( have_rows('social_icons') ):
					
						// loop through the rows of data
						while ( have_rows('social_icons') ) : the_row(); ?>
					
						<div class="icons">
							<div class="text-xs"><?php the_sub_field('social_icon')?></div> 
						</div>
						<?php
						endwhile;
					
						else :
					
						// no rows found
					
					endif;
				
				?> 
			</div>
	  </div>	
  	<div class="w-[1080px] mx-auto flex items-center py-10 justify-between">
		
      <h1>
        <?php if( get_field('site_logo') ): ?>
					<a href="/"><img class="w-40" src="<?php the_field('site_logo'); ?>" /></a>
          
        <?php endif; ?>
      </h1>

      <nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'humanity' ); ?>">

        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
            'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
          )
        );
        ?>
      </nav><!-- #site-navigation -->
	</div>
  <section class="w-full">
		<div class="banner-image bg-no-repeat w-full h-[590px] flex items-center justify-center" style="background-image: url(<?php echo the_field('banner_image')?>);">
			<div class="w-[1080px] mx-auto flex flex-col gap-2">
				<p class="sue-ellen-font text-white text-3xl"><?php the_field("banner_content"); ?></p>
				<h1 class="banner-title text-white text-7xl w-1/2"><?php the_field("banner_title"); ?></h1>
				<?php if( get_field('banner_accent_image') ): ?>
					<img class="w-80" src="<?php the_field('banner_accent_image'); ?>" />
				<?php endif; ?>
				<div class="mt-8 flex gap-3">
					<a class="px-10 py-3 bg-primary-red rounded-full text-white hover:bg-secondary-red transition duration-350 ease-in-out" href="<?php the_field("banner_btn_1"); ?>"><?php the_field("banner_btn_1_text"); ?></a>
					<a class="px-10 py-3 bg-primary-white rounded-full shadow-lg hover:bg-secondary-white transition duration-350 ease-in-out" href="<?php the_field("banner_btn_2"); ?>"><?php the_field("banner_btn_2_text"); ?></a>
				</div>
			</div>
		</div>
	</section>
</header>
