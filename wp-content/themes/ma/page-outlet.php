<?php // Template Name: OUTLET
global $conditional_hd;
$conditional_hd = '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/assets/css/outlet.css?'.time().'">';
get_header();
?>
    <div class="main_page">
        <header class="main_page__header">
            <a href="#" class="main_page__button">menu</a>
            <p class="leng"><a class="lng__changer" href="?lang=it&currency=EUR">IT</a>   <span style="display: inline-block; padding-left: 1em; padding-right: 1em;"><a class="lng__changer" href="?lang=en&currency=EUR">EN</a></span>   <a class="lng__changer" href="?lang=ru&currency=RUB">RU</a></p>
        </header>
        <div class="main_page__look_block">
            <p>
                OUTLET
            </p>
        </div>
    </div>
    <?php get_template_part('section', 'menu'); ?>

    <div class="outlet_page">
        <div class="outlet_page__first_block">
            <div class="look">
                <a data-fancybox="gallery" href="">

                </a>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/outlet-first-block-left.jpg" alt="">
                <p>
                    SS 17 <br>
                    Mod. 331J22A2 | art. 53548 | col. 03
                </p>
            </div>
            <div class="look">
                <a data-fancybox="gallery" href="<?php bloginfo('template_url'); ?>/assets/img/outlet-first-block-right.jpg">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/outlet-first-block-right.jpg" alt="">
                </a>
                <p>
                    FW 17 <br>
                    Mod. 331J22A2 | art. 53548 | col. 03</p>
            </div>
        </div>
        <div class="outlet_page__second_block">
            <a data-fancybox="gallery" href="<?php bloginfo('template_url'); ?>/assets/img/outlet-second-block.jpg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/outlet-second-block.jpg" alt="">
            </a>
            <p>
                SS 18 <br>
                Mod. 331J22A2 | art. 53548 | col. 03;
                </p>
        </div>
        <div class="outlet_page__third_block">
            <div class="look">
                <a data-fancybox="gallery" href="<?php bloginfo('template_url'); ?>/assets/img/outlet-third-block-left.jpg">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/outlet-third-block-left.jpg" alt="">
                </a>
                <p>
                    SS 18 <br> 
                    Mod. 331J22A2 | art. 53548 | col. 03
                </p>
            </div>
            <div class="look">
                <p>SS 18 <br>
                    Mod. 331J22A2 | art. 53548 | col. 03
                </p>
                <a data-fancybox="gallery" href="<?php bloginfo('template_url'); ?>/assets/img/outlet-third-block-right.jpg">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/outlet-third-block-right.jpg" alt="">
                </a>
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