<!-- Contact us section start -->
<section id="contact-section" class="py-[50px] md:py-20 bg-[#424347] contact-form-section">
    <div class="container small">
        <?php if(is_single() && 'expertise' == get_post_type()){ ?>
            <h3><?php echo get_field('contact_heading'); ?></h3>
        <?php }else{ ?>
            <h2>Discuss your project with us ! !</h2>
        <?php } ?>

        <div class="contact-form pb-6">
          <h3><?php echo do_shortcode('[contact-form-7 id="3732ab8" title="Contact form"]') ?></h3>  
        </div>
    </div>
</section>
<!-- Footer Start -->
<section class="footer_section bg-[#2e3035] text-white py-6 md:py-10">
    <div class="container grid grid-cols-12 gap-x-[30px]">
        <div class="col-span-12 md:col-span-3">
            <a href="/"><img src="<?php echo get_field('footer_logo', 'option') ?>" alt="xieno" class="max-w-[135px] mb-8"></a>
            <?php if (have_rows('social_media', 'option')) : ?>
                <span class="text-lg pb-2.5 inline-block font-normal text-white leading-[1.1]">Follow us on Social Media</span>
                <ul class="flex gap-8 xs:gap-5 md:gap-3.5 pb-4">
                    <?php while (have_rows('social_media', 'option')) : the_row('option'); ?>
                        <li><a href="<?php echo get_sub_field('link'); ?>"><img src="<?php echo get_sub_field('icon', 'option')['url']; ?>" alt="<?php echo get_sub_field('icon', 'option')['alt']; ?>" class="max-w-[16px] grayscale"></a></li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
        <div class="col-span-12 md:col-span-9">
             <div class="grid grid-cols-3">
                    <?php 
                        wp_nav_menu( array(
                            'menu'           => 'Footer menu', 
                            'theme_location' => 'footer-menu',
                        ) );
                    ?>
                    <div>
                        <span class="font-semibold pb-[15px] inline-block leading-[1.2]">Services</span>
                        <?php 
                          wp_nav_menu( array(
                            'menu'           => 'Footer service', 
                            'theme_location' => 'footer-service',
                        ) );
                        ?>
                    </div>
                    <div>
                        <span class="font-semibold pb-[15px] inline-block leading-[1.2]">Expertise</span>
                        <?php 
                          wp_nav_menu( array(
                            'menu'           => 'Footer Expertise', 
                            'theme_location' => 'footer-expertise',
                        ) );
                        ?>
                    </div>
             </div>
        </div>
        <div class="col-span-12 disclaimer_content pt-4 md:pt-10">
            <p><?php echo get_field('disclaimer', 'option'); ?></p>
        </div>
    </div>
</section>
<a id="scroll-top" class="w-10 h-10 fixed bottom-[37px] z-[9999] bg-[#666] rounded-md transition-all duration-300 -right-12" href="#" title="To Top"><img src="<?php echo THEMEIMAGE ?>top-arrow.svg" alt=""></a>
<div class="hidden gap-[15px] md:gap-5 lg:gap-[30px] md:grid-cols-3"></div>

<?php wp_footer(); ?>

</main>
</body>

</html>