<?php require_once ('src/home.php'); ?>

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
        <div class="lamp <?= $red ? 'red' : 'off' ?>"></div>
        <div class="lamp <?= $yellow ? 'yellow' : 'off' ?>"></div>
        <div class="lamp <?= $green ? 'green' : 'off' ?>"></div>
    </div><br>
    <a class="btn btn-primary" href="?state=<?= ($state+1) % 4 ?>">=></a>
</div>
</body>
</html>

