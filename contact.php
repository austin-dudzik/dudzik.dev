<?php require_once "classes/Loader.php" ?>
<!DOCTYPE html>
<html lang="en">
<?= Loader::getHead('Contact') ?>
<body>
<?= Loader::getExtras() ?>

<?= Loader::getNavigation() ?>

<div class="container">

    <h1 class="text-center ni heading">Contact Austin</h1>


    <div class="card -0 mt-5">
        <div class="m-5 mt-3 pb-5">

            <p class="text-white pt-5">I'd love to hear from you! Please complete the following
                contact form or reach out at one of my alternate contacts with inquiries and
                ideas. 👇</p>


            <form class="pt-4" action="https://formsubmit.co/fc50331ed6d2051741a66979e055804a"
                  method="post">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="name" class="text-white">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                               placeholder="Enter your name" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="email" class="text-white">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                               placeholder="Enter your email" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="message" class="text-white">Message</label>
                        <textarea class="form-control" id="message" name="message"
                                  placeholder="Enter your email" rows="7" required></textarea>
                    </div>
                </div>

                <input type="hidden" name="_honey">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" value="http://localhost/orig/dudzik.dev/thanks">

                <button type="submit" class="btn btn-gradient btn-block ni py-2 button-3">
                    <i class="fas fa-paper-plane mr-2"></i> Send message
                </button>
            </form>


            <h4 class="text-white mt-4">Other ways to connect...</h4>

            <div class="row mt-3">
                <div class="col">
                    <a href="tel:4143785182" target="_blank" class="text-white text-decoration-none">
                    <i class="fas fa-phone mr-2"></i> (414) 378-5182</i>
                    </a>
                </div>
                <div class="col">
                    <a href="mailto:austin@dudzik.dev" target="_blank" class="text-white text-decoration-none">
                    <i class="fas fa-envelope mr-2"></i> austin@dudzik.dev</i>
                    </a>
                </div>
                <div class="col">
                    <a href="https://linkedin.com/in/austin-dudzik" target="_blank" class="text-white text-decoration-none">
                    <i class="fab fa-linkedin mr-2"></i> austin-dudzik</i>
                    </a>
                </div>
            </div>


        </div>
    </div>


    <?= Loader::getFooter() ?>

</div>

<?= Loader::getScripts() ?>
</body>
</html>