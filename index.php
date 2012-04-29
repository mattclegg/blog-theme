<?php get_header() ?>

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

                <?php get_template_part('loop', 'navigation') ?>
            </div>
        </div>

        <aside class="span2">
            <?php get_sidebar() ?>
        </aside>
    </div>
</div>
<?php get_footer() ?>