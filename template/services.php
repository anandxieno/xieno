<?php 
   // Template Name: services page
   get_header();
?>

<!-- Service loop -->
<section>
    <div class="container">
        <?php 
           $service_post = new WP_Query ([
              'post_type' => 'service',
              'post_status' => 'publish',
           ]);
        
        while( $service_post->have_posts()): 
            $service_post->the_post();
            ?>
            <h2><?php the_title(); ?></h2>
            <a href="<?php the_permalink() ?>">more</a>

           <?php endwhile;
        ?>
    </div>
</section>

<?php get_footer(); ?>