<?php // Template Name: DESIGNER
global $conditional_hd;
$conditional_hd = '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/assets/css/designer.css?'.time().'">';
get_header();
?>
    <div class="main_page" style="background-image: url('<?php $main_screen_background = get_field( 'main_screen_background' );
    if ( $main_screen_background ) {
        echo $main_screen_background['url'];
    }?>');">
        <header class="main_page__header">
            <a href="#" class="main_page__button">menu</a>
            <p class="leng"><a class="lng__changer" href="?lang=it&currency=EUR">IT</a>   <span style="display: inline-block; padding-left: 1em; padding-right: 1em;"><a class="lng__changer" href="?lang=en&currency=EUR">EN</a></span>   <a class="lng__changer" href="?lang=ru&currency=RUB">RU</a></p>
        </header>
        <div class="main_page__look_block">
            <p><?php the_field( 'main_screen_title' ); ?></p>
        </div>
    </div>
    <?php get_template_part('section', 'menu'); ?>

    <div class="designer_page">
        <p class="title"><?php the_field( 'screen1_title' ); ?></p>
        <div class="first_block">
            
            <div class="left_side">
                
                <div class="video wow fadeInUp" data-wow-duration="1.5s"><?php show_vid(get_field( 'screen1_left_video' )); ?></div>
            </div>
            <div class="right_side">
                <p class="first_parag"><?php the_field( 'screen1_right_text1' ); ?></p>
                <p class="last_parag"><?php the_field( 'screen1_right_text2' ); ?></p>
            </div>
        </div>
        <div class="second_block wow fadeInUp" data-wow-duration="1.5s">
            <?php $screen2_left_img = get_field( 'screen2_left_img' ); ?>
            <?php if ( $screen2_left_img ) { ?>
                <a data-fancybox="gallery" href="<?php echo $screen2_left_img['url']; ?>">
                    <img src="<?php echo $screen2_left_img['url']; ?>" alt="<?php echo $screen2_left_img['alt']; ?>" />
                </a>
            <?php } ?>
            <?php $screen2_right_img = get_field( 'screen2_right_img' ); ?>
            <?php if ( $screen2_right_img ) { ?>
                <a data-fancybox="gallery" href="<?php echo $screen2_right_img['url']; ?>">
                    <img src="<?php echo $screen2_right_img['url']; ?>" alt="<?php echo $screen2_right_img['alt']; ?>" />
                </a>
            <?php } ?>
        </div>
        <div class="third_block">
            <div class="left_side wow fadeInUp" data-wow-duration="1.5s">
                <div class="img" style="background-image: url('<?php $screen3_left_img = get_field( 'screen3_left_img' );
                if ( $screen3_left_img ) {
                    echo $screen3_left_img['url'];
                }?>');">
                    <a data-fancybox="gallery" href="<?php echo $screen3_left_img['url']; ?>" class="hidden-img">
                        <img src="<?php echo $screen3_left_img['url']; ?>" alt="<?php echo $screen3_left_img['alt']; ?>">
                    </a>
                </div>
            </div>
            <div class="right_side wow fadeInUp" data-wow-duration="1.5s">
                <?php $screen3_left_img_copy = get_field( 'screen3_left_img_copy' ); ?>
                <?php if ( $screen3_left_img_copy ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen3_left_img_copy['url']; ?>">
                        <img src="<?php echo $screen3_left_img_copy['url']; ?>" alt="<?php echo $screen3_left_img_copy['alt']; ?>" />
                    </a>
                <?php } ?>
                <p class="first_parag"><?php the_field( 'screen3_right_text1' ); ?></p>
                <p class="last_parag"><?php the_field( 'screen3_right_text2' ); ?></p>
            </div>
        </div>
        <div class="fourth_block">
            <div class="left_side">
                <p class="first_parag"><?php the_field( 'screen4_left_text1' ); ?></p>
                <p class="last_parag"><?php the_field( 'screen4_left_text2' ); ?></p>
            </div>
            <div class="right_side wow fadeInUp" data-wow-duration="1.5s">
                <?php $screen4_right_img = get_field( 'screen4_right_img' ); ?>
                <?php if ( $screen4_right_img ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen4_right_img['url']; ?>">
                        <img src="<?php echo $screen4_right_img['url']; ?>" alt="<?php echo $screen4_right_img['alt']; ?>" />
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="five_block wow fadeInUp" data-wow-duration="1.5s">
            <?php $screen5_left_img = get_field( 'screen5_left_img' ); ?>
            <?php if ( $screen5_left_img ) { ?>
                <a data-fancybox="gallery" href="<?php echo $screen5_left_img['url']; ?>">
                    <img src="<?php echo $screen5_left_img['url']; ?>" alt="<?php echo $screen5_left_img['alt']; ?>" />
                </a>
            <?php } ?>
            <?php $screen5_right_img = get_field( 'screen5_right_img' ); ?>
            <?php if ( $screen5_right_img ) { ?>
                <a data-fancybox="gallery" href="<?php echo $screen5_right_img['url']; ?>">
                    <img src="<?php echo $screen5_right_img['url']; ?>" alt="<?php echo $screen5_right_img['alt']; ?>" />
                </a>
            <?php } ?>
        </div>
        <div class="six_block wow fadeInUp" data-wow-duration="1.5s">
            <?php $screen6_img = get_field( 'screen6_img' ); ?>
            <?php if ( $screen6_img ) { ?>
                <a data-fancybox="gallery" href="<?php echo $screen6_img['url']; ?>">
                    <img src="<?php echo $screen6_img['url']; ?>" alt="<?php echo $screen6_img['alt']; ?>" />
                </a>
            <?php } ?>
            <p class="first_parag"><?php the_field( 'screen6_text1' ); ?></p>
            <p class="last_parag"><?php the_field( 'screen6_text2' ); ?></p>
        </div>
        <div class="seven_block wow fadeInUp" data-wow-duration="1.5s">
            <?php $screen7_img = get_field( 'screen7_img' ); ?>
            <?php if ( $screen7_img ) { ?>
                <a data-fancybox="gallery" href="<?php echo $screen7_img['url']; ?>">
                    <img src="<?php echo $screen7_img['url']; ?>" alt="<?php echo $screen7_img['alt']; ?>" />
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="mobile_footer">
        <form action="#" class="mobile_footer__form">
            <label for="#email">NEWSLETTER</label>
            <input type="text" id="email" placeholder="Your E-mail" class="footer__form__email">
            <div>
                <p>
                    2019 © MASSIMO SFORZA
                </p>
                <p>FACEBOOK  <span>|</span>  INSTAGRAM</p>
            </div>
        </form>
    </div>
<?php get_footer(); ?>