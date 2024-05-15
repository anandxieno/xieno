<?php get_header(); ?>
 <!-- Service page banner -->

 <section class="expertise-banner overlay pt-8 pb-16 lg:py-20 bg-no-repeat bg-cover" style="background-image:url(<?php echo get_field('banner_background'); ?>)">
    <div class="container text-center text-white">
        <h2><?php echo get_field('banner_title') ?></h2>
        <p><?php echo get_field('banner_description') ?></p>
        <a href="#" class="btn action-btn mt-5 tracking-[.9px]">Get a free quote</a>
    </div>
</section>


 <!-- Expertise store section start -->
 <section class="exp-store py-11 md:py-20 lg:py-[100px]">
    <div class="container">
         <h2 class="text-center mb-5 font-normal"><?php echo get_field('store_title') ?></h2>
         <p class="text-lg"><?php echo get_field('expertise_store_detail') ?></p>

         <div class="mt-7">
            <div class="grid grid-cols-12 gap-[30px]">
                <div class="col-span-12 lg:col-span-7">
                    <ul>
                        <?php if(have_rows('store_list')) :
                            while(have_rows('store_list')) : the_row();  ?>
                           <li class="flex gap-[30px]">
                            <figure class="min-w-[90px]"><img src="<?php echo get_sub_field('store_list_icon') ?>" alt=""></figure>
                            <div class="content">
                                <p><strong><?php echo get_sub_field('store_list_title') ?>: </strong><?php echo get_sub_field('store_list_detail') ?></p> 
                            </div>
                           </li>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
                <div class="col-span-12 lg:col-span-5">
                   <img src="<?php echo get_field('store_image')['url'] ?>" alt="<?php echo get_field('store_image')['alt'] ?>" class="mx-auto">
                </div>
            </div>
            <div class="text-center mt-20">
                <a href="#contact-section" class="btn dark action-btn uppercase">Consult with our expert</a>
            </div>
            
         </div>
    </div>
 </section>

 <!-- Expertise consulting servive -->

 <section class="consulting-section bg-[#eee]">
    <div class="container">
        <div class="grid grid-cols-12 items-center">
            <div class="col-span-12 md:col-span-7 consulting-left py-[60px] px-2 relative <?php echo get_field('theme_color') ?>">
               <h2><strong><?php echo get_field('consulting_title') ?></strong> Consulting</h2>
               <?php echo get_field('consulting_description') ?>

               <a href="#contact-section" class="btn action-btn uppercase mt-10 gray">Start your project</a>
            </div>
            <div class="col-span-1 max-md:hidden"></div>
            <div class="col-span-4 consulting-right max-md:hidden">
                <img src="<?php echo get_field('consulting_image')['url'] ?>" alt="<?php echo get_field('consulting_image')['alt'] ?>" class="py-5">
            </div>
        </div>
    </div>
 </section>


 <!-- Our Expertise service -->

 <section class="py-[45px] md:py-[100px] expertise-service bg-no-repeat bg-[left_-110px_center]" style="background-image:url('<?php echo get_field('expertise_services_background'); ?>')">
    <div class="container">
        <h2 class="text-center mt-5 mb-2.5">Our <strong><?php echo get_field('service_heading') ?></strong> Services</h2>

        <?php if(have_rows('expertise_service')) : ?>
        <ul class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-[30px] gap-y-6 md:gap-y-20 mt-6 md:mt-20 <?php echo get_field('theme_color') ?>">
            <?php while(have_rows('expertise_service')) : the_row(); ?>
           <li class="flex gap-[30px]">
              <figure class="min-w-[67px] w-1/4 md:w-[68px]">
                <img src="<?php echo get_sub_field('service_icon')['url'] ?>" alt="<?php echo get_sub_field('service_icon')['alt'] ?>" class="w-full">
              </figure>
              <div class="div w-3/4 md:w-auto">
                <h3 class="text-bodytwo text-gray-dark mb-2.5 font-bold"><?php echo get_sub_field('service_title') ?></h3>
                <p class=" font-light text-gray-dark"><?php echo get_sub_field('service_description') ?></p>
              </div>
           </li>
           <?php endwhile; ?>
        </ul>
        <?php endif; ?>
    </div>
 </section>

 <!-- Expertise Hire section -->
 <section class="bg-[#2f2b2f] expertise-hire">
    <div class="container">
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-12 md:col-span-3 lg:col-span-2 max-w-[220px] mx-auto">
               <div class="mt-[-25px] bg-[#ffb327] py-5 px-2 text-center before:w-4 before:h-6 before:bg-[#2f2b2f] before:-right-4 before:top-[1px] before:absolute relative before:z-[-1] before:[clip-path:polygon(0%_0%,0%_100%,100%_100%)]">
                  <img src="http://xieno.loc/wp-content/uploads/2024/02/Vector_Smart_Object.png" alt="" class="mx-auto py-5">
                  <span class="text-[13px] font-bold font-roboto-slab">HIRE DEDICATED <?php echo get_field('dedicated_developer') ?></span>
               </div>
            </div>
            <div class="col-span-12 md:col-span-9 lg:col-span-10 text-white flex items-center text-center md:text-left pb-6 md:pb-0">
               <?php echo get_field('developer_hiring_detail') ?>
            </div>
        </div>
    </div>
 </section>


 <!-- Expertise counter -->
 <section class="expertise_counter our-achived-numbers py-10 <?php echo get_field('theme_color') ?> text-white text-center bg-[#77ae64]">
       <div class="container small">
           <ul class="grid grid-cols-3">
            <li>
                <div class="counter text-[40px] leading-[50px]" data-value="<?php echo get_field('projects_completed', 'option') ?>">0</div>
                <h3 class="text-xl font-bold text-white">Projects Completed</h3>
            </li>
            <li class="border-x border-yellow-dark">
                <div class="counter text-[40px] leading-[50px]" data-value="<?php echo get_field('years_experience', 'option') ?>">0</div>
                <h3 class="text-xl font-bold text-white">Years Experience</h3>
            </li>
            <li>
                <div class="counter text-[40px] leading-[50px]" data-value="<?php echo get_field('happy_clients', 'option') ?>">0</div>
                <h3 class="text-xl font-bold text-white">Happy Clients</h3>
            </li>
           </ul>
       </div>
 </section>


 <!-- Expertise mail -->
 <section class="bg-[#EEEEEE] py-[60px]">
    <div class="container small text-center">
        <img src="<?php echo THEMEIMAGE ?>/mail.png" alt="" class="mx-auto py-5">
        <h2 class="text-[30px] font-roboto leading-10 text-[#030303]">Looking for a
            <?php $service = get_field('service_name'); 
            if(!empty($service)) : ?>
            <strong class="block font-medium"><?php echo $service ; ?></strong> <?php endif; ?></h2>
        <p class="text-lg font-light pt-2">Grow your business by engaging us for all the work you'd otherwise have to turn down. Email us at <a href="mailto:<?php echo get_field('email'); ?>" class="text-[#337ab7]"><?php echo get_field('email'); ?></a> to get started.</p>
    </div>
 </section>




<?php get_footer(); ?>