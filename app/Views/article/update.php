<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article | <?= $article->getTitle(); ?></title>
</head>

<body>
    <h1>Create Article</h1>
    <form action="/article/create" method="post">
        <label for="id">Id:</label>
        <input id="id" type="text" name="id" value="<?= $article->getId(); ?>" required><br>
        <label for="title">Title:</label>
        <input id="title" type="text" name="title" value="<?= $article->getTitle(); ?>" required><br>
        <label for="content">Content</label>
        <input id="content" type="text" name="content" value="<?= $article->getContent(); ?>" requrired><br>
        <button type="submit">Update</button>
    </form>
    <a href="/article">Back to Article List</a>

</body>

</html>