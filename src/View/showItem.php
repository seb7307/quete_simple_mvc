<?php
/**
 * Created by PhpStorm.
 * User: seb
 * Date: 03/10/18
 * Time: 16:45
 */
?>
<!DOCTYPE html>
<html>
<head>  </head>
<body>
<main>
    <h1>Item <?= $item['title'] ?></h1>
    <ul>
        <li>Id : <?= $item['id'] ?></li>
    </ul>
    <a href='/?route=items'>Back to list</a>
</main>
</body>
</html>
