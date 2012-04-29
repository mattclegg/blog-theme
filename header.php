<!DOCTYPE html>
<html>
<head>
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>

<header id="header">
    <div class="container">
        <h1><a href="<?php echo home_url() ?>" rel="home"><?php bloginfo('title') ?></a></h1>
        <blockquote class="description"><?php bloginfo('description') ?></blockquote>
        <blockquote>{"location": "Bordeaux", "job": {
            "CTO": "<a href="http://dijiwan.com">Dijiwan</a>",
            "freelance": "<a href="http://cyneticmonkey.com">CyneticMonkey</a>"
            }};</blockquote>
    </div>
</header>