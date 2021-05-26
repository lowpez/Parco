<?php get_header(); ?>
<main class="site-content">
    <header>
        <h1><?php post_type_archive_title(); ?></h1>
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

<?php $portfolio = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 10 ) ); ?>
        <div class="projects-feed cf">
            <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
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
        </div>
</main>
<?php get_footer(); ?>