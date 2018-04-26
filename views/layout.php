
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon blog</title>
</head>
<body>
<a href="index.php">
    Tous les posts.
</a>
<a href="index.php?a=getLoginForm&r=auth">
    S'identifier
</a>
<?php include $data['view']; ?>
</body>
</html>