<?php ob_start(); ?>

<div class="container text-center">
    <div id="divTrafficLight" class="slate" data-stateduration="<?= $light->stateDuration() ?>">
        <div class="lamp <?= $light->red == LampState::ON ? 'red' : 'off' ?>"></div>
        <div class="lamp <?= $light->yellow == LampState::ON ? 'yellow' : ($light->yellow == LampState::BLINK ? 'blinking' : 'off') ?>"></div>
        <div class="lamp <?= $light->green == LampState::ON ? 'green' : 'off' ?>"></div>
    </div>
    <br>
    <?php if($light->canStop()){ ?>
        <br><a class="btn btn-primary" href="?action=hs">Suspendre</a>
    <?php } ?>
    <?php if($light->state == 4){ ?>
        <br><a class="btn btn-primary" href="?action=next">Reprendre</a>
    <?php } ?>
</div>

<?php
$content = ob_get_clean();
require_once "layout.php";
?>
