<?php get_header(); ?>

<!-- Apply form popup -->
<div class="applyform">
    <div class="md:container small">
        <div class="bg-white relative popup-content">
            <div id="close-btn" class="w-5 h-5 absolute right-2 top-2 cursor-pointer">
                <span class="top-[-6px] right-[-3px] w-4 h-[2px] bg-gray  inline-block relative before:absolute before:w-4 before:h-[2px] before:bg-gray before:-rotate-90 rotate-45"></span>
            </div>
            <h2 class="text-center pt-[45px] pb-8 text-[26px] md:text-4xl">Apply for the Job</h2>
            <div class="form-body bg-[#eee] pt-5 px-10 pb-5 md:pb-20 border-t border-[#dcdcdc]">
                <?php echo do_shortcode('[contact-form-7 id="8ed56db" title="Apply form"]'); ?>
            </div>
        </div>

    </div>
</div>



<!-- Opening banner start -->
<section class="light overlay bg-cover pt-6 xl:pt-[110px] pb-[30px] md:pb-20 xl:pb-[100px] text-center" style="background-image: url('http://xieno.loc/wp-content/uploads/2024/03/career-banner_new.jpg')">
    <div class="container">
        <h2 class="font-thin">Start Your journey to an <strong class="text-yellow font-roboto">Excellent career.</strong> </h2>
        <p class="text-base md:text-xl pt-6 pb-2.5 text-white font-light">Work with fortune 500 companies and unleash your potential</p>
    </div>
</section>

<!-- Job detail -->
<section class="opening-detail pt-[50px] md:pt-20 pb-[50px]">
    <div class="container">
        <h2 class="text-center mb-10 md:mb-[50px]">Current Openings for <strong><?php the_title(); ?></strong> </h2>
        <div class="opening-item bg-[#eee] p-5 md:p-7 flex max-xs:flex-col items-center gap-2.5 xs:justify-between mb-10 md:mb-[60px]">
            <div class="list-content w-full xs:w-auto">
                <span class="text-lg text-gray-dark py-[2px] block"><strong>Positions:</strong> <?php echo get_field('positions') ?></span>
                <span class="text-lg text-gray-dark py-[2px] block"><strong>Location:</strong> <?php echo get_field('location') ?></span>
                <span class="text-lg text-gray-dark py-[2px] block"><strong>Job Terms:</strong> <?php echo get_field('job_terms') ?></span>
            </div>
            <div class="list-btn w-full xs:w-auto">
                <a class="btn text-lg bg-[#02609e] py-3.5 px-16 text-white uppercase popup-with-form">Apply</a>
            </div>
        </div>
        <div class="content md:px-[30px]">
            <?php the_content(); ?>
        </div>
        <div class="text-center">
            <a class="btn text-lg bg-[#02609e] py-3.5 px-14 text-white uppercase mt-2 md:mt-[30px] md:mb-[50px] popup-with-form">Apply for this Job</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>