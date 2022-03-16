<?php require_once "classes/Loader.php" ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead('Coming Soon') ?>
<body>
<?= Loader::getExtras() ?>
<?= Loader::getNavigation() ?>
<div class="container-fluid text-center">
    <h1 class="heading heading-lg ni mb-4">Coming Soon.</h1>
    <p class="text mb-3">At the moment, I'm currently working on a new homepage.</p>
    <p class="text mb-4">Instead, how about checking out my homepage?</p>
    <a href="https://dudzik.dev" class="button-3 primary w-button mt-2">
        Continue to homepage <i class="far fa-long-arrow-right ml-2"></i>
    </a>
</div>
<?= Loader::getScripts() ?>
</body>
</html>