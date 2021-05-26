<?php get_header(); ?>

<?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
<main class="site-content">
	    <header class="content-header">
          <?php //the_excerpt(); ?>  
        <div class="site-tagline">
            <h1><?php if(!empty(the_title())); ?>
            	<span>
            		<strong class="ucfirst"><?php the_field('fecha_de_lanzamiento'); ?></strong> \ 
            		<strong>En:</strong> <strong><?php echo get_the_term_list( $post->ID, 'area', null, ', ' ) ?></strong> \
            		<strong><a href="<?php the_field('linky'); ?>">Web</strong></a>
            	</span>
            </h1>
        </div>
    </header>

            <div class="page-desc">
            		<h2 class="p-summary"><?php echo get_the_excerpt(); ?></h2>
                <div class="e-content"><?php the_content(); ?></div>
            </div>
            
    <article class="project">
        <div class="project-assets">

        <?php $images = get_field('gallery'); ?>
            <?php if( $images ): ?>
                <?php foreach( $images as $image ): ?>

                    <div class="image">
                        <div data-picture>
                            <div data-src="<?php echo $image['url']; ?>"></div>
                            <div data-src="<?php echo $image['url']; ?>" data-media="(-webkit-min-device-pixel-ratio: 2),(min--moz-device-pixel-ratio: 2),(-o-min-device-pixel-ratio: 2/1),(min-device-pixel-ratio: 2),(min-resolution: 192dpi),(min-resolution: 2dppx)"></div>
                            <!--[if (lt IE 9) & (!IEMobile)]>
                                <div data-src="<?php echo $image['url']; ?>"></div>
                            <![endif]-->
                            <noscript>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </noscript>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif ?>

        </div>         
    </article>
</main>

    <nav role="navigation">
        <ul class="cd-pagination animated-buttons custom-icons">
            <li class="button"><?php previous_post_link( '%link', '<i>%title</i>'); ?></li>
            <li class="button-main"><a href="<?php echo get_post_type_archive_link( $post_type ); ?>"><i>Portfolio</i></a></li>
            <li class="button"><?php next_post_link( '%link', '<i>%title</i>'); ?></li>
        </ul>
    </nav> <!-- cd-pagination-wrapper -->

 <?php endwhile; endif; ?>

<?php get_footer(); ?>