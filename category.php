<?php
/*
https://codex.wordpress.org/The_Loop#Using_the_Loop
*/
get_header(); ?>
<main class="site-content">
 
	<header>
		<h1 class="entry-title"><?php single_cat_title(); ?></h1>
	</header>	
		


        <div class="news"><!-- BLOG POSTS -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" class="blog_item full grey_bg ">
                    <a class="full_link" href="<?php the_permalink(); ?>"></a>
                    <div class="abs_bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                    </div>

                    <div class="blog_item_inner">
                        <h1><?php the_title(); ?></h1>
                        <?php the_excerpt(); ?>
                        <h5 class="date"><?php the_author(); ?> | <?php the_time( 'F Y' ); ?></h5>
                    </div>
                </article>

                 <?php endwhile; else : ?>

  				<p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>

 			<?php endif; ?>

        </div><!-- BLOG POSTS -->

   
	



</main>
<?php get_footer(); ?>