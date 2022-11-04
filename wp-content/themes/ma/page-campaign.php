<?php // Template Name: CAMPAIGN
global $conditional_hd;
$conditional_hd = '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/assets/css/compagne.css">';
get_header();
?>
    <div class="main_page" style="background-image: url('<?php $screen1_image = get_field( 'screen1_image' );
    if ( $screen1_image ) {
        echo $screen1_image['url'];
    } ?>');">
        <header class="main_page__header">
            <a href="#" class="main_page__button">menu</a>
            <p class="leng"><a class="lng__changer" href="?lang=it&currency=EUR">IT</a>   <span style="display: inline-block; padding-left: 1em; padding-right: 1em;"><a class="lng__changer" href="?lang=en&currency=EUR">EN</a></span>   <a class="lng__changer" href="?lang=ru&currency=RUB">RU</a></p>
        </header>
        <div class="main_page__look_block">
            <p>
                <?php the_field( 'screen1_text' ); ?>
            </p>
        </div>
    </div>
    <?php get_template_part('section', 'menu'); ?>
    <div class="compagne">
        <div class="compagne__first_block wow fadeInUp" data-wow-duration="1.5s" style="background-image: url('<?php $screen2_background = get_field( 'screen2_background' );
        if ( $screen2_background ) {
            echo $screen2_background['url'];
        }?>');">
            <div class="compagne__first_block__left_side">
                <p class="block_title"><?php the_field( 'screen2_left_header' ); ?></p>
                <p class="first_parag"><?php the_field( 'screen2_left_text1' ); ?></p>
                <p class="second_parag"><?php the_field( 'screen2_left_text2' ); ?></p>
                <?php $screen2_left_image = get_field( 'screen2_left_image' ); ?>
                <?php if ( $screen2_left_image ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen2_left_image['url']; ?>">
                        <img src="<?php echo $screen2_left_image['url']; ?>" alt="<?php echo $screen2_left_image['alt']; ?>" />
                    </a>
                <?php } ?>
            </div>
            <div class="compagne__first_block__right_side wow fadeInUp" data-wow-duration="1.5s">
                <?php $screen2_right_image = get_field( 'screen2_right_image' ); ?>
                <?php if ( $screen2_right_image ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen2_right_image['url']; ?>">
                        <img src="<?php echo $screen2_right_image['url']; ?>" alt="<?php echo $screen2_right_image['alt']; ?>" />
                    </a>
                <?php } ?>
                <p class="img_title"><?php the_field( 'screen2_right_text' ); ?></p>
            </div>
        </div>
        <div class="compagne__second_block">
            <div class="compagne__second_block__left_side wow fadeInUp" data-wow-duration="1.5s">
                <?php $screen3_left_img = get_field( 'screen3_left_img' ); ?>
                <?php if ( $screen3_left_img ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen3_left_img['url']; ?>">
                        <img src="<?php echo $screen3_left_img['url']; ?>" alt="<?php echo $screen3_left_img['alt']; ?>" />
                    </a>
                <?php } ?>
                <p class="img_title"><?php the_field( 'screen3_left_text' ); ?></p>
            </div>
            <div class="compagne__second_block__right_side wow fadeInUp" data-wow-duration="1.5s">
                <?php $screen3_right_img = get_field( 'screen3_right_img' ); ?>
                <?php if ( $screen3_right_img ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen3_right_img['url']; ?>">
                        <img src="<?php echo $screen3_right_img['url']; ?>" alt="<?php echo $screen3_right_img['alt']; ?>" />
                    </a>
                <?php } ?>
                <p class="img_title"><?php the_field( 'screen3_right_text' ); ?></p>
            </div>
        </div>
        <div class="compagne__third_block">
            <div class="video wow fadeInUp" data-wow-duration="1.5s">
                <?php show_vid(get_field( 'screen4_video' )); ?>
            </div>
        </div>
        <div class="compagne__fourth_block">
            <div class="compagne__fourth_block__left_side wow fadeInUp" data-wow-duration="1.5s">
                <?php $screen5_left_img = get_field( 'screen5_left_img' ); ?>
                <?php if ( $screen5_left_img ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen5_left_img['url']; ?>">
                        <img src="<?php echo $screen5_left_img['url']; ?>" alt="<?php echo $screen5_left_img['alt']; ?>" />
                    </a>
                <?php } ?>
                <p class="img_title"><?php the_field( 'screen5_left_text' ); ?></p>
            </div>
            <div class="compagne__fourth_block__right_side wow fadeInUp" data-wow-duration="1.5s">
                <?php $screen5_right_img = get_field( 'screen5_right_img' ); ?>
                <?php if ( $screen5_right_img ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen5_right_img['url']; ?>">
                        <img src="<?php echo $screen5_right_img['url']; ?>" alt="<?php echo $screen5_right_img['alt']; ?>" />
                    </a>
                <?php } ?>
                <p class="img_title"><?php the_field( 'screen5_right_text' ); ?></p>
            </div>
        </div>
        <div class="compagne__five_block" style="background-image: url('<?php $screen6_background = get_field( 'screen6_background' );
        if ( $screen6_background ) {
            echo $screen6_background['url'];
        }?>');">
            <div class="compagne__five_block__left_side wow fadeInUp" data-wow-duration="1.5s">
                <?php $screen6_left_img = get_field( 'screen6_left_img' ); ?>
                <?php if ( $screen6_left_img ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen6_left_img['url']; ?>">
                        <img src="<?php echo $screen6_left_img['url']; ?>" alt="<?php echo $screen6_left_img['alt']; ?>" />
                    </a>
                <?php } ?>
                <p class="img_title"><?php the_field( 'screen6_left_text' ); ?></p>
            </div>
            <div class="compagne__five_block__right_side wow fadeInUp" data-wow-duration="1.5s">
                <p class="block_title">
                    <?php the_field( 'screen6_right_header' ); ?>
                </p>
                <p class="first_parag">
                    <?php the_field( 'screen6_right_text1' ); ?>
                </p>
                <p class="second_parag">
                    <?php the_field( 'screen6_right_text2' ); ?>
                </p>
                <?php $screen6_right_img = get_field( 'screen6_right_img' ); ?>
                <?php if ( $screen6_right_img ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen6_right_img['url']; ?>">
                        <img src="<?php echo $screen6_right_img['url']; ?>" alt="<?php echo $screen6_right_img['alt']; ?>" />
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="compagne__six_block">
            <div class="compagne__six_block__left_side wow fadeInUp" data-wow-duration="1.5s">
                <?php $screen7_left_img = get_field( 'screen7_left_img' ); ?>
                <?php if ( $screen7_left_img ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen7_left_img['url']; ?>">
                        <img src="<?php echo $screen7_left_img['url']; ?>" alt="<?php echo $screen7_left_img['alt']; ?>" />
                    </a>
                <?php } ?>
                <p class="ing_title">
                    <?php the_field( 'screen7_left_text' ); ?>
                </p>
            </div>
            <div class="compagne__six_block__right_side wow fadeInUp" data-wow-duration="1.5s">
                <?php $screen7_right_img = get_field( 'screen7_right_img' ); ?>
                <?php if ( $screen7_right_img ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen7_right_img['url']; ?>">
                        <img src="<?php echo $screen7_right_img['url']; ?>" alt="<?php echo $screen7_right_img['alt']; ?>" />
                    </a>
                <?php } ?>
                <p class="ing_title"><?php the_field( 'screen7_right_text' ); ?></p>
            </div>
        </div>
        <div class="compagne__seven_block">
            <div class="compagne__seven_block__left_side wow fadeInUp" data-wow-duration="1.5s">
                <div class="video"><?php show_vid(get_field( 'screen8_left_video' )); ?></div>
                <p class="img_title"><?php the_field( 'screen8_left_text' ); ?></p>
            </div>
            <div class="compagne__seven_block__right_side wow fadeInUp" data-wow-duration="1.5s">
                <?php $screen8_right_img = get_field( 'screen8_right_img' ); ?>
                <?php if ( $screen8_right_img ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen8_right_img['url']; ?>">
                        <img src="<?php echo $screen8_right_img['url']; ?>" alt="<?php echo $screen8_right_img['alt']; ?>" />
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="compagne__eight_block wow fadeInUp" data-wow-duration="1.5s">
            <?php $screen9_img = get_field( 'screen9_img' ); ?>
            <?php if ( $screen9_img ) { ?>
                <a data-fancybox="gallery" href="<?php echo $screen9_img['url']; ?>">
                    <img src="<?php echo $screen9_img['url']; ?>" alt="<?php echo $screen9_img['alt']; ?>" />
                </a>
            <?php } ?>
            <p><?php the_field( 'screen9_text' ); ?></p>
        </div>
        <div class="compagne__nine_block">
            <div class="compagne__nine_block__left_side wow fadeInUp" data-wow-duration="1.5s" style="background-image: url('<?php $screen10_background = get_field( 'screen10_background' );
            if ( $screen10_background ) {
                echo $screen10_background['url'];
            }?>');">
                <p class="block_title"><?php the_field( 'screen10_left_title' ); ?></p>
                <p class="first_parag"><?php the_field( 'screen10_left_text1' ); ?></p>
                <p class="second_parag"><?php the_field( 'screen10_left_text2' ); ?></p>
                <?php $screen10_left_img = get_field( 'screen10_left_img' ); ?>
                <?php if ( $screen10_left_img ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen10_left_img['url']; ?>">
                        <img src="<?php echo $screen10_left_img['url']; ?>" alt="<?php echo $screen10_left_img['alt']; ?>" />
                    </a>
                <?php } ?>
            </div>
            <div class="compagne__nine_block__right_side wow fadeInUp" data-wow-duration="1.5s">
                <?php $screen10_right_img = get_field( 'screen10_right_img' ); ?>
                <?php if ( $screen10_right_img ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen10_right_img['url']; ?>">
                        <img src="<?php echo $screen10_right_img['url']; ?>" alt="<?php echo $screen10_right_img['alt']; ?>" />
                    </a>
                <?php } ?>
                <p class="img_title"><?php the_field( 'screen10_right_text' ); ?></p>
            </div>
            
        </div>
        <div class="compagne__ten_block">
            <div class="compagne__ten_block__left_side wow fadeInUp" data-wow-duration="1.5s">
                <?php $screen11_left_img = get_field( 'screen11_left_img' ); ?>
                <?php if ( $screen11_left_img ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen11_left_img['url']; ?>">
                        <img src="<?php echo $screen11_left_img['url']; ?>" alt="<?php echo $screen11_left_img['alt']; ?>" />
                    </a>
                <?php } ?>
                <p class="img_title"><?php the_field( 'screen11_left_text' ); ?></p>
            </div>
            <div class="compagne__ten_block__right_side wow fadeInUp" data-wow-duration="1.5s">
                <?php $screen11_right_img = get_field( 'screen11_right_img' ); ?>
                <?php if ( $screen11_right_img ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen11_right_img['url']; ?>">
                        <img src="<?php echo $screen11_right_img['url']; ?>" alt="<?php echo $screen11_right_img['alt']; ?>" />
                    </a>
                <?php } ?>
                <p class="img_title"><?php the_field( 'screen11_right_text' ); ?></p>
            </div>
        </div>
        <div class="compagne__eleven_block" style="background-image: url('<?php $screen12_background = get_field( 'screen12_background' ); ?>
        <?php if ( $screen12_background ) {
            echo $screen12_background['url'];
        }?>');">
            <div class="compagne__eleven_block__left_side wow fadeInUp" data-wow-duration="1.5s">
                <div class="video"><?php show_vid(get_field( 'screen12_left_video' )); ?></div>
                <p><?php the_field( 'screen12_left_text' ); ?></p>
            </div>
        </div>
        <div class="compagne__twelve_block">
            <div class="compagne__twelve_block__left_side wow fadeInUp" data-wow-duration="1.5s">
                <?php $screen13_left_img = get_field( 'screen13_left_img' ); ?>
                <?php if ( $screen13_left_img ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen13_left_img['url']; ?>">
                        <img src="<?php echo $screen13_left_img['url']; ?>" alt="<?php echo $screen13_left_img['alt']; ?>" />
                    </a>
                <?php } ?>
                <p><?php the_field( 'screen13_left_text' ); ?></p>
            </div>
            <div class="compagne__twelve_block__right_side wow fadeInUp" data-wow-duration="1.5s">
                <?php $screen13_right_img = get_field( 'screen13_right_img' ); ?>
                <?php if ( $screen13_right_img ) { ?>
                    <a data-fancybox="gallery" href="<?php echo $screen13_right_img['url']; ?>">
                        <img src="<?php echo $screen13_right_img['url']; ?>" alt="<?php echo $screen13_right_img['alt']; ?>" />
                    </a>
                <?php } ?>
                <p><?php the_field( 'screen13_right_text' ); ?></p>
            </div>
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