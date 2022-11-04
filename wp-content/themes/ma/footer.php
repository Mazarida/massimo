<div class="footr__desktop all-site">
    <footer class="footer footer-allst" style="width: 100%;">
        <form action="#" class="footer__form allst-form">
            <label class="labl-ds">NEWSLETTER</label>
            <input type="text" id="email" placeholder="Your E-mail" class="footer__form__email sallst">
            <div class="sllsfr">
                <p class="allsit-pd">
                    2019 © MASSIMO SFORZA
                </p>
                <p class="allsited">FACEBOOK  <span>|</span>  INSTAGRAM</p>
            </div>
        </form>
    </footer>
    <img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt="" class="logo allsited-loho">
    <img src="<?php bloginfo('template_url') ?>/assets/img/logo__foot.png" alt="" class="logo allsited-loho is-dark">
</div>
<style>
    body:after {
        content: '';
        display: block;
        width: 100%;
        height: 162px;
        background: #f5f2ef;
    }
</style>
<script src="<?php bloginfo('template_url') ?>/assets/script/wow.min.js"></script>
<script>
    jQuery(function($){
        $('.main_page__button').on('click', function() {
            $('.menu').removeClass("animated fadeOutUp").addClass("animated fadeInDown").show();
            $('body').addClass("menu-active");
        });
        $('.menu__header__button').on('click', function() {
            $('.menu').removeClass("animated fadeInDown").addClass("animated fadeOutUp");
            $('body').removeClass("menu-active");
        });
        $(window).on("scroll", function(){
            if (!$('body').hasClass('darkend') && (window.scrollY+window.innerHeight) >  ($('.main_page__look_block').offset().top+$('.main_page__look_block').outerHeight() + 150)) {
                $('body').addClass('darkend');
            }
            if ($('body').hasClass('darkend') && (window.scrollY+window.innerHeight) <=  ($('.main_page__look_block').offset().top+$('.main_page__look_block').outerHeight() + 150)) {
                $('body').removeClass('darkend');
            }
        });
        $(window).trigger("scroll");
    });
    new WOW().init();
</script>
<?php wp_footer(); ?>
</body>
</html>