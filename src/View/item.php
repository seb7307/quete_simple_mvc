<!DOCTYPE html>
<html>
<head>MVC 1 ET 2</head>
<body>
    <section>
        <h1>Items</h1>
            <ul>
            <?php foreach ($item as $item) : ?>
                <li><?= $item['title'] ?></li>
            <?php endforeach ?>
            </ul>
        </section>
</body>
</html>

