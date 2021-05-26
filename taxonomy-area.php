<?php get_header(); ?>
<?php $portfolio = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); ?>

<main class="site-content">
    <header>
        <h1><?php echo apply_filters( 'the_title', $portfolio->name ); ?></h1>
    </header>

 

<?php $terms = get_terms('area', array('hide_empty' => 0, 'parent' =>0)); ?><!-- TAXONOMIAS -->
        <nav>
            <ul class="areas">
          <?php foreach($terms as $term) : ?>

              <li><a href="<?php echo get_term_link( $term->slug, $term->taxonomy ); ?>">
                <?php echo $term->name; ?>
              </a></li>
               
          <?php endforeach; ?><!-- / TAXONOMIAS -->
            </ul>
        </nav>

         <div class="projects-feed cf">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <article class="project cf"><!-- PROYECTO <?php echo $post->ID; ?> -->
                    <a href="<?php the_permalink(); ?>" title="Craft Tamale">
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
       


    <div class="navigation clearfix">
      <div class="alignleft"><?php next_posts_link('« Previous Entries') ?></div>
      <div class="alignright"><?php previous_posts_link('Next Entries »') ?></div>
    </div>

    <?php else: ?>
    <h2>Nada nuevo en <?php echo apply_filters( 'the_title', $portfolio->name ); ?></h2>
    <div>
      <div class="e-content">
        <p>Parece no estar pasando nada en <strong><?php echo apply_filters( 'the_title', $portfolio->name ); ?></strong> ahora mismo. Vuelve más tarde, es probable que algo suceda pronto.</p>
      </div>
    </div>

    <?php endif; ?>

</main>
<?php get_footer(); ?>