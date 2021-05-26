<?php get_header(); ?>



<section class="site-content">

    <?php if ( have_posts() ): while( have_posts() ): the_post(); ?>  

    <header class="content-header">
          <?php //the_excerpt(); ?>  
        <div class="site-tagline">
            <h1><?php if(!empty(the_title())); ?></h1>
                <h6 class="date"><?php the_author_posts_link(); ?> | <?php the_date(); ?></h6>
            <!--<h1><?php if(!empty(the_excerpt())); ?></h1>-->
        </div>
    </header>

        <div class="image">
            <div data-picture>
                <div data-src="<?php echo get_the_post_thumbnail_url(); ?>"></div>
                    <div data-src="<?php echo get_the_post_thumbnail_url(); ?>" data-media="(-webkit-min-device-pixel-ratio: 2),(min--moz-device-pixel-ratio: 2),(-o-min-device-pixel-ratio: 2/1),(min-device-pixel-ratio: 2),(min-resolution: 192dpi),(min-resolution: 2dppx)"></div>
                    <!--[if (lt IE 9) & (!IEMobile)]>
                        <div data-src="img/news-3.jpg"></div>
                    <![endif]-->
                    <noscript>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                    </noscript>
            </div>
        </div>


                   
             
        <div>                      
            <article id="post-<?php the_ID(); ?>" class="content-header">                        
                <span><?php //the_category(', '); ?></span>
                <h2 class="p-summary"><?php echo get_the_excerpt(); ?></h2>                    
                    <?php if ( has_post_thumbnail() ): ?>                   
                        <?php //the_post_thumbnail('blog_size_image'); ?>           
                    <?php endif ?>                    
                    <div class="e-content"><?php the_content(); ?></div>                          
            </article>                      
        </div>





                            

                            <div class="row author-info-row">
                                <div class="col-12">
                                    <hr>
                                </div>
                                <div class="col-md">
                                    <div class="author-info">
                                        <?php if ( get_avatar( get_the_author_meta('ID') ) ): ?>

                                            <img src="<?php echo IMAGES; ?>/avatar-default.png" alt="">
                                            
                                        <?php else: ?>
                                            <?php get_avatar( get_the_author_meta('ID') ); ?>
                                        <?php endif; ?>
                                        
                                        <div class="author-name">
                                            <p>Escrito por <?php the_author_posts_link(); ?></p>
                                            <span><?php the_author_meta('nickname'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="post-meta text-right">
                                        <div class="post-categories">
                                            <?php // the_category(' ,'); ?>
                                        </div>
                                        <div class="post-tags">
                                            <?php // the_tags(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                            </div>
                            
    <?php endwhile; endif; ?>

                        <div class="row">
                            <div class="col">
                                <div class="comments-container">

                                    <?php comments_template('', true); ?>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section>

<?php get_footer(); ?>