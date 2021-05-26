<?php 


get_header(); 

$options = get_theme_mod('parco_settings');

    if (isset($options['blog_header_text'])):
        $blog_header_text = $options['blog_header_text'];
    endif;
?>
 
<main class="site-content"><!-- SITE-CONTENT-->
                
                <?php if ( is_category() ): ?>

                    <h1><?php _e('Categoría:', 'parco'); ?> <?php single_cat_title(); ?></h1>
                    
                <?php elseif( is_tag() ): ?>

                    <h1><?php _e('Etiqueta:', 'parco'); ?> <?php single_tag_title(); ?></h1>

                <?php elseif( is_tax() ): ?>

                    <h1><?php single_term_title(); ?></h1>

                <?php elseif( is_search() ): ?>

                    <h1><?php _e('Resultado de búsqueda para:', 'parco'); ?> <?php the_search_query(); ?></h1>

                <?php elseif( is_day() ): ?>

                    <h1><?php _e('Archivo:', 'parco'); ?> <?php the_time( get_option('date_format') ); ?></h1>

                <?php elseif( is_month() ): ?>

                    <h1><?php _e('Archivo:', 'parco'); ?> <?php the_time( 'F Y' ); ?></h1>

                <?php elseif( is_year() ): ?>

                    <h1><?php _e('Archivo:', 'parco'); ?> <?php the_time( 'Y' ); ?></h1>

                <?php elseif( is_author() ): ?>

                    <h1>
                        <?php _e('Artículos de:', 'parco'); ?>
                        <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
                        <?php echo $curauth->display_name; ?>
                    </h1>

                <?php elseif( is_404() ): ?>
                    <i class="far fa-sad-tear"></i>
                    <h1><?php _e('No se encontró la página', 'parco'); ?></h1>

                <?php elseif( is_home() ): ?>

                    <?php if (is_front_page()): ?>

                        <h1><?php _e('Blog', 'parco'); ?></h1>
                        
                    <?php else: ?>

                        <h1><?php wp_title(' ', true, 'right'); ?></h1>

                    <?php endif; ?>

                <?php else: ?>

                    <h1><?php wp_title(' ', true, 'right'); ?></h1>

                <?php endif; ?>
 
   
 

<!--<?php 

if ( is_home() ) {
    // This is the blog posts index
    echo "<h1>YESSSSSSSS</h1>";
} else {
    // This is not the blog posts index
    echo "<h1>AHHHHHHHHH</h1>";
}
 ?>-->

            <!--<div class="page-desc">
                <h4>Inspirations from around the world.</h4>
                <p>Varta quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
            </div>-->
        <section class="content-header">
          <?php //the_excerpt(); ?>  
        <div class="site-tagline">
            <?php if (is_home()): ?>
                <p><?php echo $blog_header_text; ?> </p>
                <!--<?php $meta_value=get_post_meta($post->ID, 'something',true); ?>    
                <?php echo $meta_value; ?>-->
            <?php endif; ?>    
        </div>
         
        </section>

            
        <div class="news"><!-- BLOG POSTS -->
            <?php if ( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>

                <article id="post-<?php the_ID(); ?>" class="blog_item full grey_bg ">
                    <a class="full_link" href="<?php the_permalink(); ?>"></a>
                    <div class="abs_bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                    </div>

                    <div class="blog_item_inner">
                        <h1><?php the_title(); ?></h1>
                        <h5 class="date"><?php the_author(); ?> | <?php the_time( 'F Y' ); ?></h5>
                    </div>
                </article>

                <?php endwhile; ?>
                <?php else: ?>

                <?php get_template_part('template-parts/content', 'nopost'); ?>

            <?php endif; ?>
        </div><!-- BLOG POSTS -->

    <?php if (paginate_links()): ?>
        <nav role="navigation"><!-- PAGINACION -->
            <ul class="cd-pagination animated-buttons custom-icons">
            <?php if ( get_next_posts_link() || get_previous_posts_link() ): ?>
                <li class="button"><?php echo get_next_posts_link('<i>Next</i>'); ?></li>
                <li><a href="#0">1</a></li>
                <li><a href="#0">2</a></li>
                <li><a class="current" href="#0">3</a></li>
                <li><a href="#0">4</a></li>
                <li><span>...</span></li>
                <li><a href="#0">20</a></li>
                <li class="button"><?php previous_posts_link('<i>Prev</i>'); ?></li>
            <?php endif ?>
            </ul>
        </nav><!-- / PAGINACION -->
    <?php endif; ?>  
</main><!-- / SITE-CONTENT-->

<?php get_footer(); ?>