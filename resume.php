<?php require_once "classes/Loader.php" ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead('Resume') ?>
<body>
<?= Loader::getExtras(false) ?>

<?= Loader::getNavigation() ?>

<div style="background:#1a1a1a" class="pb-5">
    <div class="container">
        <h1 class="ni heading heading-lg">Resume</h1>
        <p class="text-white mb-0">Last updated: February 14th, 2021</p>
        <div class="row mt-4">
            <div class="col">
                <a href="assets/pdf/resume.pdf" download="Austin Dudzik Resume"
                   class="btn btn-gradient py-2 btn-block ni"><i class="fas fa-download mr-2"></i>
                    Download</a>
            </div>
            <div class="col">
                <a href="assets/pdf/resume.pdf" target="_blank" class="btn btn-dark py-2 btn-block"><i
                            class="fas fa-arrow-up-right-from-square mr-2"></i> Open in new tab</a>
            </div>
            <div class="col-5"></div>
        </div>
    </div>
</div>
<div class="gradient-stripe ni"></div>

<div class="container pt-5">

    <iframe src="assets/pdf/resume.pdf#toolbar=0&navpanes=0" width="100%" height="970px" scroll="no"
            class="rounded ni"></iframe>



    <?= Loader::getFooter() ?>
</div>
<?= Loader::getScripts() ?>
</body>
</html>