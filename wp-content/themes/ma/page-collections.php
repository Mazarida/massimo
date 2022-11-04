<?php // Template Name: COLLECTIONS
global $conditional_hd;
//$conditional_hd = '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/assets/css/shop.css">';
get_header();
?>
<?php if ( have_rows( 'collection_row' ) ) : $i = 0;
    while ( have_rows( 'collection_row' ) ) : the_row(); $i++; ?>
        <div class="main_page" style="background-image: <?php
            $collection1_screen1_image = get_sub_field( 'image' );
            if ( $collection1_screen1_image ) {
                echo "url('".$collection1_screen1_image['url']."'),'";
            }
            $collection1_screen1_image = get_sub_field( 'image_2' );
            if ( $collection1_screen1_image ) {
                echo "url('".$collection1_screen1_image['url']."');'";
            }
            ?>">
            <?php if ($i == 1) : ?>
                <header class="main_page__header">
                    <a href="#" class="main_page__button">menu</a>
                    <p class="leng"><a class="lng__changer" href="?lang=it&currency=EUR">IT</a>   <span style="display: inline-block; padding-left: 1em; padding-right: 1em;"><a class="lng__changer" href="?lang=en&currency=EUR">EN</a></span>   <a class="lng__changer" href="?lang=ru&currency=RUB">RU</a></p>
                </header>
            <?php endif; ?>
            <div class="main_page__look_block">
                <a href="<?php $post_object = get_sub_field( 'collection_link' );
                if ( $post_object ):
                    $post = $post_object;
                    setup_postdata( $post );
                    the_permalink();
                    wp_reset_postdata();
                endif; ?>" class="left_block">
                    <p>
                        <?php the_sub_field( 'text' ); ?>
                    </p>
                </a>
                <a href="<?php $post_object = get_sub_field( 'collection_link_2' );
                    if ( $post_object ):
                        $post = $post_object;
                        setup_postdata( $post );
                        the_permalink();
                        wp_reset_postdata();
                    endif; ?>" class="right_block">
                    <p>
                        <?php the_sub_field( 'text_2' ); ?>
                    </p>
                </a>
            </div>
        </div>
        <?php if ($i == 1) : ?>
            <?php get_template_part('section', 'menu'); ?>
        <?php endif; ?>
    <?php endwhile;
    endif;
?>
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