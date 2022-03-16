<?php

class Loader
{

    public static function getHead(string $title = ""): string
    {
        return '
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>' . ($title ? $title . " | Austin Dudzik" : "Austin Dudzik") . '</title>
    <meta content="null" name="description">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8.0.6/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/rules.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap">
</head>
    ';
    }

    public static function getExtras(bool $stripe = true): string
    {
        return
            ($stripe ? '<div class="gradient-stripe fixed-top ni"></div>' : '') .
            '<!-- Start Page loader -->
<div class="loader">
   <div class="text-center">
   <img src="assets/img/logo-white.svg" class="m-3 ni" alt="">
   <div class="loading">
  <div class="loaderBar"></div>
  </div>
</div>
</div>
<!-- End Page loader -->

<!-- Start Mode toggle -->
<div id="modeToggle" data-toggle="tooltip" data-placement="right" title="Toggle light/dark mode">
    <span class="fa-stack">
        <i class="fas fa-circle fa-stack-2x"></i>
        <i class="fas fa-adjust fa-stack-1x fa-inverse"></i>
    </span>
</div>
<!-- End Mode toggle -->

<!-- Start fixed logo -->
<img src="assets/img/logo-white.svg" class="logo logo_float" alt="">
<!-- End fixed logo -->
';
    }

    public static function getNavigation(string $title = ""): string
    {
        return '
    <nav class="navigation navbar navbar-expand-lg">

    <a href="./" class="logo_area navbar-brand">
        <img src="assets/img/logo-white.svg" alt="Austin Dudzik logo" class="logo mr-3">
        <span>Austin Dudzik</span>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggleMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="toggleMenu">

        <div class="mr-auto"></div>

        <div class="menu">

            <div class="menu_item' . ($title === 'About' ? ' active' : '') . '">
                <a href="./about">
                    <div class="text-block-12">About</div>
                </a>
            </div>

            <div class="menu_item' . ($title === 'Projects' ? ' active' : '') . '">
                <a href="./projects">
                    <div class="text-block-12">Projects</div>
                </a>
            </div>

            <div class="menu_item' . ($title === 'Experience' ? ' active' : '') . '">
                <a href="./experience">
                    <div class="text-block-12">Experience</div>
                </a>
            </div>

            <div class="menu_item' . ($title === 'Skills' ? ' active' : '') . '">
                <a href="./skills">
                    <div class="text-block-12">Skills</div>
                </a>
            </div>

            <div class="menu_item' . ($title === 'Stats' ? ' active' : '') . '">
                <a href="./stats">
                    <div class="text-block-12">Stats</div>
                </a>
            </div>
            
            <div class="menu_item' . ($title === 'Resume' ? ' active' : '') . '">
                <a href="./resume">
                    <div class="text-block-12">Resume</div>
                </a>
            </div>

            <div class="menu_item"></div>

            <div class="menu_item">
                <a href="./contact" class="button_small outline w-button">Contact</a>
            </div>

        </div>

    </div>
</nav>
';
    }

    public static function getFooter(): string
    {
        return '
<div class="my-5">
        <div class="border-top border-3 border-dark"></div>

        <div class="briefer">
            <img src="assets/img/headshot.jpg" alt="Headshot of Austin Dudzik">
            <div class="fw-500 mt-4" style="font-size:18px">Austin Dudzik</div>
            <div class="fw-500 text-muted">Front-end Web Developer</div>
            <p>I strive to create strong web and design experiences focused on consistency and
                user experience that remain responsive and capture a project\'s true
                potential.</p>

            <div class="mt-4 mb-3">
                <a href="https://linkedin.com/in/austin-dudzik" target="_blank" class="submit-button w-button">
                    <i class="fab fa-linkedin mr-2"></i> Let\'s connect
                </a>
                <a href="./about" class="thin-link">Learn more about Austin</a>
            </div>
        </div>


         <div class="border-top border-3 border-dark"></div>


        <div class="mt-5">
            <div class="align-items-center">
                <h2 class="subheading text-center mb-3 fw-700">
                    Have an inquiry or idea?<br>
                    <span class="text-span-8 gradient-text ni">Let\'s get in touch.</span>
                </h2>

                <div class="text-center mt-4">
                    <a href="./contact" class="button-3 primary w-button">
                        Get in touch  <i class="far fa-long-arrow-right ml-2"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
     <div class="border-top border-3 border-dark"></div>
        <div class="mt-4 mx-3">
        <div class="d-flex justify-content-between">
            <div>
                <div class="d-flex">
                    <div class="my-auto">
                <img src="assets/img/logo-white.svg" class="logo" width="50" alt="">
                    </div>
                    <div class="ml-4">
                <div class="font-weight-bold">Austin Dudzik</div>
                <p class="mb-0 small text-muted">Front-end Web Developer</p>
                    </div>
                </div>
        </div>
            <div class="my-auto">
                <i class="fab fa-github mr-3" style="font-size:20px"></i>
                <i class="fab fa-linkedin mr-3" style="font-size:20px"></i>
                <i class="fab fa-dribbble" style="font-size:20px"></i>
            </div>
            </div>
            <div class="d-flex justify-content-between">
            <p class="mt-3 small">Made with <span class="ni">❤️</span> in Wisconsin</p>
            <p class="mt-3 small">&copy; ' . date('Y') . ' Austin Dudzik, all rights reserved.</p>
            </div>
        </div>
        
            <div class="menu mb-5 d-flex justify-content-between">

            <div class="menu_item">
                <a href="./about">
                    <div class="text-block-12">About</div>
                </a>
            </div>

            <div class="menu_item">
                <a href="./projects">
                    <div class="text-block-12">Projects</div>
                </a>
            </div>

            <div class="menu_item">
                <a href="./experience">
                    <div class="text-block-12">Experience</div>
                </a>
            </div>

            <div class="menu_item">
                <a href="./skills">
                    <div class="text-block-12">Skills</div>
                </a>
            </div>

            <div class="menu_item">
                <a href="./stats">
                    <div class="text-block-12">Stats</div>
                </a>
            </div>
            
            <div class="menu_item">
                <a href="./stats">
                    <div class="text-block-12">Resume</div>
                </a>
            </div>

            <div class="menu_item">
                <a href="./contact" class="text-block-12">Contact</a>
            </div>

        </div>

        ';

    }

    public static function getScripts(): string
    {
        return '
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-visible@1.2.0/jquery.visible.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8.0.6/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        <script src="assets/js/scripts.js"></script>';
    }

}