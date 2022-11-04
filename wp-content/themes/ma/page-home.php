<?php // Template Name: HOMEPAGE
get_header();
?>
<div class="main_page">
    <header class="main_page__header">
        <a href="#" class="main_page__button">menu</a>
        <p class="leng"><a class="lng__changer" href="?lang=it&currency=EUR">IT</a>   <span style="display: inline-block; padding-left: 1em; padding-right: 1em;"><a class="lng__changer" href="?lang=en&currency=EUR">EN</a></span>   <a class="lng__changer" href="?lang=ru&currency=RUB">RU</a></p>
    </header>
    <div class="main_page__look_block">
        <?php if ( have_rows( 'main-scrieen' ) ) : ?>
            <?php while ( have_rows( 'main-scrieen' ) ) : the_row(); ?>
                <?php $post_object = get_sub_field( 'collection_screen_link' ); ?>
                <?php if ( $post_object ): ?>
                    <?php $post = $post_object; ?>
                    <?php setup_postdata( $post ); ?>
                    <a href="<?php the_permalink(); ?>" class="item_block" style="background: url(<?php
                    $collection_screen_image = get_sub_field( 'collection_screen_image' );
                    echo $collection_screen_image['url'];
                    ?>) 0 0 no-repeat; background-size: cover;" >
                        <p>
                            <?php the_sub_field( 'collection_screen_text' ); ?>
                        </p>
                    </a>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>
    </div>
</div>
<?php get_template_part('section', 'menu'); ?>
<div class="page-r">
    <div class="page__first_block">
        <p><?php the_field( 'screen2_text-left' ); ?></p>
        <div class="img_block wow fadeInUp" data-wow-duration="1.5s">
            <?php $screen2_photo_right = get_field( 'screen2_photo-right' ); ?>
            <?php if ( $screen2_photo_right ) { ?>
                <a data-fancybox="gallery" href="<?php echo $screen2_photo_right['url']; ?>">
                    <img src="<?php echo $screen2_photo_right['url']; ?>" alt="<?php echo $screen2_photo_right['alt']; ?>" />
                </a>
            <?php } ?>
            <p><?php the_field( 'screen2_photo-text-under' ); ?></p>
        </div>
    </div>
    <div class="page__second_block">
        <div class="video wow fadeInUp" data-wow-duration="1.5s"><?php show_vid(get_field( 'screen3_video-left' )); ?></div>
        <div class="img_block wow fadeInUp" data-wow-duration="1.5s">
            <?php $screen3_photo_right = get_field( 'screen3_photo-right' ); ?>
            <?php if ( $screen3_photo_right ) { ?>
                <a data-fancybox="gallery" href="<?php echo $screen3_photo_right['url']; ?>">
                    <img src="<?php echo $screen3_photo_right['url']; ?>" alt="">
                </a>
            <?php } ?>
            <p><?php the_field( 'screen3_photo-under' ); ?></p>
        </div>
    </div>
    <div class="page__third_block">
        <div class="left_img_block wow fadeInUp" data-wow-duration="1.5s">
            <?php $screen4_photo_left = get_field( 'screen4_photo-left' ); ?>
            <?php if ( $screen4_photo_left ) { ?>
                <a data-fancybox="gallery" href="<?php echo $screen4_photo_left['url']; ?>">
                    <img src="<?php echo $screen4_photo_left['url']; ?>" alt="<?php echo $screen4_photo_left['alt']; ?>" />
                </a>
            <?php } ?>
            <p>
                <?php the_field( 'screen4_photo-left-under' ); ?>
            </p>
        </div>
        <div class="right_img_block wow fadeInUp" data-wow-duration="1.5s">
            <?php $screen4_photo_right = get_field( 'screen4_photo-right' ); ?>
            <?php if ( $screen4_photo_right ) { ?>
                <a data-fancybox="gallery" href="<?php echo $screen4_photo_right['url']; ?>">
                    <img src="<?php echo $screen4_photo_right['url']; ?>" alt="<?php echo $screen4_photo_right['alt']; ?>" />
                </a>
            <?php } ?>
            <p><?php the_field( 'screen4_photo-right-under' ); ?></p>
        </div>
    </div>
    <div class="page__fourth_block">
        <div class="left_block">
            <div class="video wow fadeInUp" data-wow-duration="1.5s"><?php show_vid(get_field( 'screen5_video-left' )); ?></div>
            <p><?php the_field( 'screen5_video-left-under' ); ?></p>
        </div>
        <div class="right_blcok wow fadeInUp" data-wow-duration="1.5s">
            <?php $screen5_photo_right = get_field( 'screen5_photo-right' ); ?>
            <?php if ( $screen5_photo_right ) { ?>
                <a data-fancybox="gallery" href="<?php echo $screen5_photo_right['url']; ?>">
                    <img src="<?php echo $screen5_photo_right['url']; ?>" alt="<?php echo $screen5_photo_right['alt']; ?>" />
                </a>
            <?php } ?>
            <p><?php the_field( 'screen5_photo-right-under' ); ?></p>
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