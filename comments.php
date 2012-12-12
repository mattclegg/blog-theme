<?php if (comments_open()): ?>
<div id="comments" class="article fluid-height">
    <header>
        <h2><?php comments_number('0 commentaires', '1 commentaire', '% commentaires') ?> <small>— <a href="#respond">En ajouter un ?</a></small></h2>
    </header>

    <?php if(have_comments()): ?>
    <ol id="responses" class="commentlist">
        <?php wp_list_comments('type=comment') ?>
    </ol>
    <?php else: ?>
        <div class="content">
            <p>Il n'y a pas encore de commentaire ni de rétrolien. C'est le moment où jamais ;-)</p>
        </div>
    <?php endif ?>
</div>

<div class="article">
    <?php theme_comment_form() ?>
</div>
<?php endif ?>
