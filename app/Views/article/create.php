<!DOCTYPE html>
<html>

<head>
    <title>Create Article</title>
</head>

<body>
    <h1>Create Article</h1>
    <form action="/article/create" method="post">
        <label for="id">Id:</label>
        <input id="id" type="text" name="id" required><br>
        <label for="title">Title:</label>
        <input id="title" type="text" name="title" required><br>
        <label for="content">Content</label>
        <input id="content" type="text" name="content" requrired><br>
        <button type="submit">Create</button>
    </form>
    <a href="/article">Back to Article List</a>
</body>

</html>