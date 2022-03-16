<?php $title = "About";
require_once "classes/Loader.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead($title) ?>
<body>
<?= Loader::getExtras() ?>
<?= Loader::getNavigation($title) ?>

<div class="container">

    <h1 style="font-size: 120px; line-height: 125px; letter-spacing: 6px;background: linear-gradient( 0deg ,#b13cff,#dd45d3 50%,#fd9d52); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"
        class="text-center mb-5 fw-900"> Maker.<br> Designer.<br> Developer.</h1>

    <div class="card mt-4">

        <div class="card-body p-4 m-2 large-block">

            <img src="assets/img/headshot.jpg"
                 class="rounded float-right ml-4 mt-4 mr-2 mb-5" width="150"
                 alt="Austin Dudzik headshot">

            <h3>About Me</h3>

            <p class="my-3 text-muted">I'm Austin, a talented front-end web developer
                born and
                raised in Milwaukee. With over 5+ years of self-taught experience in
                front-end development and design, I've been building and developing a
                range of websites and web applications since my start in 2017.</p>

            <p class="my-3 text-muted">
                In 2022, I earned my Associate's Degree in Front End
                Web Development at Waukesha County Technical College, where I improved
                upon my pre-existing development skills and expanded my range of
                knowledge in PHP, JavaScript, and WordPress, along with design and UI in
                Adobe Photoshop, Illustrator, and XD.
            </p>

            <p class="my-3 text-muted">Since the start of my development journey, I've
                developed
                well over 20 projects ranging from business applications to hobby
                projects and everything in between, such as <a href="#" class="gradient-text">Campfire</a>,
                an embeddable feedback collection tool, <a href="#"
                                                           class="gradient-text">Dune</a>, a
                full-fledged social media network for Spotify, and <a href="#"
                                                                      class="gradient-text">Nova</a>,
                an easy-to-use
                idea upvote board platform for
                businesses. My passion for code is ever-growing and my portfolio is
                always expanding.</p>

            <p class="my-3 text-muted">Currently, I am employed at Snap-on Incorporated as a web
                developer intern, where I'm in charge of the design, development, and deployment
                of new internal web applications, using my skill set to improve security, audit
                code, and implement new features.</p>

        </div>

    </div>


    <p class="small mt-4 mb-3"><i class="fas fa-code mr-2"></i> Languages & Tools</p>

    <div class="d-flex flex-wrap align-items-stretch" style="column-gap:15px">
        <?php $languages = [["Vue", "vue"], ["JavaScript", "javascript"], ["WordPress", "wordpress"], ["HTML", "html"], ["Firebase", "firebase"], ["Photoshop", "photoshop"], ["Illustrator", "illustrator"], ["Git", "git"], ["C#", "c-sharp"], ["Bootstrap", "bootstrap"], ["CSS", "css"], ["PHP", "php"]
        ];
        for ($i = 0; $i < count($languages); $i++) { ?>
            <div class="mb-4 flex-grow-1">
                <div class="card text-center p-0 px-3">
                    <div class="card-body">
                        <img src="assets/img/knowledge/<?= $languages[$i][1] ?>.png" class="mr-2"
                             alt="" width="20"> <?= $languages[$i][0] ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="text-right">
        <a href="#" class="button-3 bg-transparent w-button mr-0 pr-0">
            View all skills <i class="far fa-long-arrow-right ml-2"></i>
        </a>
    </div>

    <p class="small my-3"><i class="fas fa-graduation-cap mr-2"></i> Education</p>

    <div class="bg-gradient p-1 rounded">
        <div class="card rounded">
            <div class="card-body p-4 mx-2 my-3">
                <h3 class="mt-0">Front End Web Development</h3>
                <div class="d-flex justify-content-between">
                    <p class="small text-muted">AAS / Waukesha County Technical College - GPA:
                        4.0</p>
                    <p class="small">2020 - 2022</p>
                </div>

                <div class="d-flex justify-content-between">
                    <p class="mb-2">Phi Theta Kappa Honor Society</p>
                    <p class="mb-2">2021 - present</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="mb-2">National Technical Honor Society</p>
                    <p class="mb-2">2021 - present</p>
                </div>
                <hr style="background:gray">
                <div class="d-flex justify-content-between">
                    <p class="mb-2">Outstanding Program Student Award</p>
                    <p class="mb-2">March 2022</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="mb-2">Fall 2021 Dean's List</p>
                    <p class="mb-2">January 2022</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="mb-2">Spring 2021 Dean's List</p>
                    <p class="mb-2">June 2021</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="mb-2">Fall 2020 Dean's List</p>
                    <p class="mb-2">January 2021</p>
                </div>
            </div>
        </div>
    </div>

    <p class="small mt-5 mb-4"><i class="fas fa-certificate mr-2"></i> Certifications</p>

    <div class="row">
        <div class="col-3 text-center mb-4">
            <a href="assets/img/certifications/word_2016_expert.png" data-fancybox="certifications">
                <img src="assets/img/certifications/word_2016_expert.png"
                     alt="Microsoft Word certification" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-3 text-center mb-4">
            <a href="assets/img/certifications/outlook_2016.png" data-fancybox="certifications">
                <img src="assets/img/certifications/outlook_2016.png"
                     alt="Microsoft Word certification" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-3 text-center mb-4">
            <a href="assets/img/certifications/word_2016.png" data-fancybox="certifications">
                <img src="assets/img/certifications/word_2016.png"
                     alt="Microsoft Word certification" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-3 text-center mb-4">
            <a href="assets/img/certifications/excel_2016.png" data-fancybox="certifications">
                <img src="assets/img/certifications/excel_2016.png"
                     alt="Microsoft Word certification" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-3 text-center mb-4">
            <a href="assets/img/certifications/powerpoint_2016.png" data-fancybox="certifications">
                <img src="assets/img/certifications/powerpoint_2016.png"
                     alt="Microsoft Word certification" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-3 text-center mb-4">
            <a href="assets/img/certifications/excel_2013.png" data-fancybox="certifications">
                <img src="assets/img/certifications/excel_2013.png"
                     alt="Microsoft Word certification" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-3 text-center mb-3">
            <a href="assets/img/certifications/powerpoint_2013.png" data-fancybox="certifications">
                <img src="assets/img/certifications/powerpoint_2013.png"
                     alt="Microsoft Word certification" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-3 text-center mb-3">
            <a href="assets/img/certifications/word_2016.png" data-fancybox="certifications">
                <img src="assets/img/certifications/word_2016.png"
                     alt="Microsoft Word certification" class="img-fluid rounded">
            </a>
        </div>
    </div>

    <script>

    </script>

    <?= Loader::getFooter() ?>
</div>

<?= Loader::getScripts() ?>
</body>
</html>