<?php get_header() ?>

<div class="container">
    <div class="row">
        <div class="span10" role="main">
            <div class="row">
                <?php while(have_posts()): the_post() ?>
                <div class="span10">
                    <article>
                        <header>
                            <h2><a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title()) ?>" rel="bookmark"><?php the_title() ?></a></h2>
                        </header>

                        <div class="excerpt"><?php the_excerpt() ?></div>

                        <ul class="metadata stacked stacked-horizontal">
                            <li class="views"><span class="value"><?php the_view_count() ?></span> lectures</li>
                            <li class="comments"><a href="<?php comments_link() ?>">
                                <?php comments_number(
                                        '<span class="value">0</span> commentaires',
                                        '<span class="value">%</span> commentaire',
                                        '<span class="value">%</span> commentaires'
                                    ) ?>
                            </a></li>
                        </ul>
                    </article>
                </div>
                <?php endwhile ?>

                <?php get_template_part('loop', 'navigation') ?>
            </div>
        </div>

        <aside class="span2">
            <?php get_sidebar() ?>
        </aside>
    </div>
</div>
<?php get_footer() ?>