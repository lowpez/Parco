<?php
/**
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package parco
 */


$options = get_theme_mod('parco_footer_settings');
// TEXTO EN FOOTER
    if(!empty($options['parco_footer_copyright']) ):
        $footer_copyright = $options['parco_footer_copyright'];
    endif;
?>


    <footer class="site-footer">
        <div class="footer-widgets flex-grid">
            <div class="col"> 
                <?php 
                    if( is_active_sidebar('sidebar-footer-izq') ){
                                    dynamic_sidebar('sidebar-footer-izq');
                    } 
                ?>              
            </div>
            <div class="col">
                <?php 
                    if( is_active_sidebar('sidebar-footer-cent') ){
                                    dynamic_sidebar('sidebar-footer-cent');
                    } 
                ?>
            </div>
            <div class="col">
                <?php 
                    if( is_active_sidebar('sidebar-footer-der') ){
                            dynamic_sidebar('sidebar-footer-der');
                    } 
                ?>
            </div>
        </div>
        <nav class="languages" role="navigation"><!-- PLUGIN LENGUAJE -->
              <ul>
                <li class="active"><a href="#">EN |</a></li>
                <li><a href="#">ES</a></li>
              </ul>
        </nav><!-- / PLUGIN LENGUAJE -->
    </footer>
</div><!-- / SITE-CONTAINER -->


            <div class="site-info"><!-- FOOTER COPYRIGHTS -->
                <?php if ( empty($footer_copyright )) { ?>

                    <a href="<?php echo esc_url( esc_html__( 'https://wordpress.org/', 'parco' ) ); ?>"><?php printf( esc_html__( 'Orgullosamente potenciado por %s', 'parco' ), 'WordPress' ); ?></a>
                    <span class="sep"> | </span>

                    <span>
                        <?php printf( 'Tema: %1$s por <a href="%2$s" rel="nofollow">%3$s</a>.', wp_get_theme()->get( 'Name' ), 'https://blob.cl', 'Blob . cl' ); ?>
                    </span>

                <?php } else {

                    printf($footer_copyright);

                } ?>

            </div><!-- / FOOTER COPYRIGHTS -->


<?php wp_footer(); ?>

</body>
</html>