<p class="about">
    <a href="<?php echo site_url('/slash-me') ?>" rel="me" class="about">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/avatar.jpg" alt="" class="avatar">
    </a>
</p>

<?php wp_nav_menu(array(
    'navigation' => 'navigation',
    'container' => 'nav',
)) ?>
