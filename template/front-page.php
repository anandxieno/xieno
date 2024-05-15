<?php
// Template Name: Front page 

get_header();
?>
<!-- Home Banner section start -->
<section class="home-banner bg-no-repeat bg-center text-white text-center pt-[1px] md:pt-[51.3px] pb-12 md:pb-20 min-h-[500px]" style="background-image:url('<?php echo THEMEIMAGE; ?>header-bg.jpg')">
    <div class="container">
        <h1 class="text-h1m md:text-h1 font-roboto-slab font-thin"><?php echo get_field('heading'); ?></h1>
        <span class="ml-[5px] text-2xl md:text-4xl font-oswald uppercase leading-6 tracking-[5px] md:tracking-[7px] font-light inline-block mb-[30px]"><?php echo get_field('sub_connect'); ?></span>
        <ul class="max-w-[180px]  md:max-w-full mx-auto flex flex-col md:flex-row gap-2.5 lg:gap-[30px] justify-between lg:justify-center">
            <?php if (have_rows('our_loved')) :
                while (have_rows('our_loved')) : the_row();
            ?>
                    <li class="pl-8 bg-no-repeat bg-left text-left" style="background-image:url('<?php echo get_Sub_field('topic_icon') ?>')"><span class="text-base lg:text-lg font-roboto-slab font-light"><?php echo get_Sub_field('topic_name') ?></span></li>
            <?php endwhile;
            endif; ?>
        </ul>
        <a href="#contact-section" class="btn">Start Your Project</a>
    </div>
</section>


<!-- Discover our services -->
<section class="service-tab py-[60px] bg-[url('../assets/images/polygon-bg.jpg')] bg-no-repeat bg-cover">
    <div class="container">
        <div class="section-heading text-center container small">
            <h2><?php echo get_field('service_section_heading'); ?></h2>
            <p class="pt-[6px]"><?php echo get_field('service_section_content'); ?></p>
        </div>

        <ul class="service-tab grid grid-cols-6 mt-2">
            <?php if (have_rows('our_service')) :
                while (have_rows('our_service')) : the_row();
                    $service_id = get_sub_field('service_name');
                    $service_id = strip_tags($service_id);
                    $service_id = strtolower(str_replace(' ', '', $service_id));
                    $service_id = str_replace('&nbsp;', '', $service_id);
            ?>
                    <li class="text-center">
                        <a href="#<?php echo $service_id ?>" class="p-4 inline-block service-icon" id="<?php echo $service_id ?>">
                            <div class="icon w-10 md:w-20 lg:w-[109px] h-11 md:h-[87px] bg-cover lg:h-[118px] bg-no-repeat bg-top mx-auto" style="background-image:url('<?php echo get_sub_field('service_icon') ?>')"></div>
                            <span class="max-md:hidden"> <?php echo get_sub_field('service_name') ?></span>
                        </a>
                    </li>
            <?php endwhile;
            endif; ?>
        </ul>
    </div>
</section>

<section class="service-content">
    <?php if (have_rows('our_service')) :
        while (have_rows('our_service')) : the_row();
            $service_id = get_sub_field('service_name');
            $service_id = strip_tags($service_id);
            $service_id = strtolower(str_replace(' ', '', $service_id));
            $service_id = str_replace('&nbsp;', '', $service_id);
    ?>
           <?php 
          echo  "<style> #" . $service_id . " .container:before {
                    border-bottom-color: " . get_sub_field('service_theme') . "
                } </style>"; ?>
            <div class="tab-item text-white text-center pb-6 md:pb-12 hidden" id="<?php echo $service_id ?>" style="background:<?php echo get_sub_field('service_theme'); ?>;">
                <div class="container relative before:border-[12px] md:before:border-[24px] before:-ml-3 md:before:-ml-6 before:border-transparent before:w-0 before:h-0 before:absolute before:bottom-full">
                    <h2 class="text-2xl md:text-h3 pt-[30px] pb-5 font-bold font-roboto"><?php echo get_sub_field('service_detail_heading') ?></h2>
                    <p><?php echo get_sub_field('service_description') ?></p>
                    <?php if (have_rows('service_technology_icon')) : ?>
                        <div class="techonology-ico flex pt-[30px] md:pt-[50px] pb-[30px] gap-9 flex-wrap lg:gap-[60px] justify-center">
                            <?php while (have_rows('service_technology_icon')) : the_row(); ?>
                                <img src="<?php echo get_sub_field('technology_icon') ?>" alt="">
                        <?php endwhile;
                        endif; ?>
                        </div>
                        <a href="#" class="btn btn-light-border md:mt-5">Start Your Project </a>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</section>


<!-- Our Expertise section start -->

