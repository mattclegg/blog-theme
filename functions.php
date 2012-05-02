<?php

add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_image_size('cover-medium', 380, 100, false);
add_image_size('cover', 780, 250, false);


require dirname(__FILE__).'/vendor/wp-less/bootstrap-for-theme.php';
$WPLessPlugin->dispatch();

/*
 * Sidebars
 */
register_sidebar(array(
    'id' => 'sidebar-single',
    'name' => 'Sidebar Single',
));
register_sidebar(array(
    'id' => 'sidebar-default',
    'name' => 'Sidebar Default',
));
register_sidebar(array(
    'id' => 'sidebar-common-top',
    'name' => 'Sidebar Common (Top)',
));
register_sidebar(array(
    'id' => 'sidebar-common-bottom',
    'name' => 'Sidebar Common (Bottom)',
    'before_widget' => '<li id="%1$s" class="widget widget-compact %2$s">',
));

function theme_comment_form( $args = array(), $post_id = null ) {
    global $id;

    if ( null === $post_id )
        $post_id = $id;
    else
        $id = $post_id;

    $commenter = wp_get_current_commenter();
    $user = wp_get_current_user();
    $user_identity = ! empty( $user->ID ) ? $user->display_name : '';

    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $fields =  array(
        'author' => '<div class="control-group">' . '<label for="author" class="control-label">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
            '<div class="controls"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div></div>',
        'email'  => '<div class="control-group"><label for="email" class="control-label">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
            '<div class="controls"><input id="email" class="input-xlarge" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div></div>',
        'url'    => '<div class="control-group"><label for="url" class="control-label">' . __( 'Website' ) . '</label>' .
            '<div class="controls"><input id="url" class="input-xlarge" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div></div>',
    );

    $required_text = sprintf( ' ' . __('Required fields are marked %s'), '<span class="required">*</span>' );
    $defaults = array(
        'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
        'comment_field'        => '<div class="control-group"><label for="comment" class="control-label">' . _x( 'Comment', 'noun' ) . '</label><div class="controls"><textarea id="comment" name="comment" class="input-xxlarge" cols="45" rows="8" aria-required="true" required></textarea></div></div>',
        'must_log_in'          => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
        'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
        'comment_notes_before' => '<p class="comment-notes">' . __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) . '</p>',
        'comment_notes_after'  => '<p class="form-allowed-tags">' . sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ), ' <code>' . allowed_tags() . '</code>' ) . '</p>',
        'id_form'              => 'commentform',
        'id_submit'            => 'submit',
        'title_reply'          => __( 'Leave a Reply' ),
        'title_reply_to'       => __( 'Leave a Reply to %s' ),
        'cancel_reply_link'    => __( 'Cancel reply' ),
        'label_submit'         => __( 'Post Comment' ),
    );

    $args = wp_parse_args( $args, apply_filters( 'comment_form_defaults', $defaults ) );

    ?>
<?php if ( comments_open() ) : ?>
    <?php do_action( 'comment_form_before' ); ?>
    <div id="respond">
        <header>
            <h2 id="reply-title">
                <?php comment_form_title( $args['title_reply'], $args['title_reply_to'] ); ?>
                <small><?php cancel_comment_reply_link( $args['cancel_reply_link'] ); ?></small>
            </h2>
        </header>
        <?php if ( get_option( 'comment_registration' ) && !is_user_logged_in() ) : ?>
        <?php echo $args['must_log_in']; ?>
        <?php do_action( 'comment_form_must_log_in_after' ); ?>
        <?php else : ?>
        <form class="form-horizontal" action="<?php echo site_url( '/wp-comments-post.php' ); ?>" method="post" id="<?php echo esc_attr( $args['id_form'] ); ?>">
            <?php do_action( 'comment_form_top' ); ?>
            <?php if ( is_user_logged_in() ) : ?>
            <?php echo apply_filters( 'comment_form_logged_in', $args['logged_in_as'], $commenter, $user_identity ); ?>
            <?php do_action( 'comment_form_logged_in_after', $commenter, $user_identity ); ?>
            <?php else : ?>
            <?php echo $args['comment_notes_before']; ?>
            <?php
            do_action( 'comment_form_before_fields' );
            foreach ( (array) $args['fields'] as $name => $field ) {
                echo apply_filters( "comment_form_field_{$name}", $field ) . "\n";
            }
            do_action( 'comment_form_after_fields' );
            ?>
            <?php endif; ?>
            <?php echo apply_filters( 'comment_form_field_comment', $args['comment_field'] ); ?>
            <?php echo $args['comment_notes_after']; ?>
            <p class="form-actions">
                <button name="submit" class="btn btn-large" type="submit" id="<?php echo esc_attr( $args['id_submit'] ); ?>">
                    <?php echo esc_html( $args['label_submit'] ); ?>
                </button>
                <?php comment_id_fields( $post_id ); ?>
            </p>
            <?php do_action( 'comment_form', $post_id ); ?>
        </form>
        <?php endif; ?>
    </div><!-- #respond -->
    <?php do_action( 'comment_form_after' ); ?>
    <?php else : ?>
    <?php do_action( 'comment_form_comments_closed' ); ?>
    <?php endif; ?>
<?php
}

/**
 * Styles initialization
 */
function theme_init_styles(){
    wp_enqueue_style('theme', get_stylesheet_directory_uri().'/assets/styles/theme.less');
}
add_action('init', 'theme_init_styles');

/**
 * Removing avatar dimensions to avoid ratio loss in responsive
 * @param $html
 * @return mixed
 */
function theme_filter_get_avatar($html){
    return preg_replace("/height='\d+' width='\d+' /sU", '', $html);
}
add_filter('get_avatar', 'theme_filter_get_avatar', 10, 1);


function theme_cleanup_scripts(){
	wp_deregister_script('jquery');
	wp_deregister_script('jquery-form');
}
add_action('init', 'theme_cleanup_scripts');


/**
 * Enables proper HTTPS detection with WordPress and Alwaysdata
 */
function alwaysdata_ssl()
{
        if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
        {
                $_SERVER['HTTPS'] = 'on';
                $_SERVER['SERVER_PORT'] = 443;
        }
}
add_action('after_setup_theme', 'alwaysdata_ssl');
