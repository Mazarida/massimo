<?php // Template Name: Товар
global $conditional_hd;
$conditional_hd = '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/assets/css/shop.css?'.time().'">';
get_header();
?>
    <div class="main_page">
        <header class="main_page__header">
            <a href="#" class="main_page__button">menu</a>
            <p class="leng"><a class="lng__changer" href="?lang=it&currency=EUR">IT</a>   <span style="display: inline-block; padding-left: 1em; padding-right: 1em;"><a class="lng__changer" href="?lang=en&currency=EUR">EN</a></span>   <a class="lng__changer" href="?lang=ru&currency=RUB">RU</a></p>
        </header>
    </div>
    <?php get_template_part('section', 'menu'); ?>
    <div class="shop_page">
        <nav>
            <ul>
                <li>All</li>
                <li>Suits</li>
                <li>Jackets</li>
                <li>Trousers</li>
                <li>Shoes</li>
            </ul>
        </nav>
        <div class="marketplace">
            <div class="categories">
                <ul>
                    <li>ALL</li>
                    <li>SS 2020</li>
                    <li>FW 2020</li>
                </ul>
            </div>
            <div class="items">

                <div class="first_line">
                <?php
                $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => -1,
                    #'product_cat'    => 'hoodies'
                );

                $loop = new WP_Query( $args );
                $i = 0;
                while ( $loop->have_posts() ) : $loop->the_post(); $i++;
                    global $product;
                    $product = new WC_Product(get_the_ID());
                    ?>
                        <div class="item abs-link-holder">
                            <a href="<?php the_permalink(); ?>" class="abs-link">&nbsp;</a>
                            <div class="imga wow fadeInUp" data-wow-duration="1.5s" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>');"></div>
                            <p class="item_title"><?php
                                $term_list = wp_get_post_terms(get_the_ID(),'product_cat');
                                foreach ($term_list as $trm) {
                                    if ($trm->parent == '18') {
                                        echo $trm->name;
                                    }
                                }
                                ?> &nbsp; <br>

                                <?php

                                $attributes = $product->get_attributes();
                                $display_result = array();
                                if ( $attributes )
                                    foreach ( $attributes as $attribute ) {
                                        if (!$attribute->get_data()['is_visible']) continue;
                                        if ( $attribute->get_variation() ) {
                                            continue;
                                        }
                                        $name = $attribute->get_name();
                                        if ( $attribute->is_taxonomy() ) {
                                            $terms = wp_get_post_terms( $product->get_id(), $name, 'all' );
                                            $cwtax = $terms[0]->taxonomy;
                                            $cw_object_taxonomy = get_taxonomy($cwtax);
                                            if ( isset ($cw_object_taxonomy->labels->singular_name) ) {
                                                $tax_label = $cw_object_taxonomy->labels->singular_name;
                                            } elseif ( isset( $cw_object_taxonomy->label ) ) {
                                                $tax_label = $cw_object_taxonomy->label;
                                                if ( 0 === strpos( $tax_label, 'Product ' ) ) {
                                                    $tax_label = substr( $tax_label, 8 );
                                                }
                                            }
                                            $display_result_tmp = $tax_label;
                                            $tax_terms = array();
                                            foreach ( $terms as $term ) {
                                                $single_term = esc_html( $term->name );
                                                array_push( $tax_terms, $single_term );
                                            }
                                            $display_result []= $display_result_tmp.' '.implode(', ', $tax_terms);
                                        } else {
                                            $display_result_tmp = $name;
                                            $display_result []= $display_result_tmp.' '.esc_html( implode( ', ', $attribute->get_options() ) );
                                        }
                                    }
                                echo implode(" | ", $display_result);
                                ?>
                            </p>
                        </div>

                    <?php
                if ($i%3 == 0) echo '</div><div class="first_line">';
                endwhile;

                wp_reset_query();
                ?>
            </div>
                <?/*div class="second_line">
                        <div class="item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/shop-item-four.png" alt="">
                            <p class="item_title">SS 20 <br> Mod. 331J22A2 | art. 53548 | col. 03</p>
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/shop-item-five.png" alt="">
                            <p class="item_title">SS 20 <br> Mod. 331J22A2 | art. 53548 | col. 03</p>
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/shop-item-six.png" alt="">
                            <p class="item_title">SS 20 <br> Mod. 331J22A2 | art. 53548 | col. 03</p>
                        </div>
                </div*/?>
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
<?php get_footer('shop'); ?>