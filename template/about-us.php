<?php
  // Template Name: About us
  get_header(); 
?>
<section>
<?php $banner_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
  if($banner_img): ?>
  <img src="<?php echo $banner_img ?>" alt="">
  <?php endif;  ?>
</section>

<!-- About Intro section -->
<section class="intro-about container text-center pt-5 pb-[60px]">
     <h2><?php echo get_field('intro_heading') ?></h2>
     <p><?php echo get_field('intro_detail') ?></p>
</section>


<!-- About timeline section -->
<?php if(have_rows('time_line_process')) : ?>
<section class="timeline-section pt-12 lg:py-12 bg-[url(../assets/images/timeline-bg.jpg)] bg-no-repeat light text-center bg-cover">
      <div class="container">
        <h2 class="mb-12">Timeline</h2>
        
        <div class="timeline-process grid xs:grid-cols-2 lg:grid-cols-4">
        <?php  while (have_rows('time_line_process')) : the_row(); ?>
            <div class="bg-[url(../assets/images/timeline-bottom.png)] bg-no-repeat bg-bottom pb-[60px] px-[15px]">
               <img src="<?php echo get_sub_field('time_line_icon'); ?>" alt="" class="mx-auto">
               <h3 class="text-xl mt-3.5 mb-1 font-semibold"><?php echo get_sub_field('time_line_title'); ?></h3>
               <p class="text-white font-light"><?php echo get_sub_field('time_line_excerpt'); ?></p>
               <span class="text-xl text-white font-light"><?php echo get_sub_field('time_line_year'); ?></span>
            </div>
            <?php endwhile; ?>
        </div>
        
      </div>
</section>
<?php endif; ?>

<!-- About core section -->
<section class="about-core py-9 md:py-[100px]">
  <div class="container">
       <div class="core-wrap grid grid-cols-12">
        <div class="core-gallery col-span-12 lg:col-span-6">
            <img src="<?php echo get_field('core_image'); ?>" alt="" class="rounded-l-md w-full">
            <div class="core-note mt-8 bg-[#0381bf] pt-[22px] px-5 pb-7 rounded-l-md text-base leading-[30px] text-white"><?php echo get_field('core_info_box'); ?></div>
        </div>
        <div class="col-span-1 max-lg:hidden"></div>
        <div class="col-span-12 lg:col-span-5 mt-[50px] lg:mt-0">
          <h2><?php echo get_field('core_section_title'); ?></h2>
          <ul class="bg-[url(../assets/images/round-top.png),_url(../assets/images/round-bottom.png),_url('../assets/images/ul-rep.jpg')] bg-[position:top_left_4px,_bottom_left_4px,_top_left_4px] space-y-[30px] mt-[60px]" style="background-repeat: no-repeat,no-repeat, repeat-y;">
         <?php if(have_rows('core_values_list')) : 
             while(have_rows('core_values_list')) : the_row();   ?>
            <li class="bg-[url(../assets/images/dimond.png)] pl-[60px] mt-2.5 bg-no-repeat bg-[top_5px_left]">
              <span class="text-base text-gray-dark font-bold mb-[5px]"><?php echo get_sub_field('core_list_title') ?></span>
              <p class="text-gray mb-2.5"><?php echo get_sub_field('core_list_detail') ?></p>
            </li>
        
          <?php endwhile; endif; ?>
          </ul>
        </div>
       </div>
  </div>
</section>

<!-- About us our culture section start -->

