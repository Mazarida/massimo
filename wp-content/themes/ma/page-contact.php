<?php // Template Name: CONTACT
global $conditional_hd;
$conditional_hd = '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/assets/css/contact.css?'.time().'">';
get_header();
?>
    <div class="main_page" style="background-image: url('<?php $screen1_img = get_field( 'screen1_img' );
    if ( $screen1_img ) {
        echo $screen1_img['url'];
    }?>');">
        <header class="main_page__header">
            <a href="#" class="main_page__button">menu</a>
            <p class="leng"><a class="lng__changer" href="?lang=it&currency=EUR">IT</a>   <span style="display: inline-block; padding-left: 1em; padding-right: 1em;"><a class="lng__changer" href="?lang=en&currency=EUR">EN</a></span>   <a class="lng__changer" href="?lang=ru&currency=RUB">RU</a></p>
        </header>
        <div class="main_page__look_block">
            <p><?php the_field( 'screen1_text' ); ?></p>
        </div>
    </div>
    <?php get_template_part('section', 'menu'); ?>

    <div class="contact_page">
        <div class="adres">
            <div class="adres__map wow fadeInUp" data-wow-duration="1.5s">
                <?php the_field( 'screen2_left_map_code' ); ?>
            </div>
            <div class="adres__street">
                <div class="shop">
                    <p class="title_shop"><?php the_field( 'screen2_right_addr1_title' ); ?></p>
                    <p class="shop_adres"><?php the_field( 'screen2_right_addr1_text' ); ?></p>
                    <button onclick="window.open('<?php the_field( 'screen2_right_addr1_link' ); ?>')"><?php the_field( 'screen2_right_addr1_link_text' ); ?></button>
                </div>
                <div class="shop">
                    <p class="title_shop"><?php the_field( 'screen2_right_addr2_title' ); ?></p>
                    <p class="shop_adres"><?php the_field( 'screen2_right_addr2_text' ); ?></p>
                    <button onclick="window.open('<?php the_field( 'screen2_right_addr2_link' ); ?>')"><?php the_field( 'screen2_right_addr2_link_text' ); ?></button>
                </div>
            </div>
        </div>
        <div class="second_block wow fadeInUp" data-wow-duration="1.5s">
            <p><?php the_field( 'screen3_left_text' ); ?></p>
            <?php $screen3_right_img = get_field( 'screen3_right_img' ); ?>
            <?php if ( $screen3_right_img ) { ?>
                <a data-fancybox="gallery" href="<?php echo $screen3_right_img['url']; ?>">
                    <img src="<?php echo $screen3_right_img['url']; ?>" alt="<?php echo $screen3_right_img['alt']; ?>" />
                </a>
            <?php } ?>
        </div>
        <div class="third_block wow fadeInUp" data-wow-duration="1.5s">
            <p><?php the_field( 'screen3_right_text' ); ?></p>
        </div>
        <div class="fourth_block wow fadeInUp" data-wow-duration="1.5s">
            <?php $screen4_left_img = get_field( 'screen4_left_img' ); ?>
            <?php if ( $screen4_left_img ) { ?>
                <a data-fancybox="gallery" href="<?php echo $screen4_left_img['url']; ?>">
                    <img src="<?php echo $screen4_left_img['url']; ?>" alt="<?php echo $screen4_left_img['alt']; ?>" />
                </a>
            <?php } ?>
            <?php $screen4_right_img = get_field( 'screen4_right_img' ); ?>
            <?php if ( $screen4_right_img ) { ?>
                <a data-fancybox="gallery" href="<?php echo $screen4_right_img['url']; ?>">
                    <img src="<?php echo $screen4_right_img['url']; ?>" alt="<?php echo $screen4_right_img['alt']; ?>" />
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