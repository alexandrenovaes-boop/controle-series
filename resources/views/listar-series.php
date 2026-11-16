<!DOCTYPE html>
<html lang="PR-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Series</h1>
    <ul>
        <?php foreach($series as $serie): ?>
            <li>
                <?= $serie ?>
            </li>
            <?php endforeach; ?>
    </ul>
</body>
</html>