<?php 
/**
* Template name: Pagina de inicio
*
* Plantilla de pagina de inicio
*
* Plantilla para mostrar la pagina de inicio
* 
* @package Parco
* @subpackage Parco
* @since 1.0
*/
 ?>

<?php get_header(); ?>

<?php 

        $options = get_theme_mod('parco_settings');

        // Titulo seccion proyectos
        if ( ! empty($options['projects_section_title']) ) {
            $projects_section_title = $options['projects_section_title'];
        }

        if ( isset( $options['show_projects_section'] ) ) {
            $show_projects_section = $options['show_projects_section'];
        } else{
            $show_projects_section = false;
        }


        // Titulo seccion ultimos articulos
        if ( ! empty($options['last_posts_section_title']) ) {
            $last_posts_section_title = $options['last_posts_section_title'];
        }

        if ( isset( $options['show_last_posts_section'] ) ) {
            $show_last_posts_section = $options['show_last_posts_section'];
        } else{
            $show_last_posts_section = false;
        }

 ?>

          
<section class="site-content"><!-- SITE-CONTENT -->      



<?php if (has_post_thumbnail() ): ?>
    <?php $banner_image =  wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
        <section class="main-banner parallax-window" data-parallax="scroll" data-image-src="<?php echo $banner_image[0]; ?>">
    <?php else: ?>
        <section class="main-banner parallax-window" data-parallax="scroll" data-image-src="<?php echo IMAGES; ?>/homebanner.jpg">
    <?php endif; ?>
</section>

     
         
        <?php if ( $show_projects_section == true ): ?>

        <header class="site-header">
            <div class="site-tagline">
                    <?php if (isset($projects_section_title)): ?>
                        <h2><?php echo $projects_section_title; ?></h2>
                    <?php else: ?>
                        <h2></h2>
                <?php endif; ?>
            </div>
        </header>

<?php $home_projects = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => 3)); ?>

            <?php if ($home_projects->have_posts() && $home_projects->post_count > 1): ?>
            <div class="projects-feed cf"><!-- PROYECTOS -->
                <?php while( $home_projects->have_posts() ): $home_projects->the_post() ?>
                <article class="project cf"><!-- PROYECTO <?php echo $post->ID; ?> -->
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <div class="thumb">
                            <div data-picture data-alt="">
                                <div data-src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), 'project_home_size_image');?>">
                                </div>
                                
                                <!--[if (lt IE 9) & (!IEMobile)]>
                                <div data-src="img/portfolio-1.jpg"></div>
                                <![endif]-->
                                
                                <noscript>
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                                </noscript>
                            </div>
                        </div>

                        <div class="project-content-container">
                            <div class="project-content">
                                <div class="table">
                                    <div class="table-cell">
                                        <h2 class="thumbnail-title"><?php the_title(); ?></h2>
                                        <p class="thumbnail-description">
                            <?php echo strip_tags(get_the_term_list( $post->ID, 'area', '', ', ' )) ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="overlay"></div>
                    </a>
                </article><!-- / PROYECTO <?php echo $post->ID; ?> -->
                <?php endwhile; ?>
            
            </div><!-- / PROYECTOS -->
        




                       <?php endif; ?>

        <?php endif ?>

        


    <?php if ( $show_last_posts_section == true ): ?><!-- ULTIMOS POSTS -->
        <header class="site-header">
            <div class="site-tagline">
            <?php if ( isset($last_posts_section_title) ): ?>
                <h2><?php echo $last_posts_section_title; ?></h2>
            <?php else: ?>
                <h2>Últimos Posts</h2>
            <?php endif; ?>
            </div>
        </header>                                                

        <?php $last_posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 2)); ?>

            <div class="news">
                    <?php if ( $last_posts->have_posts() ): ?> 
                        <?php while( $last_posts->have_posts() ): ?>
                            <?php $last_posts->the_post(); ?>
                <article id="post-<?php the_ID(); ?>" class="blog_item full grey_bg ">
                    <a class="full_link" href="<?php the_permalink(); ?>"></a>
                    <div class="abs_bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                    </div>

                    <div class="blog_item_inner">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <h5 class="date"><?php the_author(); ?> | <?php the_time( 'F Y' ); ?></h5>
                    </div>                  
                </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
    <?php endif ?><!-- / ULTIMOS POSTS -->
            </div>



</section><!-- SITE-CONTENT -->





<?php get_footer(); ?>