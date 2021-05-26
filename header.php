<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


    <?php if ( is_single() && comments_open() ): ?>

        <?php wp_enqueue_script('comment-reply'); ?>
        
    <?php endif ?>
</head>
<body <?php body_class(); ?>>

    
    <?php 

        $options = get_theme_mod('parco_settings');
        $personal = get_theme_mod('parco_info_settings');

        // Facebook url
        if (!empty($options['top_header_facebook_link']) ) {
            $facebook_url = $options['top_header_facebook_link'];
        }

        // Twitter url
        if (!empty($options['top_header_twitter_link']) ) {
            $twitter_url = $options['top_header_twitter_link'];
        }

        // Instagram url
        if (!empty($options['top_header_instagram_link']) ) {
            $instagram_url = $options['top_header_instagram_link'];
        }
        if (!empty($options['blog_header_text']) ) {
            $blog_header_text = $options['blog_header_text'];
        }
        // E-mail
        if ( !empty($personal['mail_address']) ) {
            $email = $personal['mail_address'];
        }

        // Phone
        if ( !empty($personal['phone_address']) ) {
            $phone = $personal['phone_address'];
        }

        // Logo
        if (!empty($options['logo']) ) {
            $logo = $options['logo'];
        } 

     ?>

 

    <a href="#cd-nav" class="cd-nav-trigger">Menu 
        <span class="cd-nav-icon"></span>

        <svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
            <circle fill="transparent" stroke="#90D4C5" stroke-width="2" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
        </svg>
    </a>
        
    <div id="cd-nav" class="cd-nav"><!-- MAIN NAV -->
        <div class="cd-navigation-wrapper">
            <div class="cd-half-block">
                <nav>
                    <ul class="cd-primary-nav">
                        <?php wp_nav_menu(array(

                        'theme_location' => 'main-menu',
                        'menu_class' => 'main-menu',
                        'menu_id' => 'mainMenu'

                        )); ?>
                    </ul>
                </nav>
            </div><!-- .cd-half-block -->
            
            <div class="cd-half-block"><!-- INFO + SOCIAL NAV -->
                <address>
                    <ul class="cd-contact-info">
                    <?php if (isset($email)): ?>
                        <li>
                            <a href="mailto:<?php echo $email; ?>">
                                <?php echo $email; ?>
                            </a>
                        </li>
                    <?php endif ?>

                    <?php if (isset($phone)): ?>
                        <li>
                            <a href="tel:<?php echo $phone; ?>">
                                <?php echo $phone; ?>
                            </a>
                        </li>
                    <?php endif ?>
                    </ul>
                    <ul class="cd-contact-socials">
    
                    <?php if ( isset($facebook_url) ): ?>
                        <li>
                            <a href="<?php echo esc_url($facebook_url); ?>">
                                <i class="fab fa-facebook-f"></i> Facebook
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if ( isset($twitter_url) ): ?>
                        <li>
                            <a href="<?php echo esc_url($twitter_url); ?>">
                                <i class="fab fa-twitter"></i> Twitter
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if ( isset($instagram_url) ): ?>
                        <li>
                            <a href="<?php echo esc_url($instagram_url); ?>">
                                <i class="fab fa-instagram"></i> Instagram
                            </a>
                        </li>
                    <?php endif ?>    
                    </ul>
                </address>
            </div><!-- / INFO + SOCIAL NAV -->
        </div> <!-- .cd-navigation-wrapper -->
    </div><!-- / MAIN NAV -->

<div class="site-container"><!-- SITE-CONTAINER -->
    <?php  
    $jumbotron = wp_get_attachment_image_src( get_post_thumbnail_id() , 'full');
            if (empty($jumbotron) || is_home() || is_archive()):
                $jumbotron = " ";
            endif;
    ?>
    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $jumbotron[0]; ?>"> 
        <header class="site-header cf <?php if(is_front_page()):?>big<?php endif;?>"><!-- SITE-HEADER -->
                <div class="site-title ">
                    <a href="<?php echo get_home_url(); ?>">
                    <?php if(isset($logo)):?>
                        <img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>" class="logo">
                    <?php else:?>
                        PAR/CO/
                    <?php endif;?>
                    </a>
                </div>
                <div class="cf"></div>

    <?php if (!is_singular('proyectos') and is_front_page()): ?>
                <div class="site-tagline"><!-- SITE-TAGLINE -->
                    <?php if ( have_posts() ): 
                            while( have_posts() ): the_post(); ?> <!-- TEXTO DESDE LA PAGINA -->
                            <?php the_content(); ?>                                           
                    <?php endwhile; 
                    endif; ?><!-- / TEXTO DESDE LA PAGINA -->

                </div><!-- / SITE-TAGLINE -->
    <?php endif; ?>   
        </header><!-- /SITE-HEADER -->
    </div>