<?php 
   get_header();
?>
 <!-- Service page banner -->

<section class="service-banner overlay md:pb-[58px] pb-8 pt-10 md:pt-11" style="background-image:url(<?php echo get_field('banner_background'); ?>)">
    <div class="container text-center text-white">
        <h2><?php echo get_field('banner_title') ?></h2>
        <p><?php echo get_field('banner_description') ?></p>
        <a href="#contact-section" class="btn action-btn">Get a free quote</a>
    </div>
</section>

<!-- Service detail page start -->
<section class="py-[100px]">
    <div class="container">
        <h2 class="text-center"><?php echo get_field('section_title'); ?></h2>
        <div class="grid grid-cols-12 mt-[50px] gap-[30px]">
           <div class="col-span-12 lg:col-span-5">
            <?php $note_value = get_field('service_note_text'); 
               if (!$note_value == '') : ?>
              <div class="note bg-[#ececec] text-2xl text-[#02457c] p-5 mb-10">
                 <?php echo $note_value; ?>
              </div>
              <?php endif; ?>

              <h3 class="text-[#02609e] mt-2.5 mb-[30px] text-4xl font-bold pb-2.5 after:absolute relative after:w-[99px] after:h-[1px] after:bg-[#d6d6d6] after:bottom-0 after:left-0">WE CAN HELP!</h3>
              <a href="#contact-section" class="btn action-btn blue uppercase">Let’s Talk</a>
           </div>
           <div class="col-span-12 lg:col-span-7">
            
             <ul class="service-detail-point">
                <?php if(have_rows('service_detail_points')) :
                    while(have_rows('service_detail_points')) : the_row(); ?>
                    <li class="mb-6 flex gap-[18px]">
                      <div class="w-14 h-14 min-w-[56px]">
                        <?php $service_point_icon = get_field('detail_point_icon');
                        if (!$service_point_icon == '') : ?>
                          <img src="<?php echo $service_point_icon ?>" alt="service icon">
                        <?php endif; ?>
                      </div>
                      <div class="content">
                        <h3><?php echo get_sub_field('detail_point_title') ?>:</h3>
                        <p><?php echo get_sub_field('detail_point_description') ?></p>
                     </div>
                    </li>
                    <?php endwhile; endif; ?>
             </ul>
           </div>
        </div>
    </div>
</section>

<!-- services better than the rest -->
<section class="py-[100px] better-than-rest bg-[#f0f0f0]">
    <div class="container text-center">
       <h2><?php echo get_field('service_better_title') ?></h2>
       <p><?php echo get_field('service_better_detail') ?></p>

       <ul class="my-[50px]">
        <?php if(have_rows('service_better_rest')) : 
           while(have_rows('service_better_rest')) : the_row();  ?>
            <li class="py-2.5 px-6 mb-4 border-l-2 border-[#03619e] bg-white text-left font-light">
               <span class="text-[#02609e] font-normal"><?php echo get_sub_field('service_title') ?>:</span>
               <?php echo get_sub_field('service_description') ?>.
            </li>
            <?php endwhile; endif; ?>
        </ul>
        <a href="#contact-section" class="btn action-btn blue uppercase">Consult with our expert</a>
    </div>
</section>

<!-- our Portfolio -->

<section class="portfolio-project py-[100px]">
    <div class="container">
        <h2 class="text-center mb-5"><?php echo get_field('portfolio_section_title') ?></h2>
        <div class="portfolio-project-wrap mt-[50px]">
            <?php if(have_rows('our_portfolio_project')) :
                 while(have_rows('our_portfolio_project')) : the_row();
                ?>
            <div class="project-item">
                <div class="flex gap-x-[30px] max-lg:flex-wrap">
                    <div class="w-full lg:w-[32%] text-center lg:text-left mb-[50px] lg:mb-0">
                        <h3 class="text-h3 my-2.5 text-gray-dark"><?php echo get_sub_field('project_heading') ?></h3>
                        <p class="mb-5 text-gray"><?php  echo get_sub_field('project_detail') ?></p>
                        <a href="#contact-section" class="btn action-btn blue">Start your project</a>
                    </div>
                    <div class="w-full lg:w-[68%] text-center">
                    <div class="project-image bg-[url('../assets/images/mac-fp.png')] bg-center bg-cover bg-no-repeat min-w-[340px] max-w-[340px] md:max-w-[643px] px-[47px] h-[205px] md:h-[389px] pt-3.5 md:pt-[22px] mx-auto">
                       <img src="<?php echo get_sub_field('project_image')['url'] ?>" alt="<?php echo get_sub_field('project_image')['alt'] ?>" class="mx-auto w-full max-md:max-w-[246px] md:max-w-[481px]">
                     </div>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<!-- Our partnars review -->
<?php if(have_rows('testimonial', 'option')) : ?>
<section class="py-[100px] bg-[#ECECEC]">
    <div class="container small">
        <h2 class="mb-5 text-center">What Our Clients Say...</h2>
        <ul class="testimonial-slider">
            <?php while(have_rows('testimonial', 'option')) : the_row(); ?>
            <li class="text-center">
                <figure class="rounded-full w-[70px] h-[70px] mx-auto overflow-hidden mb-5">
                    <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>" class="w-full">
                </figure>
                <p class="font-light mb-2.5 text-gray"><?php echo get_sub_field('content'); ?></p>
                <h3 class="text-gray-dark mb-2.5 inline-block font-medium"> <?php echo get_sub_field('name_&_post'); ?></h3>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</section>
<?php endif; ?>

<!-- Service Faq section  -->
<section class="service-faq py-[100px]">
    <div class="container">
        <h2 class="text-center"><?php echo get_field('faq_section_title') ?></h2>
        <div class="faq-list grid lg:grid-cols-2 gap-x-[30px] mt-10">
            <?php if(have_rows('faq_list')) :   
            while(have_rows('faq_list')) : the_row(); ?>                                      
            <div class="faq-item py-[15px] border-b border-[#d0d0d0] w-full lg:w-[95%] h-fit">
                <h3><?php echo get_sub_field('faq_quection') ?></h3>
                <div class="faq-content relative px-5 font-light text-gray before:content-['A.'] before:absolute before:left-0 before:text-black before:font-medium max-h-0 overflow-hidden transition-all duration-300">
                    <?php echo get_sub_field('faq_answer') ?>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>

        <div class="mt-[100px] text-center">
            <p class="text-xl mb-10 font-light"><?php echo get_field('have_any_question'); ?> <a href="mailto:<?php echo get_field('email'); ?>" class="text-[#337ab7]"><?php echo get_field('email'); ?></a></p>
            <a href="#contact-section" class="btn action-btn blue uppercase">Get a free quote</a>
        </div>
    </div>
</section>


<?php get_footer(); ?>