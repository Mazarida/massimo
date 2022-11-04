<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/reset.css?<?=time();?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css?<?=time();?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/animate.css?<?=time();?>">
    <?php
    global $conditional_hd;
    if (isset($conditional_hd) && !empty($conditional_hd)) {
        echo $conditional_hd;
    }
    ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style_fix.css?<?=time();?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>