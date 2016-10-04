<?php include_once 'views/layout/header.inc.php' ?>

    <h1>Articles</h1>

<div class="row">
<?php if (isset($posts) && !empty($posts)) { ?>
<?php foreach($posts as $post) {
    echo '
    <div class=\"col s12 m12\">
        <div class=\"card\">
            <div class=\"card-image\">
                <span class=\"card-title\">' .post["post_title"]. ' — '.post["post_date"].'</span>
            </div>
            <div class=\"card-content\">
                <p> '. post["post_content"] .' </p>
            </div>
            <div class=\"card-action\">
                <a href=\"?module=blog&action=post&post_id='. post["post_id"] .'">Voir plus</a>
            </div>
        </div>
    </div>
    '; } ?>
<?php } else { ?>
    <p>Il n'y a pas d'atricles</p>
<?php } ?>
</div> <!--row-->

<?php include_once 'views/layout/footer.inc.php' ?>