<section class="our-expertise pt-10 pb-6 bg-[url('../assets/images/section-bg-prlx1.jpg')] bg-cover">
    <div class="container">
        <div class="grid grid-cols-12 gap-y-3.5 sm:gap-0">
            <div class="col-span-12 md:col-span-3">
                <h2><?php echo get_field('experticise_heading') ?></h2>
            </div>
            <div class="col-span-12 md:col-span-9">
                <div class="grid sm:grid-cols-3 gap-x-[30px] gap-y-4 sm:gap-y-6">
                    <?php if (have_rows('experticise_item')) :
                        while (have_rows('experticise_item')) : the_row(); ?>
                            <div class="expertise-item bg-white pt-9 px-[6px] pb-7 rounded-[4px] text-center mt-6 sm:mt-10">
                                <div class="icon bg-yellow-dark w-[53px] h-[53px] rounded-full py-[15px] flex justify-center items-center mt-[-62px] mx-auto mb-4 sm:mb-6">
                                    <img src="<?php echo get_sub_field('experticies_icon') ?>" alt="" class="w-7">
                                </div>
                                <h3 class="text-lg lg:text-xl font-semibold font-roboto uppercase mb-[6px] text-gray-dark"><?php echo get_sub_field('experticise_item_heading') ?></h3>
                                <p class="text-sm sm:text-xs lg:text-sm text-[#888888] pb-2.5 leading-[1.2]"><?php echo get_sub_field('experticise_item_detail') ?></p>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our featured product section start -->

<section class="py-10 md:py-[60px] lg:py-[100px] featured-project">
    <div class="container">
        <div class="section-heading text-center">
            <h2><?php echo get_field('featured_section_heading') ?></h2>
            <p><?php echo get_field('featured_section_detail') ?></p>
        </div>

        <?php if (have_rows('featured_project')) : ?>
            <div class="featured-project mt-10 lg:mt-[90px]">
                <div class="featured-project-wrap">
                    <?php while (have_rows('featured_project')) : the_row(); ?>
                        <div class="project-item">
                            <div class="flex flex-wrap gap-y-2.5 md:gap-y-[30px]">
                                <div class="w-full lg:w-1/2 xl:w-[60%]">
                                    <div class="project-image bg-[url('../assets/images/mac-fp.png')] bg-center bg-cover xl:bg-auto bg-no-repeat max-w-[290px] xs:max-w-[450px] md:max-w-full lg:max-w-[643px] h-[175px] xs:h-[275px] md:h-[435px] lg:h-[281px] xl:h-[389px] pt-2.5 xs:pt-[18px] md:pt-[30px] lg:pt-3.5 xl:pt-[22px] mx-auto">
                                        <img src="<?php echo get_sub_field('project_image') ?>" alt="" class="w-[214px] xs:w-[340px] md:w-[512px] lg:w-[340px] xl:w-auto mx-auto">
                                    </div>
                                </div>


                                <div class="project-detail text-center w-full lg:w-1/2 xl:w-2/5 py-5 pl-5 md:pl-10 pr-5">
                                    <figure class="mb-4">
                                        <img src="<?php echo get_sub_field('project_logo') ?>" alt="" class="max-lg:mx-auto">
                                    </figure>
                                    <p><?php echo get_sub_field('project_detail') ?></p>
                                    <?php if (have_rows('product_techonology_uses')) :  ?>
                                        <div class="techonologyes flex gap-2 mt-2.5 justify-center lg:justify-start">
                                            <?php while (have_rows('product_techonology_uses')) : the_row(); ?>
                                                <div class="techonology w-[60px] h-[60px] bg-[#e6e6e6] flex justify-center items-center rounded-full">
                                                    <img src="<?php echo get_sub_field('technology_image') ?>" alt="">
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- Our clients -->
        <?php if (have_rows('our_clients')) : ?>
            <div class="our-clients">
                <h2 class="mt-9 md:mt-[60px] lg:mt-[50px] xl:mt-[100px] mb-[15px]"><?php echo get_field('our_clients_title'); ?></h2>
                <div class="client-wrap grid grid-cols-3 lg:grid-cols-6 gap-y-[15px]">
                    <?php while (have_rows('our_clients')) : the_row(); ?>
                        <!-- <div><img src="<?php echo get_sub_field('client_image') ?>" alt=""></div> -->
                        <div><img src="<?php echo get_sub_field('client_image')['url'] ?>" alt="<?php echo get_sub_field('client_image')['alt'] ?>"></div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>

