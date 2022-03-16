<?php require_once "classes/Loader.php" ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead('Thank you') ?>
<body>
<?= Loader::getExtras() ?>
<?= Loader::getNavigation() ?>
<div class="container text-center">
    <div class="intro">
        <h1 class="gradient-heading ni">Thank you!</h1>
        <p>Your message has arrived safe and sound in my inbox.</p>
        <p class="mt-4">I'll get back to you as soon as possible. Talk soon!</p>
        <a href="./" class="button-3 primary text-white w-button">Continue to homepage <i
                    class="far fa-long-arrow-right ml-2"></i></a>
    </div>
    <?= Loader::getScripts() ?>
</body>
</html>