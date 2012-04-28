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

                <div class="span5 navigation" id="nav-links">
                    <div class="article">
                        <header>
                            <?php posts_nav_link(' ', 'Articles plus récents', 'Articles plus anciens') ?>
                        </header>

                        <div class="content">
                            <form action="/" method="get">
                                <div class="input-append">
                                    <input type="search" name="s" value="<?php the_search_query()?>" class="input-large" placeholder="..." required><button type="submit" class="btn">Chercher</button>
                                </div>

                            </form>

                            <ul class="inline-list">
                                <li class="heading">Sinon, les archives annuelles :</li>
                                <?php wp_get_archives('type=yearly&show_post_count=true') ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <aside class="span2">
            <?php get_sidebar() ?>
        </aside>
    </div>
</div>

<?php wp_footer() ?></body></html>