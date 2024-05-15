<?php
// Template Name: Careers
get_header();
?>

<!-- Careers banner start -->
<section class="light overlay bg-cover pt-[55px] pb-10 md:py-[95px] text-center" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>)">
   <div class="container">
      <h2 class="font-thin"><?php echo get_field('banner_title') ?> <strong class="text-yellow font-roboto"><?php echo get_field('banner_bold_text') ?></strong> </h2>
      <p class="md:text-[22px] lg:text-[28px] leading-6 pt-[35px] pb-2.5 text-white font-light"><?php echo get_field('banner_sub_title') ?></p>
      <?php if (have_rows('our_partners_list')) : ?>
         <ul class="our-partners flex gap-[30px] max-md:flex-wrap justify-center py-[30px] md:py-[70px]">
            <?php while (have_rows('our_partners_list')) : the_row() ?>
               <li class="max-md:max-w-[129px]">
                  <img src="<?php echo get_sub_field('partner_logo')['url'] ?>" alt="<?php echo get_sub_field('partner_logo')['alt'] ?>">
               </li>
            <?php endwhile; ?>
         </ul>
         <a href="#job_opening" class="btn bg-yellow text-gray-extraDark text-lg md:text-[23px] py-3.5 px-2.5 md:px-10 max-md:max-w-[320px] w-full md:w-[400px] uppercase">See Current Openings</a>
      <?php endif; ?>
   </div>
</section>

<!-- career great team heading -->
<section class="great-team pt-[70px] text-center">
   <div class="container max-lg:small">
      <h2><?php echo get_field('great_team_title') ?> <strong><?php echo get_field('great_team_title_strong') ?></strong> </h2>
      <?php echo get_field('great_team_detail') ?>
   </div>
   <?php if (have_rows('great_team_list')) : ?>
      <ul class="mt-[50px] grid grid-cols-2 md:grid-cols-4">
         <?php while (have_rows('great_team_list')) : the_row(); ?>
            <li class="bg-[#f3f3f3] flex flex-col">
               <figure><img src="<?php echo get_sub_field('great_list_image')['url'] ?>" alt="<?php echo get_sub_field('great_list_image')['alt'] ?>"></figure>
               <div class="team-content h-[150px] md:h-[285px] pt-4 md:pt-10">
                  <img src="<?php echo get_sub_field('great_list_icon') ?>" alt="" class="mx-auto max-md:h-[70px]">
                  <h3 class="text-h2m md:text-[50px] my-2.5 text-gray-dark block leading-[55px]"><?php echo get_sub_field('great_list_title') ?></h3>
               </div>
            </li>
         <?php endwhile; ?>
      </ul>
   <?php endif; ?>
</section>

