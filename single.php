<?php get_header(); the_post() ?>

<div class="container">
    <div class="row">
        <div class="span10" role="main">

            <article <?php post_class() ?>>
                <h2><a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title()) ?>" rel="bookmark"><?php the_title() ?></a></h2>

                <div class="content">
                    <?php the_content() ?>
                </div>
            </article>
        </div>

        <aside class="span2">
            <?php get_sidebar() ?>
        </aside>
    </div>
</div>
<?php get_footer() ?>