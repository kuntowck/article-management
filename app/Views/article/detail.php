<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article | <?= $article->getTitle(); ?></title>
</head>

<body>
    <h1><?= $article->getTitle(); ?></h1>
    <p><?= $article->getContent(); ?></p>
    <a href="/article">Back to Article List</a>

</body>

</html>