<!-- Current Openings -->
<section class="container pt-10 md:pt-[100px]" id="job_opening">
   <h2 class="text-center">Current Openings</h2>

   <div class="opening-wrap mt-[30px] md:mt-[70px] flex max-lg:flex-wrap justify-between gap-[30px]">
      <div class="opening-list w-full lg:w-2/3">
         <?php
         $opening = new WP_Query([
            'post_type' => 'opening',
            'post_status' => 'publish',
         ]);

         if ($opening->have_posts()) :
            while ($opening->have_posts()) : $opening->the_post();
         ?>

               <div class="opening-item bg-[#eee] p-7 flex max-xs:flex-col items-center gap-2.5 justify-between mb-5 md:mb-[60px]">
                  <div class="list-content max-xs:w-full">
                     <h3 class="text-2xl text-gray-dark font-bold hover:text-[#337ab7] hover:underline mb-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                     <div class="flex items-center gap-2.5">
                        <span class="position bg-[url(../assets/images/user-plus.png)] pl-7 bg-left-top leading-[26px] bg-[length:24px_22px] bg-no-repeat text-lg text-gray-dark"><?php echo the_sub_field('positions') ?> Positions</span>
                        <div class="share">
                           <div class="bg-[url(../assets/images/share.svg)] bg-[length:17%] share-wrap bg-left bg-no-repeat">
                              <div class="share-icon flex gap-3 ml-6 invisible">
                                 <a href="#" class="facebook"><img src="<?php echo THEMEIMAGE ?>/facebook.svg" class="w-4" alt=""></a>
                                 <a href="#" class="facebook"><img src="<?php echo THEMEIMAGE ?>/twitter.svg" class="w-4" alt=""></a>
                                 <a href="#" class="facebook"><img src="<?php echo THEMEIMAGE ?>/linkedin.svg" class="w-4" alt=""></a>
                              </div>
                           </div>

                        </div>
                     </div>

                  </div>
                  <div class="list-btn min-w-[182px] max-xs:w-full">
                     <a href="<?php the_permalink(); ?>" class="btn text-base bg-[#02609e] py-3 px-11 text-white block w-full text-center">View & Apply</a>
                  </div>
               </div>
         <?php endwhile;
         endif;
         wp_reset_postdata(); ?>
      </div>
      <div class="team-statistics w-full lg:w-1/4">
         <div class="shadow-[0px_0px_34px_-6px_rgba(0,0,0,.46)] mb-[60px]">
            <h3 class="bg-[#434242] leading-[70px] text-center text-2xl text-white font-light font-roboto-slab">Team Statistics</h3>

            <ul class="flex flex-wrap justify-center">
               <li class="py-6 text-center font-oswald text-gray-dark min-w-[143px] lg:min-w-[260px]">
                  <figure><img src="<?php echo THEMEIMAGE ?>/team-statistics-1.png" alt="" class="mx-auto"></figure>
                  <span class="after:content-['+'] text-[30px] font-light leading-6 inline-block pt-4"><?php echo get_field('trips') ?></span>
                  <span class="block text-xl font-light leading-[15px]">Trips</span>
               </li>
               <li class="py-6 text-center font-oswald text-gray-dark min-w-[143px] lg:min-w-[260px]">
                  <figure><img src="<?php echo THEMEIMAGE ?>/team-statistics-2.png" alt="" class="mx-auto"></figure>
                  <span class="after:content-['+'] text-[30px] font-light leading-6 inline-block pt-4"><?php echo get_field('parties') ?></span>
                  <span class="block text-xl font-light leading-[15px]">Parties</span>
               </li>
               <li class="py-6 text-center font-oswald text-gray-dark min-w-[143px] lg:min-w-[260px]">
                  <figure><img src="<?php echo THEMEIMAGE ?>/team-statistics-3.png" alt="" class="mx-auto"></figure>
                  <span class="after:content-['+'] text-[30px] font-light leading-6 inline-block pt-4"><?php echo get_field('drinks') ?></span>
                  <span class="block text-xl font-light leading-[15px]">Drinks</span>
               </li>
               <li class="py-6 text-center font-oswald text-gray-dark min-w-[143px] lg:min-w-[260px]">
                  <figure><img src="<?php echo THEMEIMAGE ?>/team-statistics-4.png" alt="" class="mx-auto"></figure>
                  <span class="after:content-['+'] text-[30px] font-light leading-6"><?php echo get_field('social_events') ?></span>
                  <span class="block text-xl font-light leading-[15px]">Social Events</span>
               </li>
               <li class="py-6 text-center font-oswald text-gray-dark min-w-[143px] lg:min-w-[260px]">
                  <figure><img src="<?php echo THEMEIMAGE ?>/team-statistics-5.png" alt="" class="mx-auto"></figure>
                  <span class="after:content-['+'] text-[30px] font-light leading-6 inline-block pt-4"><?php echo get_field('development_hrs') ?></span>
                  <span class="block text-xl font-light leading-[15px]">Development Hrs</span>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>

<!-- News Latter section -->
<section class="newslatter light bg-[url('../assets/images/blue-bg.png')] py-[30px] xs:py-10 text-center">
   <div class="container md:max-w-[679px] xl:max-w-[615px]">
      <h2 class="text-3xl md:text-4xl">Sign up to our Job Feeds</h2>
      <p>Subscribe and become the first few to know the job opening at Xieno.</p>
      <?php echo do_shortcode('[mc4wp_form id=408]') ?>
   </div>
</section>



<?php get_footer(); ?>