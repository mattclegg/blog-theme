<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="initial-scale=1.0" />
    <title><?php wp_title() ?></title>
    <?php wp_head() ?>
    <link rel="publisher" href="https://plus.google.com/113450102076209289116" />
    <link rel="author" href="https://plus.google.com/113450102076209289116" />
</head>
<body <?php body_class() ?>>

<div class="container">
    <div class="navbar" id="services">
        <div class="navbar-inner">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a class="brand" href="/slash-me">@ Thomas Parisot</a>
            <div class="nav-collapse collapse">
                <nav class="nav">
                    <li><a href="http://cyneticmonkey.com/">Expertise Web</a></li>
                    <li class="active"><a href="<?php echo home_url() ?>">Blog</a></li>
                    <li><a href="http://cyneticmonkey.com/trainings">Formations</a></li>
                    <li><a href="http://cyneticmonkey.com/talks">Conférences</a></li>
                </nav>
            </div>
        </div>
    </div>
</div>

<header class="header">
    <div class="container">
        <h1><a href="<?php echo home_url() ?>" rel="home"><?php bloginfo('name') ?></a></h1>
        <blockquote class="description"><?php bloginfo('description') ?></blockquote>
    </div>
</header>
