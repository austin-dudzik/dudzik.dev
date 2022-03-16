<?php require_once "classes/Loader.php" ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead('Stats') ?>
<body>
<?= Loader::getExtras() ?>

<?= Loader::getNavigation() ?>

<div class="container">

    <h1 class="text-center ni"
        style="font-weight: 900; font-size: 120px; line-height: 125px; letter-spacing: 6px;background: linear-gradient( 288deg ,#b13cff,#dd45d3 50%,#fd9d52); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"
        class="text">Stats

    </h1>


    <div class="row">
        <div class="col-6 mb-2">
            <div class="card p-0 mt-5">
                <div class="m-5 mt-3 pt-5">
                    <i class="fas fa-clock-rotate-left fa-2x mb-3 text-white"></i>
                    <h3 style="font-size:40px">5+ years</h3>
                    <p class="text-white pt-3 font-weight-bold">DEVELOPMENT EXPERIENCE</p>
                </div>
                <div class="gradient-stripe-alt p-0 m-0 rounded-bottom ni"></div>
            </div>
        </div>
        <div class="col-6 mb-2">
            <div class="card p-0 mt-5">
                <div class="m-5 mt-3 pt-5">
                    <i class="fas fa-code fa-2x mb-3 text-white"></i>
                    <h3 style="font-size:40px">Fluent in 12</h3>
                    <p class="text-white pt-3 font-weight-bold">LANGUAGES & FRAMEWORKS</p>
                </div>
                <div class="gradient-stripe-alt p-0 m-0 rounded-bottom ni"></div>
            </div>
        </div>
        <div class="col-6 mb-2">
            <div class="card p-0 mt-5">
                <div class="m-5 mt-3 pt-5">
                    <i class="fas fa-briefcase fa-2x mb-3 text-white"></i>
                    <h3 style="font-size:40px;line-height:40px">Snap-on Incorporated</h3>
                    <p class="text-white pt-3 font-weight-bold">CURRENT WORKPLACE</p>
                </div>
                <div class="gradient-stripe-alt p-0 m-0 rounded-bottom ni"></div>
            </div>
        </div>
        <div class="col-6 mb-2">
            <div class="card p-0 mt-5">
                <div class="m-5 mt-3 pt-5">
                    <i class="fas fa-shapes fa-2x mb-3 text-white"></i>
                    <h3 style="font-size:40px">13 total</h3>
                    <p class="text-white pt-3 font-weight-bold">PROJECTS COMPLETED</p>
                </div>
                <div class="gradient-stripe-alt p-0 m-0 rounded-bottom ni"></div>
            </div>
        </div>
        <div class="col-12 mb-2">
            <div class="card p-0 mt-5">
                <div class="m-5 mt-3 pt-5">
                    <div class="d-flex">
                        <div>
                            <i class="fas fa-rectangle-terminal fa-3x mb-3 mr-4 text-white mt-4"></i>
                        </div>
                        <div>
                            <h3 style="font-size:40px">Web Developer Intern</h3>
                            <p class="text-white pt-3 font-weight-bold mb-2">CURRENT POSITION</p>
                        </div>
                    </div>
                </div>
                <div class="gradient-stripe-alt p-0 m-0 rounded-bottom ni"></div>
            </div>
        </div>
        <div class="col-6">
            <div class="card p-0 mt-5">
                <div class="m-5 mt-3 pb-4">
                    <p class="text-white pt-5">I'd love to hear from you! Please complete the
                        following contact form or reach out at one of my alternate contacts with
                        inquiries and ideas.</p>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card p-0 mt-5">
                <div class="m-5 mt-3 pb-4">
                    <p class="text-white pt-5">I'd love to hear from you! Please complete the
                        following contact form or reach out at one of my alternate contacts with
                        inquiries and ideas.</p>
                </div>
            </div>
        </div>
    </div>


    <?= Loader::getFooter() ?>

</div>

<?= Loader::getScripts() ?>
</body>
</html>