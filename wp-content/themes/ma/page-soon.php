<?php // Template Name: SOON
get_header();
?>
    <div class="main_page">
        <header class="main_page__header">
            <a href="#" class="main_page__button">menu</a>
            <p class="leng"><a class="lng__changer" href="?lang=it&currency=EUR">IT</a>   <span style="display: inline-block; padding-left: 1em; padding-right: 1em;"><a class="lng__changer" href="?lang=en&currency=EUR">EN</a></span>   <a class="lng__changer" href="?lang=ru&currency=RUB">RU</a></p>
        </header>
    </div>
    <?php get_template_part('section', 'menu'); ?>


        <h1 class="soon">Online Store is coming soon...</h1>
        <style>
            .soon {
                font-size: 4vw;
                font-weight: bold;
                text-align: center;
                padding: 16.5vw;
            }
        </style>


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