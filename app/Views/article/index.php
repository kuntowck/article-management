<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article List</title>
</head>

<body>
    <h1>Article List</h1>
    <a href="/article/create">Tambah Article</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= $article->getId() ?></td>
                <td><?= $article->getTitle() ?></td>
                <td><?= $article->getContent() ?></td>
                <td>
                    <a href="<?= route_to('articleDetail', $article->getSlug()) ?>">Detail</a>
                    <a href="/article/edit/<?= $article->getId() ?>">Edit</a>
                    <form action="/article/delete/<?= $article->getId() ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" onclick="return confirm('Are you sure?')">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>