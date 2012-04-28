<!DOCTYPE html>
<html>
<head>
<?php wp_head() ?>
</head>
<body <?php body_class() ?>>

<header>
    <div class="container">
        <h1><?php bloginfo('title') ?></h1>
    </div>

</header>

<div class="container">
    <div class="row">
        <div class="span10" role="main">
            <div class="row">
            <?php while(have_posts()): the_post() ?>
            <div class="span5">
                <article>
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a></h2>

                    <?php the_post_thumbnail('cover-medium') ?>
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