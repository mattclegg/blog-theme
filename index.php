<!DOCTYPE html>
<html>
<head>
<?php wp_head() ?>
</head>
<body <?php body_class() ?>>

<header>
    <div class="container">
        <h1><a href="<?php echo home_url() ?>" rel="home"><?php bloginfo('title') ?></a></h1>
        <blockquote class="description"><?php bloginfo('description') ?></blockquote>
        <blockquote>{"location": "Bordeaux", "job": {
            "CTO": "<a href="http://dijiwan.com">Dijiwan</a>",
            "freelance": "<a href="http://cyneticmonkey.com">CyneticMonkey</a>"
        }};</blockquote>
    </div>

</header>

<div class="container">
    <div class="row">
        <div class="span10" role="main">
            <div class="row">
            <?php while(have_posts()): the_post() ?>
            <div class="span5">
                <article>
                    <h2><a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title()) ?>" rel="bookmark"><?php the_title() ?></a></h2>

                    <div class="excerpt"><?php the_excerpt() ?></div>
                </article>
            </div>
            <?php endwhile ?>
            </div>
        </div>

        <aside class="span2">
            <?php get_sidebar() ?>
        </aside>
    </div>
</div>

<?php wp_footer() ?></body></html>