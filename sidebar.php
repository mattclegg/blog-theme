<nav>
    <?php dynamic_sidebar('sidebar-common-top') ?>

    <?php if (is_single()): ?>
    <?php dynamic_sidebar('sidebar-single') ?>
    <?php else: ?>
    <?php dynamic_sidebar('sidebar-default') ?>
    <?php endif ?>

    <?php dynamic_sidebar('sidebar-common-bottom') ?>
</nav>