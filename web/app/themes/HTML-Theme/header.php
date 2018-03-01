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
        <a href="index.php" id="logo">
            <img src="<?= get_theme_file_uri('img/logo.png'); ?>" alt="SmartStart">
        </a>
        <nav id="main-nav">
            <ul>
                <li class="current"><a href="index.php">Home</a></li>
                <li><a href="team.php">Our Team</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section id="content" class="container clearfix">
