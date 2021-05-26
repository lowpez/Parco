<?php get_header(); ?>

<main class="site-content">

<?php if ( have_posts() ): while( have_posts() ): the_post(); ?>

    <!--<?php if ( has_post_thumbnail() ): ?>
        <?php  $banner_image =  wp_get_attachment_image_src( get_post_thumbnail_id() , 'full'); ?>
        <div style="background-image: url(<?php echo $banner_image[0]; ?>);">
    <?php else: ?>
    
    <?php endif; ?>-->

        <header>
            <h1><?php the_title(); ?></h1>
        </header>
        <section class="content-header">
          <?php //the_excerpt(); ?>  
        <div class="site-tagline ">
            <?php the_content(); ?> 

            <!--<?php $meta_value=get_post_meta($post->ID, 'something',true); ?>    
            <?php echo $meta_value; ?>--> 
        </div>
        </section>

<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>