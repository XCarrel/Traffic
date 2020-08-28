<?php require_once('src/home.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Traffic</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/traffic.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</head>
<body>
<div class="container text-center">
    <div class="slate">
        <?php foreach ($lamps as $lamp => $state) { ?>
            <div class="lamp <?= $state ? $lamp : 'off' ?>"></div>
        <?php } ?>
    </div>
    <br>
    <a class="btn btn-primary" href="?state=<?= $nextstate ?>">=></a>
</div>
</body>
</html>

