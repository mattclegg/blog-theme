<?php get_header() ?>

<div class="container">
  <div class="row">
    <div class="span10" role="main">
      <div class="article">
        <header>
          <h2><?php echo get_query_var('year') ?> <small><?php printf('%s posts', count($posts)) ?></small></h2>
        </header>

        <div class="content">
          <ul class="compact-archives">
          <?php while (have_posts()): the_post() ?>
           <li class="archive-item">
             <time datetime="<?php the_date('Y-m-d') ?>"><?php the_time('d F') ?></time>
             <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a>
           </li>
          <?php endwhile ?>
          </ul>

            <?php //get_template_part('loop', 'navigation') ?>
        </div>
      </div>
    </div>

    <aside class="span2">
        <?php get_sidebar() ?>
    </aside>
  </div>
</div>

<?php get_footer() ?>