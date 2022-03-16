<?php

require_once "classes/Loader.php";

$project_name = "Eric Carle";
$project_slug = "eric_carle_homepage";
$project_url = "https://adudzik.bitlampsites.com/wpd/final/";
$project_short_desc = "This is my personal website.";

$project_tal_names = array("HTML", "CSS", "PHP", "WordPress", "MySQL", "Bootstrap");
$project_tal_icons = array("fab fa-html5", "fab fa-css3", "fab fa-php", "fab fa-wordpress", "fas fa-database", "fab fa-bootstrap");

?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead($project_name) ?>
<body>
<?= Loader::getExtras() ?>

<?= Loader::getNavigation() ?>

<div class="container">

    <div class="d-flex justify-content-between">
    <div>
        <a href="projects" class="text-white text-decoration-none mb-4">
            <i class="far fa-long-arrow-left mr-2"></i> Back to all projects
        </a>
    </div>
    <div>
        <a href="projects" class="text-white text-decoration-none">Projects</a>
        / <span class="text-muted"><?= $project_name ?></span>
    </div>
    </div>

    <div class="card p-0 mt-4">
        <img src="assets/img/projects/<?= $project_slug ?>/01.png" class="img-fluid w-100 rounded-top" alt="Cover of <?= $project_name ?>">
        <img width="100" height="100" src="assets/img/projects/icons/<?= $project_slug ?>.png"
             style="margin-top: -40px" alt="DomainKit" class="image-8 ml-5">
        <div class="m-5 mt-3 pb-5">
            <div class="d-flex justify-content-between">
            <div>
                <h3 class="my-0 text-white"><?= $project_name ?></h3>
                <div class="subtitle"><?= $project_short_desc ?></div>
            </div>

                <div>
            <a href="<?= $project_url ?>" target="_blank" class="button alt">Visit project
                <i class="fas fa-arrow-up-right-from-square ml-2"></i></a>
                </div>

            </div>

            <h4 class="text-white mt-4">Description</h4>
            <p class="text-muted">Nova is a versatile feedback management platform I developed that
                allows for easy feedback collection from users.</p>

            <div class="bg-gradient text-white p-4 rounded">
                <h4 class="mb-4">Languages & Frameworks</h4>

                <div class="row">
                        <?php for($i = 0; $i < count($project_tal_names); $i++) {
                            echo '<div class="col-md-4 mb-2">
                            <i class="' . $project_tal_icons[$i] . ' mr-2"></i>
                            <span>' . $project_tal_names[$i] . '</span>
                            </div>';
                        } ?>
                </div>

            </div>

            <h4 class="text-white mt-4">Screenshots</h4>
            <div class="row">
                <?php foreach (glob("assets/img/projects/eric_carle_homepage/" . '*' . ".png") as $file) { ?>
                    <div class="col-4 mb-4">
                        <img src="<?= $file ?>" class="img-fluid rounded" data-featherlight="<?= $file ?>" alt="Screenshot of <?= $project_name ?>">
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>

    <h4 class="text-white mb-4">Explore other projects...</h4>

    <div class="row">

        <div class="col-md-4">
            <a href="#" class="card p-0">
                <img src="assets/img/projects/covers/eric_carle_homepage.png"
                     class="img-fluid w-100 rounded-top" alt="Cover of Eric Carle Homepage">
                <img width="75" height="75" src="assets/img/projects/icons/eric_carle_homepage.png"
                     style="margin-top: -36px;margin-left: 34%;" alt="Icon of Eric Carle Homepage">
                <div class="p-4 text-center pt-3">
                        <div class="title">Eric Carle</div>
                    <div class="subtitle">Intuitive prioritisation software for
                        teams.
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="#" class="card p-0">
                <img src="assets/img/projects/covers/campfire.png"
                     class="img-fluid w-100 rounded-top" alt="Icon of Campfire">
                <img width="75" height="75" src="assets/img/projects/icons/campfire.png"
                     style="margin-top: -36px;margin-left: 34%;" alt="DomainKit">
                <div class="p-4 text-center pt-3">
                        <div class="title">Campfire</div>
                    <div class="subtitle">Intuitive prioritisation software for
                        teams.
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="#" class="card p-0">
                <img src="assets/img/projects/covers/dune.png"
                     class="img-fluid w-100 rounded-top" alt="Cover of Dune">
                <img width="75" height="75" src="assets/img/projects/icons/dune.png" alt="Icon of Dune"
                     style="margin-top: -36px;margin-left: 34%;">
                <div class="p-4 text-center pt-3">
                        <div class="title">Dune</div>
                    <div class="subtitle">Intuitive prioritisation software for
                        teams.
                    </div>
                </div>
            </a>
        </div>
    </div>


    <?= Loader::getFooter() ?>

</div>

<?= Loader::getScripts() ?>
</body>
</html>