<!-- our Basic overview -->
<section class="overview-section bg-[url(../assets/images/overview-bg.jpg)] bg-[#1b5c93] text-white py-[30px] md:py-[60px]">
    <div class="container">
        <div class="flex flex-wrap md:flex-nowrap gap-[30px]">
            <div class="w-full md:w-3/4 overview-left">
                <h2><?php echo get_field('overview_section_heading') ?></h2>
                <p class="italic leading-[34px] mb-5 md:mb-10"><?php echo get_field('overview_section_details') ?></p>
                <?php if (have_rows('our-features')) : ?>
                    <div class="our-features pt-5 md:pt-8">
                        <ul class="grid lg:grid-cols-2 gap-8">
                            <?php while (have_rows('our-features')) : the_row(); ?>
                                <li class="flex">
                                    <figure class=" border border-white rounded-full w-10 h-fit p-2"><img src="<?php echo get_sub_field('feature_icon') ?>" alt="Feature Icon"></figure>
                                    <div class="div pl-5">
                                        <p><strong><?php echo get_sub_field('feature_heading') ?></strong><?php echo get_sub_field('feature_deatil') ?></p>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
            <div class="w-full md:w-1/4">
                <div class="overview-right lg:mt-5 xl:mt-[60px]">
                    <h2 class="md:text-[23px] lg:text-[30px] leading-8 xl:text-h3 text-yellow mb-10">Meet the team</h2>
                </div>
                <?php if (have_rows('our_team')) : ?>
                    <ul class="tems grid grid-cols-2 md:grid-cols-1">
                        <?php while (have_rows('our_team')) : the_row() ?>
                            <li class="flex flex-col xs:flex-row md:flex-col lg:flex-row xs:gap-2.5 mb-[30px] items-center xs:items-start md:items-center">
                                <figure class="w-[60px] xs:w-[90px] lg:w-[60px] xl:w-[90px] h-[60px] xs:h-[90px] lg:h-[60px] xl:h-[90px] border-2 border-white rounded-full overflow-hidden"><img src="<?php echo get_sub_field('person_image')['url'] ?>" class="object-fill w-full h-full" alt="<?php echo get_sub_field('person_image')['alt'] ?>"></figure>
                                <div class="about">
                                    <span class="text-bodythree font-light"><strong class="pt-5 md:pt-[4px] xl:pt-5 xs:pb-[5px] block font-medium"><?php echo get_sub_field('person_name') ?></strong><?php echo get_sub_field('person_role') ?></span>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
        <?php if (have_rows('achived_number')) : ?>
            <div class="our-achived-numbers md:mt-[100px]">
                <div class="relative after:w-[6%] lg:after:w-[14%] after:h-[1px] after:bg-white xs:after:absolute after:right-0 after:top-1/2 before:w-[6%] lg:before:w-[14%] before:h-[1px] before:bg-white xs:before:absolute before:left-0 before:top-1/2">
                    <ul class="max-w-[350px] md:max-w-[670px] w-full mx-auto flex justify-around">
                        <li class="text-center">
                            <div class="counter text-[30px] leading-6 font-oswald font-light after:content-['+'] after:relative after:top-[-3px] after:text-3xl" data-value="<?php echo get_field('projects_completed') ?>">0</div>
                            <span class="font-medium">Projects Completed</span>
                        </li>
                        <li class="text-center">
                            <div class="counter text-[30px] leading-6 font-oswald font-light after:content-['+'] after:relative after:top-[-3px] after:text-3xl" data-value="<?php echo get_field('years_experience') ?>">0</div>
                            <span class="font-medium">Years Experience</span>
                        </li>
                        <li class="text-center">
                            <div class="counter text-[30px] leading-6 font-oswald font-light after:content-['+'] after:relative after:top-[-3px] after:text-3xl" data-value="<?php echo get_field('happy_clients') ?>">0</div>
                            <span class="font-medium">Happy Clients</span>
                        </li>
                        <li class="text-center">
                            <div class="counter text-[30px] leading-6 font-oswald font-light after:content-['+'] after:relative after:top-[-3px] after:text-3xl" data-value="<?php echo get_field('countries') ?>">0</div>
                            <span class="font-medium">Countries</span>
                        </li>
                        <ul/>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Our client says -->
<?php if (have_rows('testimonial', 'option')) : ?>
    <section class="py-[30px] md:py-[58px] bg-[url('../assets/images/testimonial-slider-bg.jpg')] bg-repeat-x">
        <div class="container small">
            <h2 class="my-5 md:mb-12 text-center">What Our Clients Say...</h2>
            <ul class="testimonial-slider">
                <?php while (have_rows('testimonial', 'option')) : the_row(); ?>
                    <li class="text-center">
                        <p class="text-gray leading-10 text-xl"><?php echo get_sub_field('content'); ?></p>
                        <h3 class="text-[#888] mt-[8px] mb-3.5 inline-block text-base"><?php echo get_sub_field('name_&_post'); ?></h3>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>


<?php get_footer(); ?>