<div class="footr__desktop shopd">
    <form class="c__form-foot">
        <div class="formda-title">Newsletter</div>
        <div class="fl-row">
            <input type="text" placeholder="Your E-mail" name="emalid" class="eml__in-footz">
            <button type="submit" class="sunb__fot-d">&gt;</button>
        </div>
        <div class="foots__copyrg"><?php echo date('Y');?> &copy; Massimo Sforza</div>
    </form>
    <div class="foot__menus">
        <div class="foot__menus-col">
            <a href="#" class="foot__menu-lnk">Clothing</a>
            <a href="#" class="foot__menu-lnk">Accessories</a>
            <a href="#" class="foot__menu-lnk">Collections</a>
        </div>
        <div class="foot__menus-col">
            <a href="#" class="foot__menu-lnk">Clothing</a>
            <a href="#" class="foot__menu-lnk">Accessories</a>
            <a href="#" class="foot__menu-lnk">Collections</a>
        </div>
        <div class="foot__menus-col">
            <a href="#" class="foot__menu-lnk">Clothing</a>
            <a href="#" class="foot__menu-lnk">Accessories</a>
            <a href="#" class="foot__menu-lnk">Collections</a>
        </div>
    </div>
    <div class="foots__logo-col">
        <div class="foot-socials">
            <a href="#" class="foots-fb">Facebook</a>
            <span class="delim-f"> | </span>
            <a href="#" class="foots-fb">Instagram</a>
        </div>
        <a href="/" class="foots-social-link">&nbsp;</a>
    </div>
</div>
<script src="<?php bloginfo('template_url') ?>/assets/script/wow.min.js"></script>
<script>
    jQuery(function($){
        $('.main_page__button').on('click', function() {
            $('.menu').removeClass("animated fadeOutUp").addClass("animated fadeInDown").show();
        });
        $('.menu__header__button').on('click', function() {
            $('.menu').removeClass("animated fadeInDown").addClass("animated fadeOutUp");
        });
    });
    new WOW().init();
</script>
<?php wp_footer(); ?>
</body>
</html>