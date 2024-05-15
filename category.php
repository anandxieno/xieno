<?php
// Template Name: Our work 
get_header();
?>

<!-- Section banner  -->
<section class="work-banner overlay pt-[82px] pb-32 md:py-20 md:min-h-[333px] bg-no-repeat bg-cover flex justify-center items-center light" style="background-image:url(<?php echo THEMEIMAGE ?>/services-banner.jpg)">
  <div class="container text-center text-white">
    <h2 class="font-thin">Our Portfolio</h2>
  </div>
</section>

<!-- Banner secton start -- -->

<section class="container post-listing py-[110px]">

  <ul class="post-categories max-w-[1100px] mx-auto mt-2.5 mb-[90px] flex flex-wrap gap-x-5 gap-y-4 justify-center">
    <li><a href="<?php echo site_url(); ?>/our-work/">All</a></li>
    <?php
    $current_cat = single_cat_title('', false);
    $categories = get_categories([
      'hide_empty' => false,
    ]);
    foreach ($categories as $category) {
      if ($current_cat ===  $category->name) {
        echo '<li><a href="' . get_category_link($category->term_id) . '" class="active">' . $category->name . '</a></li>';
      } else {
        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
      }
    }
    ?>
  </ul>
  <div class="posts-wrap flex justify-between flex-wrap">

    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <div class="post-item w-full md:w-1/2 md:max-w-[324px] lg:max-w-[423px] xl:max-w-[464px] pb-[50px] md:pb-0">
          <?php $terms = get_the_terms(get_the_ID(), 'post');  ?>
          <div class="browser-window pt-[30px] bg-[#dfdfdf] shadow-[0px_0px_14.55px_0.45px_rgba(0,0,0,.22)] relative max-w-[464px] mx-auto">
            <div class="frame absolute top-[3px] left-2"> <span class="w-2.5 h-2.5 inline-block ml-1 bg-[#f45c5c] rounded-full"></span> <span class="w-2.5 h-2.5 inline-block ml-1 bg-[#f1d555] rounded-full"></span> <span class="w-2.5 h-2.5 inline-block ml-1 bg-[#5cf467] rounded-full"></span></div>
            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="" ?>
          </div>
          <div class="text-center pt-5">
            <h3 class="text-3xl mt-2 mb-2.5 text-gray-dark"><?php echo the_title(); ?> </h3>
            <?php echo the_content(); ?>
          </div>

        </div>
    <?php endwhile;
    endif;
    wp_reset_postdata(); ?>
  </div>

</section>

<?php get_footer(); ?>