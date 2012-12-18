<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title() ?></title>
    <?php wp_head() ?>
    <!-- Feeds -->
    <meta name="verify-v1" content="gd91pL+4TgGMyfkxvZfbjTHlEXP92hn1s8syzjPTbUw=" />
    <!--// Serveur OpenID //-->
    <link rel="openid.server" href="http://www.myopenid.com/server" />
    <link rel="openid.delegate" href="http://oncle.tom.myopenid.com/" />
    <link rel="openid2.local_id" href="http://oncle.tom.myopenid.com" />
    <link rel="openid2.provider" href="http://www.myopenid.com/server" />
    <meta http-equiv="X-XRDS-Location" content="http://www.myopenid.com/xrds?username=oncle.tom.myopenid.com" />
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

            <a class="brand" href="https://case.oncle-tom.net/slash-me">@ Thomas Parisot</a>
            <div class="nav-collapse collapse">
                <nav class="nav">
                    <li><a href="http://cyneticmonkey.com/expertise">Expertise Web</a></li>
                    <li class="active"><a href="https://case.oncle-tom.net">Blog</a></li>
                    <li><a href="http://cyneticmonkey.com/trainings">Formations</a></li>
                    <li><a href="http://cyneticmonkey.com/talks">Conférences</a></li>
                </nav>
            </div>
        </div>
    </div>
</div>

<header id="header">
    <div class="container">
        <h1><a href="<?php echo home_url() ?>" rel="home"><?php bloginfo('name') ?></a></h1>
        <blockquote class="description"><?php bloginfo('description') ?></blockquote>
    </div>
</header>
