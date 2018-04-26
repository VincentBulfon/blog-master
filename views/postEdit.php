<form action="index.php" method="POST">
    <label for="title" id="title">
        titre
    </label>
    <input type="text" id="title" name="title" value="<?= $data['data']['post']->title ?>">
    <br>
    <label for="contenu" id="content">
        Contenu
    </label>
    <textarea name="contenu" id="contenu" cols="30" rows="10">
        <?= $data['data']['post']->body  ?>
    </textarea>
    <input type="hidden" name="a" value="store">
    <input type="hidden" name="r" value="post">
    <input type="hidden" name="id" value="<?= $data['data']['post']->id; ?>">
    <input type="submit" value="mettre à jour cet article">
</form>