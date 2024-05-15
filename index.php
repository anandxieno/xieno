<?php get_header(); ?>

 <!-- Section banner  -->
<section class="work-banner overlay py-20">
    <div class="container text-center text-white">
        <h2>Our index</h2>
        <?php // the_post_thumbnail('full');  
           $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
           <img src="<?php echo $feat_image; ?>" />
    </div>
</section>

<?php get_footer(); ?>
