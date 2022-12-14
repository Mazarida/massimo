<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'mamain', get_bloginfo('template_url').'/main.js', array('jquery'), '1.0', true );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
    if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
    if ( $title == '' ) {
        return '&rarr;';
    } else {
        return $title;
    }
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
    return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
    if ( !is_admin() ) {
        global $id;
        $comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
        return count( $comments_by_type['comment'] );
    } else {
        return $count;
    }
}
add_filter('show_admin_bar', '__return_false');

if (function_exists('acf_add_options_page')) acf_add_options_page();

function show_vid($vid) {
    $vid = explode('v=', $vid);
    $vid = $vid[1];
    $vid = explode('&', $vid);
    $vid = $vid[0];
    ?>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $vid; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php
}

add_action( 'wp_enqueue_scripts', 'enable_fancybox');
function enable_fancybox() {
    wp_enqueue_style('fancybox-style', get_template_directory_uri().'/assets/css/jquery.fancybox.min.css');
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri().'/assets/script/jquery-3.4.1.min.js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('', get_template_directory_uri() . '/assets/script/jquery.fancybox.min.js', array('jquery'), '1.0.0', true );
}