<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xieno</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <main>
        <header id="main-header" class="bg-sky-700 main-header z-10">
            <div class="max-md:px-3 max-lg:px-[26px] lg:container">
                <div class="flex items-center justify-between lg:relative">
                    <div class="header-logo w-7 xs:w-[103px] lg:w-[113px]">
                        <a href="<?php echo site_url(); ?>"><img src="<?php header_image(); ?>" alt="logo" class="max-xs:hidden md:-ml-[15px]"> <img src="<?php echo THEMEIMAGE ?>/logo_resonsive.svg" alt="" class="xs:hidden"></a>
                    </div>

                    <div class="flex items-center gap-[5px] md:gap-[15px] flex-row-reverse lg:flex-row">
                        <?php
                        wp_nav_menu(['theme_location' => 'header-menu',
                        'menu_class'       => 'header-main-menu',]);
                        ?>
                        <a href="#contact-section" class="btn-link">START YOUR PROJECT</a>
                    </div>
                </div>


            </div>
        </header>