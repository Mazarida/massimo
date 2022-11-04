<?php // Template Name: SPRING_SUMMER1
global $conditional_hd;
$conditional_hd = '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/assets/css/spring_summer.css?'.time().'">';
get_header();
?>
    <div class="main_page">
        <header class="main_page__header">
            <a href="#" class="main_page__button">menu</a>
            <p class="leng"><a class="lng__changer" href="?lang=it&currency=EUR">IT</a>   <span style="display: inline-block; padding-left: 1em; padding-right: 1em;"><a class="lng__changer" href="?lang=en&currency=EUR">EN</a></span>   <a class="lng__changer" href="?lang=ru&currency=RUB">RU</a></p>
        </header>
        <div class="main_page__look_block">
            <p>
                SPRING — SUMMER <br> <span>2020</span>
            </p>
        </div>
    </div>
    <?php get_template_part('section', 'menu'); ?>

    <div class="spring_summer">
        <div class="first_block">
            <p class="title">
                SS 2020 
            </p>
            <div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/HYyO4lwIEpc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            <p class="first_parag">
                Тщеславие – добродетель, искаженная и превращенная в греховное явление современным культом личности, – переосмыслена и возвращена к своему первоначальному значению самосознания. Это отправная точка второй части рассказа креативного директора Pal Zileri Рокко Янноне, раскрываемой в коллекции весна-лето 2019.
            </p>
            <p class="last_parag">
                Антуражем для новой рекламной кампании, снятой Йоханом
            </p>
        </div>
        <div class="second_block">
            <div class="left_side">
                <a data-fancybox="gallery" href="<?php bloginfo('template_url'); ?>/assets/img/spring-summer-second-block-left.png">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/spring-summer-second-block-left.png" alt="">
                </a>
                <p class="img_title">Discover SS20</p>
            </div>
            <div class="right_side">
                <a data-fancybox="gallery" href="<?php bloginfo('template_url'); ?>/assets/img/spring-summer-second-block-right.png">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/spring-summer-second-block-right.png" alt="">
                </a>
                <p class="img_title">Discover SS20</p>
            </div>
        </div>
        <div class="third_block">
            <a data-fancybox="gallery" href="<?php bloginfo('template_url'); ?>/assets/img/spring-summer-third-block.png">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/spring-summer-third-block.png" alt="">
            </a>
            <p class="img_title">Discover SS20</p>
        </div>
        <div class="fourth_block">
            <div class="left_side">
                <a data-fancybox="gallery" href="<?php bloginfo('template_url'); ?>/assets/img/spring-summer-fourth-block-left.png">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/spring-summer-fourth-block-left.png" alt="">
                </a>
                <p class="img_title">Discover SS20</p>
            </div>
            <div class="right_side">
                <a data-fancybox="gallery" href="<?php bloginfo('template_url'); ?>/assets/img/spring-summer-fourth-block-right.png">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/spring-summer-fourth-block-right.png" alt="">
                </a>
                <p class="img_title">Discover SS20</p>
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