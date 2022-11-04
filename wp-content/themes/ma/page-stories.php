<?php // Template Name: STORIES
    global $conditional_hd;
    $conditional_hd = '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/assets/css/stories.css?'.time().'">';
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
            <p>
                <?php the_field( 'main_screen_text' ); ?>
            </p>
        </div>
    </div>
    <?php get_template_part('section', 'menu'); ?>

    <div class="stories_page">

        <div class="first_block">

            <div class="left_side">
                <div class="img wow fadeInUp" data-wow-duration="1.5s" style="background-image: url('<?php $screen1_left_img = get_field( 'screen1_left_img' );
                if ( $screen1_left_img ) {
                    echo $screen1_left_img['url'];
                }?>');">
                    <a data-fancybox="gallery" href="<?php echo $screen1_left_img['url'] ?>" class="hidden-img">
                        <img src="<?php echo $screen1_left_img['url']; ?>" alt="<?php echo $screen1_left_img['alt']; ?>">
                    </a>
                    <p><?php the_field( 'screen1_left_title' ); ?></p>
                </div>
                <p class="title_img"><?php the_field( 'screen1_left_text' ); ?></p>
            </div>

            <div class="right_side">
                <p class="title"><?php the_field( 'screen1_right_title' ); ?></p>
                <p class="first_parag"><?php the_field( 'screen1_right_text1' ); ?></p>
                <p class="second_parag"><?php the_field( 'screen1_right_text2' ); ?></p>
                <p class="third_parag"><?php the_field( 'screen1_right_text3' ); ?></p>
            </div>
        </div>
        <div class="second_block">

            <div class="left_side">
                <div class="img wow fadeInUp" data-wow-duration="1.5s" style="background-image: url('<?php $screen2_left_img = get_field( 'screen2_left_img' );
                if ( $screen2_left_img ) {
                    echo $screen2_left_img['url'];
                }?>');">
                    <a data-fancybox="gallery" href="<?php echo $screen2_left_img['url'] ?>" class="hidden-img">
                        <img src="<?php echo $screen2_left_img['url']; ?>" alt="<?php echo $screen2_left_img['alt']; ?>">
                    </a>
                    <p><?php the_field( 'screen2_left_title' ); ?></p>
                </div>
                <p class="img_title"><?php the_field( 'screen2_left_text' ); ?></p>
            </div>
            <div class="right_side">
                <p class="title"><?php the_field( 'screen2_right_title' ); ?></p>
                <p class="first_parag"><?php the_field( 'screen2_right_text1' ); ?></p>
                <div class="img wow fadeInUp" data-wow-duration="1.5s" style="background-image: url('<?php $screen2_right_img = get_field( 'screen2_right_img' );
                if ( $screen2_right_img ) {
                    echo $screen2_right_img['url'];
                }?>');">
                    <a data-fancybox="gallery" href="<?php echo $screen2_right_img['url'] ?>" class="hidden-img">
                        <img src="<?php echo $screen2_right_img['url']; ?>" alt="<?php echo $screen2_right_img['alt']; ?>">
                    </a>
                    <p><?php the_field( 'screen2_right_img_title' ); ?></p>
                </div>
                <p class="img_title"><?php the_field( 'screen2_right_text2' ); ?></p>
                <p class="last_parag"><?php the_field( 'screen2_right_text3' ); ?></p>
                
            </div>
        </div>
        <div class="third_block">
            <div class="left_side">
                <p class="title"><?php the_field( 'screen3_left_title' ); ?></p>
                <p class="first_parag"><?php the_field( 'screen3_left_text1' ); ?></p>
                <div class="img wow fadeInUp" data-wow-duration="1.5s" style="background-image: url('<?php $screen3_left_img = get_field( 'screen3_left_img' );
                if ( $screen3_left_img ) {
                    echo $screen3_left_img['url'];
                }?>');">
                    <a data-fancybox="gallery" href="<?php echo $screen3_left_img['url'] ?>" class="hidden-img">
                        <img src="<?php echo $screen3_left_img['url']; ?>" alt="<?php echo $screen3_left_img['alt']; ?>">
                    </a>
                    <p><?php the_field( 'screen3_left_img_title' ); ?></p>
                </div>
                <p class="img_title"><?php the_field( 'screen3_left_text2' ); ?></p>
            </div>
            <div class="right_side">
                <div class="video wow fadeInUp" data-wow-duration="1.5s"><?php show_vid(get_field( 'screen3_right_video' )); ?></div>
                <p class="img_title"><?php the_field( 'screen3_right_text' ); ?></p>
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