<?php ob_start(); ?>

<div class="container text-center">
    <div class="slate">
        <div class="lamp <?= $light->red == LampState::ON ? 'red' : 'off' ?>"></div>
        <div class="lamp <?= $light->yellow == LampState::ON ? 'yellow' : ($light->yellow == LampState::BLINK ? 'blinking' : 'off') ?>"></div>
        <div class="lamp <?= $light->green == LampState::ON ? 'green' : 'off' ?>"></div>
    </div>
    <br>
    <a class="btn btn-primary" href="?action=next">=></a>
    <?php if($light->canStop()){ ?>
    <br><a class="btn btn-primary" href="?action=hs">Suspendre</a>
    <?php } ?>
</div>

<?php
$content = ob_get_clean();
require_once "layout.php";
?>
