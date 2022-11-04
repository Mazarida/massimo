<?php // Template Name: Товар
global $conditional_hd;
$conditional_hd = '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/assets/css/item.css?'.time().'">';
get_header();
?>
    <div class="main_page">
        <header class="main_page__header">
            <a href="#" class="main_page__button">menu</a>
            <p class="leng"><a class="lng__changer" href="?lang=it&currency=EUR">IT</a>   <span style="display: inline-block; padding-left: 1em; padding-right: 1em;"><a class="lng__changer" href="?lang=en&currency=EUR">EN</a></span>   <a class="lng__changer" href="?lang=ru&currency=RUB">RU</a></p>
        </header>
    </div>
    <?php get_template_part('section', 'menu'); ?>

    <div class="item_page">
        <nav>
            <ul>
                <li class="active"><a href="#">Suits</a></li>
                <li><a href="#">Jackets</a></li>
                <li><a href="#">Trousers</a></li>
                <li><a href="#">Shoes</a></li>
            </ul>
        </nav>
        <div class="item">
            <div class="mobile__block">
                <div class="parag">
                    <p>
                        In the foreground, instead, they meet, almost to fit together, for perfection of the proportions and value of the fabrics that defined the silhouettes of Tagliatore and Tagliatore 0205, which interpret the brand DNA and revisit the collections’ key pieces: trench, straight cut blazer and evening jacket for her, coats, suits and three-button jackets for him. Paolo di Lucente, fashion photographer whose works present a particular chromatic point of view, He’s the experimenter of images for these Tagliatore and Tagliatore 0205 Spring Summer 2019 Collections.
                    </p>
                </div>
                <form class="mobile__specifications">
                    <div class="choose">
                        <div class="quantity">
                            <p>Quantity</p>
                            <input type="text" placeholder="1" class="quantity__input">
                        </div>
                        <div class="colour">
                            <p>Colour</p>
                            <div class="color"></div>
                        </div>
                    </div>
                    <p class="size">
                        Size (Size Guide)
                    </p>
                    <div class="choose_size_button">
                        <input name="size" id="one" type="radio">
                        <label for="one" class="active">1</label>
                        <input name="size" id="two" type="radio">
                        <label for="two">2</label>
                        <input name="size" id="three" type="radio">
                        <label for="three">3</label>
                        <input name="size" id="four" type="radio">
                        <label for="four">4</label>
                        <input name="size" id="five" type="radio">
                        <label for="five">5</label>
                        <input name="size" id="six" type="radio">
                        <label for="six">6</label>
                    </div>
                    <button>SELECT A SIZE</button>
                </form>
            </div>
            <div class="item_photo">
                <a data-fancybox="gallery" href="<?php bloginfo('template_url'); ?>/assets/img/item-first.jpg">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/item-first.jpg" alt="" class=" wow fadeInUp" data-wow-duration="1.5s">
                </a>
                <a data-fancybox="gallery" href="<?php bloginfo('template_url'); ?>/assets/img/item-two.png">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/item-two.png" alt="" class=" wow fadeInUp" data-wow-duration="1.5s">
                </a>
                <div class="parag">
                    <p>
                        In the foreground, instead, they meet, almost to fit together, for perfection of the proportions and value of the fabrics that defined the silhouettes of Tagliatore and Tagliatore 0205, which interpret the brand DNA and revisit the collections’ key pieces: trench, straight cut blazer and evening jacket for her, coats, suits and three-button jackets for him. Paolo di Lucente, fashion photographer whose works present a particular chromatic point of view, He’s the experimenter of images for these Tagliatore and Tagliatore 0205 Spring Summer 2019 Collections.
                    </p>
                </div>
                <a data-fancybox="gallery" href="<?php bloginfo('template_url'); ?>/assets/img/item-three.png">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/item-three.png" alt="" class=" wow fadeInUp" data-wow-duration="1.5s">
                </a>
                <div class="video wow fadeInUp" data-wow-duration="1.5s"><iframe width="560" height="315" src="https://www.youtube.com/embed/HYyO4lwIEpc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
               
            </div>
            <form class="specifications">
                <p class="title">
                    jumper
                </p>
                <p class="code">
                    SS 20 <br>
                    Mod. 331J22A2 | art. 53548 | col. 03            
                </p>
                <p class="cost">
                    2000 €
                </p>
                <div class="choose">
                    <div class="quantity">
                        <p>Quantity</p>
                        <input type="text" placeholder="1" class="quantity__input">
                    </div>
                    <div class="colour">
                        <p>colour</p>
                        <div class="color"></div>
                    </div>
                </div>
                <p class="size">
                    Size (Size Guide)
                </p>
                <div class="choose_size_button">
                    <input name="size" id="one" type="radio">
                    <label for="one" class="active">1</label>
                    <input name="size" id="two" type="radio">
                    <label for="two">2</label>
                    <input name="size" id="three" type="radio">
                    <label for="three">3</label>
                    <input name="size" id="four" type="radio">
                    <label for="four">4</label>
                    <input name="size" id="five" type="radio">
                    <label for="five">5</label>
                    <input name="size" id="six" type="radio">
                    <label for="six">6</label>
                </div>
                <button>SELECT A SIZE</button>
            </form>
            
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
<?php get_footer('shop'); ?>