<!DOCTYPE html>
<html class="not-ie no-js" lang="<?php language_attributes(); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header" class="container clearfix">
        <a href="<?= home_url(); ?>" id="logo">
            <img src="<?= get_theme_file_uri('img/logo.png'); ?>" alt="SmartStart">
        </a>
        <nav id="main-nav">
            <?php wp_nav_menu( [ 'theme_location' => 'header' ] ); ?>
        </nav>
    </header>
    <section id="content" class="container clearfix">
