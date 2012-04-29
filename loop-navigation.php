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