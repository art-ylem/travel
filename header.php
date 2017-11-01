<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php bloginfo('name'); ?>;
    wp_title(); </title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="main">
        <div class="head">
            <h2>Выбери своё<br/>Путешествие</h2>
            <a href="<?php echo home_url(); ?>"><span>C</span>hoose <span>T</span>ravel</a>
        </div>
        <div class="content-main">
        <?php wp_nav_menu(array('theme_location' => 'menu', 'container' => false)); ?>

        <form class="search-main" action="<?php echo home_url( '/' ); ?>" method="">
            <input class="search-txt" type="text" name="s">
            <input class="search-btn" type="image" src="<?php bloginfo('template_url') ?>/images/serach-btn.jpg">
        </form>
            <div id="slider">
                <ul id="cycle">
                    <li><img src="<?php bloginfo('template_url') ?>/images/galery.jpg" height="266" width="927" alt="Slides" /></li>
                    <li><img src="<?php bloginfo('template_url') ?>/images/kolizey.jpg" height="266" width="927" alt="Slides" /></li>
                    <li><img src="<?php bloginfo('template_url') ?>/images/piramide.jpg" height="266" width="927" alt="Slides" /></li>
                    <li><img src="<?php bloginfo('template_url') ?>/images/galery.jpg" height="266" width="927" alt="Slides" /></li>
                    <li><img src="<?php bloginfo('template_url') ?>/images/kolizey.jpg" height="266" width="927" alt="Slides" /></li>
                    <li><img src="<?php bloginfo('template_url') ?>/images/piramide.jpg" height="266" width="927" alt="Slides" /></li>
                </ul>
                <div id="cyclePager"></div>
	       </div>