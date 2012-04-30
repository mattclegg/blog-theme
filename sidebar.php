<p class="about">
    <a href="#slash-me" rel="me" class="about"><?php echo get_avatar(get_option('admin_email'), 140) ?></a>
</p>

<?php wp_nav_menu(array(
    'navigation' => 'navigation',
    'container' => 'nav',
)) ?>