<section>
    <div class="intro bg-[#025898] py-5 md:py-10 text-center relative after:absolute after:top-[90%] md:after:top-full after:left-1/2 after:-translate-x-1/2 after:bg-[url(../assets/images/down-arrow.png)] after:w-[116px] after:h-[42px]">
      <h2 class="text-white text-4xl">Our Culture</h2>
    </div>
    <div class="wrap grid lg:grid-cols-2">
        <div class="content lg:max-w-[607px] mr-0 ml-auto pt-[50px] order-2 max-lg:px-4">
         <h2><?php echo get_field('culture_section_heading') ?></h2>
         <p class="text-[#5d5d5d] font-light leading-[30px] pt-4"><?php echo get_field('culture_detail') ?></p>
         <div class="core-note mb-7 mt-4 lg:mt-8 bg-[#02609e] pt-[22px] px-5 pb-7 rounded-l-md text-base leading-[30px] text-white"><?php echo get_field('culture_info_box') ?></div>
        </div>
        <div class="image order-1">
           <img src="<?php echo get_field('culture_image'); ?>" alt="" class="w-full">
        </div>

        <div class="image order-3">
          <img src="<?php echo get_field('culture_second_image'); ?>" alt="" class="w-full">
         <div class="core-note bg-[#0381bf] pt-[22px] px-5 pb-7 text-base text-white">
            <h3 class="text-white text-[22px] font-bold mb-1">Run for women’s pride</h3>
            <?php echo get_field('culture_info_box') ?>
          </div>
        </div>
        <div class="content w-full lg:max-w-[650px] py-[30px] lg:pb-0 lg:pt-10 lg:pl-[50px] order-4 max-lg:px-4">
          <h2><?php echo get_field('culture_second_title') ?></h2>
          <h3 class="text-xl font-bold text-gray-dark mt-5 mb-2.5">With Power Comes The Responsibility.</h3>
          <p class="text-[#5d5d5d] pr-5 mb-[30px] leading-[30px]">One of the most important duty of running an enterprise is that we make a difference not only among people who are directly connected to us but also in our surroundings where everyone appreciate our existence.</p>
          <p class="text-[#5d5d5d] pr-5 mb-[30px] leading-[30px]">We do not fall into the category of activists supporting any particular cause. When we see anything happening around us that calls our inner human being, we do not hesitate to move forward and support it.</p>
          <h3 class="text-xl font-bold text-gray-dark mt-5 mb-2.5">Organizations we are associated with:</h3>
          <div class="grid xs:grid-cols-2">
            <div class="div">
            <img src="https://xieno.com/wp-content/themes/xieno/assets/images/logo-naya-sawera.png" alt="">
            <img src="https://xieno.com/wp-content/themes/xieno/assets/images/logo-help-age-india.png" alt="" class="mt-7">
            </div>
            <div class="div">
              <img src="https://xieno.com/wp-content/themes/xieno/assets/images/logo-sos-children-villages.png" alt="">
            </div>
            <div class="mt-6">
              <h3 class="text-xl font-bold text-gray-dark mt-5 mb-2.5">We also organize</h3>
              <img src="https://xieno.com/wp-content/themes/xieno/assets/images/logo-blood-donation.png" alt="">
            </div>
            <div class="mt-6">
              <h3 class="text-xl font-bold text-gray-dark mt-5 mb-2.5">Run in our city marathon</h3>
              <img src="https://xieno.com/wp-content/themes/xieno/assets/images/logo-jaipur-marathon.png" alt="">
            </div>
          </div>
           
          <h3></h3>
        </div>
    </div>
</section>

<!-- Leadership section start -->

<?php if(have_rows('leadership_member')) :  ?>
<section class="py-9 md:pt-14 md:pb-20 bg-[#f0f0f0] border-b border-[#dcdcdc]">
    <div class="container">
        <h2 class="text-center">Leadership</h2>

        <div class="leadership-team flex flex-wrap justify-center gap-[30px] mt-10 md:mt-12">
          <?php while (have_rows('leadership_member')) : the_row();     ?>  
            <div class="w-[255px] max-w-full">
                <img src="<?php echo get_sub_field('leader_image')['url'] ?>" alt="<?php echo get_sub_field('leader_image')['alt'] ?>" class="w-full">
                <div class="mt-6">
                  <h3 class="text-base font-semibold text-gray-dark"><?php echo get_sub_field('leader_name') ?></h3>
                  <span class="text-[#5d5d5d] font-light inline-block text-sm mt-1"><?php echo get_sub_field('leader_profile') ?></span>
                </div>
            </div>
          <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Our social media sectio -->

<section class="container text-center py-9 lg:py-[85px] about-social">
      <h2 class="max-lg:text-3xl">What We Are Upto These Days?</h2>
      <p class="my-[18px] text-[#5d5d5d] xs:text-lg font-light">Interested in knowing what keeping us busy these days? Check out our social media profiles</p>
     <?php if(have_rows('social_media_list')) : ?>
      <ul class="flex gap-5 justify-center mt-10 xs:mt-[60px]">
        <?php while (have_rows('social_media_list')) : the_row();   ?>
        <li><a href="<?php echo get_sub_field('media_link') ?>" class="w-[45px] h-[45px] xs:w-[73px] xs:h-[73px] bg-[#faf2f6] inline-block p-3.5">
            <img src="<?php echo get_sub_field('media_icon')['url'] ?>" alt="<?php echo get_sub_field('media_icon')['alt'] ?>" class="w-full">
        </a></li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
</section>

<!-- Anout bottom -->
<section class="about-bottom py-10 lg:py-[100px] bg-[url(https://xieno.com/wp-content/themes/xieno/assets/images/these-days-bg.jpg)] resize-x">
  <div class="container grid lg:grid-cols-2 gap-[30px]">
       <div class="text-center">
          <h2 class="text-4xl font-roboto font-bold text-gray-dark mb-[30px]">Have A Project In Mind?</h2>
          <p class="text-[#5d5d5d]">If you have a project you’d like to discuss, please give us
            as much detail as you can and we will get back to you as soon as we can.</p>
            <a href="#" class="btn action-btn blue-light mt-2.5 lg:mt-10">discuss</a>
       </div>
       <div class="text-center">
          <h2 class="text-4xl font-roboto font-bold text-gray-dark mb-[30px]">We Are In Hunt For Outstanding...</h2>
          <p class="text-[#5d5d5d]">If you feel you are one of among us or aspire to become
one, then why not drop a line to show your interest.</p>
            <a href="#" class="btn action-btn blue-light mt-2.5 lg:mt-10">See current openings</a>
       </div>
  </div>
</section>
<?php get_footer(); ?>