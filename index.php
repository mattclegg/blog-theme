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

                <div class="span5 navigation" id="nav-links">
                    <div class="article">
                        <header>Et sinon ?</header>

                        <div class="content">
                            <p class="previous-next"><?php posts_nav_link() ?></p>

                            <form action="/" method="get">
                                <div class="input-append">
                                    <input type="search" name="s" value="<?php the_search_query()?>" class="input-large" placeholder="..." required><button type="submit" class="btn">Chercher</button>
                                </div>
                            </form>

                            <ul class="inline-list">
                                <li class="heading">Ou enfin, les articles par année :</li>
                                <?php wp_get_archives(array('type' => 'yearly')) ?>
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
<?php get_footer() ?>