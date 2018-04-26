<div>
    <h1>
        la liste des posts
    </h1>
    <div>
        <a href="index.php?a=create&r=post">
            Créer un article
        </a>
    </div>
    <ol>
        <?php foreach ($data['data']['posts'] as $post): ?>
            <li>
                <h2>
                    <a href="index.php?a=show&r=post&id=<?= $post->id; ?>"><?= $post->title; ?></a>

                </h2>
                <a href="index.php?a=edit&r=post&id=<?= $post->id; ?>">
                    Editer le post
                </a>
                <br>
                <a href="index.php?a=confirmDelete&r=post&id=<?= $post->id; ?>">
                    Effacer le post
                </a>
            </li>
        <?php endforeach; ?>
    </ol>
</div>