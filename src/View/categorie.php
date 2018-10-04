
<!DOCTYPE html>
<html>
<head>MVC 3</head>
<body>
    <section>
        <h1>Categories</h1>
            <ul>
            <?php foreach ($categorie as $categorie) : ?>
                <li><?= $categorie['name'] ?></li>
            <?php endforeach ?>
            </ul>
        </section>
</body>
</html>
