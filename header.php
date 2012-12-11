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

<header id="header">
    <div class="container">
        <h1><a href="<?php echo home_url() ?>" rel="home"><?php bloginfo('title') ?></a></h1>
        <blockquote class="description"><?php bloginfo('description') ?></blockquote>
    </div>
</header>
